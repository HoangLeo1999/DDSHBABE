
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

        <button class="btn btn-success" data-toggle="modal" data-target="#addRoleModal">
            Thêm vai trò mới
        </button>
        
        <!-- The Modal -->
        @include('admin.layouts.addRoleModal')
       @include('admin.layouts.editRoleModal')
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
                                    <button type="button" class="btn btn-danger" onclick="confirmDeleteRole({{ $account->id }})">
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

    {{-- <footer class="footer-admin mt-auto footer-light">
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
    </footer> --}}
</div>
 <!-- Include modal template -->
  <!-- Include jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        
  <!-- Include Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <!-- JavaScript to Show Modal -->
</main>
</div>
@endsection
