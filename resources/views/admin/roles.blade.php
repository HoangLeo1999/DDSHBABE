<!-- resources/views/admin/your_view.blade.php -->
@extends('admin.master')

@section('main-content')
<style>
    .modal-sm {
        max-width: 600px;
    }
</style>
<div id="layoutSidenav_content">
    <main>
        @include('admin.layouts.header')
        <br>

        <button class="btn btn-success" data-toggle="modal" data-target="#addRoleModal">
            Thêm vai trò mới
        </button>
        
        <!-- The Modal -->
        <div class="modal fade" id="addRoleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <!-- Modal content goes here -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thêm vai trò mới</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Your form goes here -->
                        <form id="addRoleForm">
                            @csrf
                            <div class="form-group">
                                <label for="name">Tên vai trò:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="guard_name">Guard name:</label>
                                <input type="text" class="form-control" id="guard_name" name="guard_name" required>
                            </div>
                          
                           
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <button type="button" class="btn btn-primary" onclick="submitRoleData()">Thêm</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="editRoleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Sửa thông tin vai trò</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="editRoleForm">
                            @csrf
                            @method('PUT') {{-- Sử dụng phương thức PUT để cập nhật --}}
                            <input type="hidden" id="editRoleId" name="id">
        
                            <div class="form-group">
                                <label for="editName">Tên vai trò:</label>
                                <input type="text" class="form-control" id="editName" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="editguardname">Guard name:</label>
                                <input type="text" class="form-control" id="editguardname" name="guard_name" required>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <button type="button" class="btn btn-primary" onclick="submitEditRoleData()">Lưu</button>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.layouts.deleteRoleModal')
        

        <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Vai trò </th>
                        <th>Guard-name</th>
                        <th>Ngày tạo</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($accounts as $index => $account)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $account->name }}</td>
                            <td>{{ $account->guard_name }}</td>
                            <td>{{ $account->created_at }}</td>
                            <td>
                                <form action="{{ route('admin.destroyrole', $account->id) }}" method="POST">
                                    <a class="btn btn-success" data-toggle="modal" data-target="#editRoleModal" data-action="edit" data-id="{{ $account->id }}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    @csrf 
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteRoleModal" data-id="{{ $account->id }}">
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
    </main>

    <footer class="footer-admin mt-auto footer-light">
        <div class="container-xl px-4">
            <div class="row">
                <div style="text-align: right" class="col-md-6 small">
                    <i class="fab fa-facebook-square"></i>
                    <i class="fas fa-envelope"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-discord"></i>
                    <i class="fas fa-exclamation-circle"></i>
                </div>
            </div>
        </div>
    </footer>
</div>
 <!-- Include modal template -->
  <!-- Include jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        
  <!-- Include Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <!-- JavaScript to Show Modal -->
  <script>
      

          // Show modal when button is clicked
          $('#addRoleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);});
            
        
            // Add a function to submit form data
            function submitRoleData() {
                // Your form submission logic goes here
                // For example, you can use AJAX to submit the form asynchronously
                $.ajax({
                    type: 'POST',
                    url: '{{ route("admin.addRole") }}', // Change this to your route
                    data: $('#addRoleForm').serialize(),
                    success: function(response) {
                        // Handle success response
                        console.log(response);
                        $('#addRoleModal').modal('toggle');
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
$('#editRoleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget);
  var RoleId = button.data('id');

  // AJAX request to get user data
  $.ajax({
          type: 'GET',
url: '/admin/get-role/'+RoleId,
success: function (data) {
  console.log(data);  // Kiểm tra dữ liệu trả về
  // Fill in the form fields with user data
  $('#editRoleId').val(data.id);
  $('#editName').val(data.name);
  $('#editguardname').val(data.guard_name);
},
error: function (error) {
  console.log(error);
}
      });
});

// Add a function to submit edited user data
function submitEditRoleData() {
    var csrfToken = $('meta[name="csrf-token"]').attr('content');
    console.log('CSRF Token:', csrfToken); 
  $.ajax({
      type: 'PUT',
      url: '{{ route("admin.saveRole") }}', // Đổi thành đường dẫn của bạn
      data: $('#editRoleForm').serialize(),
      headers: {
      'X-CSRF-TOKEN': csrfToken
  },
      success: function(response) {
          console.log(response);
          $('#editRoleModal').modal('toggle');
          // Load updated user list using AJAX
        //   $.ajax({
        //       type: 'GET',
        //       url: '{{ route("admin.role") }}',
        //       success: function(data) {
        //           $('#roles').html(data);
        //       },
        //       error: function(error) {
        //           console.log(error);
        //       }
        //   });
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
