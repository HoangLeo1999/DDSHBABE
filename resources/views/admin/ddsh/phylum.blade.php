@extends('admin.master')
@section('main-content')
<style>
  .modal-sm {
      max-width: 600px;
  }
</style>

<div id="layoutSidenav_content">
        <main>
          <button class="btn btn-success" data-toggle="modal" data-target="#addPhylumModal">
            Thêm ngành
        </button>
          @include('admin.layouts.header')
          
          @include('admin.layouts.addPhylumModal')
          @include('admin.layouts.editPhylumModal')
          @include('admin.layouts.deletePhylum')
          
  <!-- /.box-header -->
  <div class="table-responsive">
 
    <br><br><br>
    <br><br>
    <table class="table table-hover">
      <thead>
        <tr>
            <th>STT</th>
            <th>Tên Ngành_VN</th>
            <th>Tên Ngành_Latin</th>
            <th>Slug</th>
            <th>Trạng Thái</th>
            <th>Cập nhật</th>
            <th> </th>
        </tr>
    </thead>
    <tbody>
        @foreach($phylums as $key => $phylum)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $phylum->nganh_vn }}</td>
                <td>{{ $phylum->nganh_latin }}</td>
                <td>{{ $phylum->slug }}</td>
                <td class="{{ $phylum->status == 'active' ? 'btn btn-success' : 'btn-btn-danger' }} bg-color">{{ $phylum->status }}</td>
                <td>{{ $phylum->created_at }}</td>
                <td>
                  <form id="deleteUserForm" action="{{ route('admin.destroyPhylum', $phylum->id) }}" method="POST">
                    <a class="btn btn-success" data-toggle="modal" data-target="#editPhylumModal" data-action="edit" data-id="{{ $phylum->id }}">
                        <i class="fa fa-edit"></i>
                    </a>
                    @csrf 
                    @method('DELETE')
                    <button type="button" class="btn btn-danger" onclick="confirmDeletePhylum({{ $phylum->id }})">
                      <i class="fa fa-trash"></i>
                  </button>
                </form>
            </tr>
        @endforeach
    </tbody></table>
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
