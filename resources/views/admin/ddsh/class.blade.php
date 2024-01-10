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
          <button class="btn btn-success" data-toggle="modal" data-target="#addClassModal">
            Thêm lớp
        </button>
          @include('admin.layouts.addClassModal')
          @include('admin.layouts.editClassModal')
          @include('admin.layouts.deleteClassModal')
       
  <!-- /.box-header -->
  <div class="table-responsive">
    <br><br><br>
    <br><br>
    <table class="table table-hover">
      <thead>
        <tr class="text-align:center">
            <th>STT</th>
            <th>Tên Lớp_VN</th>
            <th>Tên Lớp_Latin</th>
            <th>Tên ngành</th>
            <th>Slug</th>
            <th>Trạng Thái</th>
            <th>Cập nhật</th>
            <th> </th>
        </tr>
    </thead>
    <tbody>
        @foreach($classes as $key => $class)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $class->lop_vn }}</td>
                <td>{{ $class->lop_latin }}</td>
                <td>{{ $class->phylum->nganh_vn }}</td>
                <td>{{ $class->slug }}</td>
                <td class="{{ $class->status == 'active' ? 'btn btn-success' : 'btn-btn-danger' }} bg-color">{{ $class->status }}</td>
                <td>{{ $class->created_at }}</td>
                <td>
                  <form id="deleteUserForm" action="{{ route('admin.destroyClass', $class->id) }}" method="POST">
                    <a class="btn btn-success" data-toggle="modal" data-target="#editClassModal" data-action="edit" data-id="{{ $class->id }}">
                        <i class="fa fa-edit"></i>
                    </a>
                    @csrf 
                    @method('DELETE')
                    <button type="button" class="btn btn-danger" onclick="confirmDeleteClass({{ $class->id }})">
                      <i class="fa fa-trash"></i>
                  </button>
                </form>
            </tr>
        @endforeach
    </tbody></table>
{{--    
    <ul class="pagination">
      {{ $classes->links() }}
  </ul> --}}
   
  </div>
        </main>
        {{-- <footer class="footer-admin mt-auto footer-light">
            <div class="container-xl px-4">
                <div class="row">
                    <div style="text-align: right" class="col-md-6 small"><i class="fab fa-facebook-square"></i>  <i class="fas fa-envelope"></i>  <i class="fab fa-twitter"></i>  <i class="fab fa-discord"></i>  <i class="fas fa-exclamation-circle"></i></div>
                    {{-- <div class="col-md-6 text-md-end small">
                        <a href="#!">Privacy Policy</a>
                        &middot;
                        <a href="#!">Terms &amp; Conditions</a>
                    </div> 
                </div>
            </div>
        </footer> --}}
    </div>
               
  </div>  
  
@endsection
