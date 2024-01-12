<!-- resources/views/admin/account.blade.php -->
@extends('admin.master')

@section('main-content')
<style>
    .modal-sm {
        max-width: 600px;
    }
</style>
<div style="flex-grow:1" id="layoutSidenav_content">
    <main>
        @include('admin.layouts.header')
        <br>

        <!-- Button to trigger modal -->
        <button class="btn btn-success" data-toggle="modal" data-target="#addUserModal">
            Thêm tài khoản mới
        </button>
        
        <!-- The Modal -->
        <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <!-- Modal content goes here -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thêm tài khoản mới</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Your form goes here -->
                        <form id="addUserForm">
                            @csrf
                            <div class="form-group">
                                <label for="name">Tên tài khoản:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Mật khẩu:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="form-group">
                                <label for="role">Chọn vai trò:</label>
                                <select class="form-control" id="role" name="roles[]" required multiple>
                                    <!-- Loop through roles and display them as options -->
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <button type="button" class="btn btn-primary" onclick="submitUserData()">Lưu</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Sửa thông tin tài khoản</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="editUserForm">
                            @csrf
                            @method('PUT') {{-- Sử dụng phương thức PUT để cập nhật --}}
                            <input type="hidden" id="editUserId" name="id">
        
                            <div class="form-group">
                                <label for="editName">Tên tài khoản:</label>
                                <input type="text" class="form-control" id="editName" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="editEmail">Email:</label>
                                <input type="email" class="form-control" id="editEmail" name="email" required>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <button type="button" class="btn btn-primary" onclick="submitEditUserData()">Lưu</button>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.layouts.confirmDeleteModal')
        
        
        <!-- Display User Table -->
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên tài khoản</th>
                        <th>Email</th>
                        <th>Ngày tạo</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($accounts as $index => $account)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $account->name }}</td>
                        <td>{{ $account->email }}</td>
                        <td>{{ $account->created_at }}</td>
                        <td>
                            <form id="deleteUserForm" action="{{ route('admin.destroy', $account->id) }}" method="POST">
                                <a class="btn btn-success" data-toggle="modal" data-target="#editUserModal" data-action="edit" data-id="{{ $account->id }}">
                                    <i class="fa fa-edit"></i>
                                </a>
                                @csrf 
                                @method('DELETE')
                                <button type="button" class="btn btn-danger" onclick="confirmDeleteUser({{ $account->id }})">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5">Không có dữ liệu</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <!-- Include jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        
        <!-- Include Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
        <!-- JavaScript to Show Modal -->
        <script>
            
    
                // Show modal when button is clicked
                $('#addUserModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);});
            
        
            // Add a function to submit form data
            function submitUserData() {
                // Your form submission logic goes here
                // For example, you can use AJAX to submit the form asynchronously
                $.ajax({
                    type: 'POST',
                    url: '{{ route("admin.addAccount") }}', // Change this to your route
                    data: $('#addUserForm').serialize(),
                    success: function(response) {
                        // Handle success response
                        console.log(response);
                        $('#addUserModal').modal('toggle');
                        // You may want to reload the page or update the user list here
    //                     $.ajax({
    //     type: 'GET',
    //     url: '{{ route("admin.account") }}', // Thay đổi thành đường dẫn của bạn
    //     success: function(data) {
    //         // Update the user list
    //         $('#account').html(data);
    //     },
    //     error: function(error) {
    //         console.log(error);
    //     }
    // });
    location.reload(); 
                    },
                    error: function(error) {
                        // Handle error response
                        console.log(error.responseJSON.errors);
                    }
                });
            }
             // Show edit modal when button is clicked
    $('#editUserModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var userId = button.data('id');

        // AJAX request to get user data
        $.ajax({
                type: 'GET',
    url: '/admin/get-account/'+userId,
    success: function (data) {
        console.log(data);  // Kiểm tra dữ liệu trả về
        // Fill in the form fields with user data
        $('#editUserId').val(data.id);
        $('#editName').val(data.name);
        $('#editEmail').val(data.email);
    },
    error: function (error) {
        console.log(error);
    }
            });
    });

    // Add a function to submit edited user data
    function submitEditUserData() {
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            type: 'PUT',
            url: '{{ route("admin.saveAccount") }}', // Đổi thành đường dẫn của bạn
            data: $('#editUserForm').serialize(),
            headers: {
            'X-CSRF-TOKEN': csrfToken
        },
            success: function(response) {
                console.log(response);
                $('#editUserModal').modal('toggle');
                // Load updated user list using AJAX
                // $.ajax({
                //     type: 'GET',
                //     url: '{{ route("admin.account") }}',
                //     success: function(data) {
                //         $('#account').html(data);
                //     },
                //     error: function(error) {
                //         console.log(error);
                //     }
                // });
                 location.reload(); 
            },
            error: function(error) {
                console.log(error);
            }
        });
    }

        </script>
    </main>
</div>
@endsection
