@extends('admin.master')
@section('main-content')
<div id="layoutSidenav_content">
        <main>
          @include('admin.layouts.header')
          <button class="btn btn-success" data-toggle="modal" data-target="#addGenusModal">
            Thêm chi
        </button>
        @include('admin.layouts.addGenusModal')
          @include('admin.layouts.editGenusModal')
          @include('admin.layouts.deleteGenusModal')
  <!-- /.box-header -->
  <div class="box-body table-responsive no-padding">
    <br><br><br><br><br>
    <table class="table table-hover">
      <thead><tr>
      
        <th>STT</th>
        <th>Tên chi VN</th>
        <th>Tên khoa học</th>
        <th>Họ</th>
        <th>Bộ</th>
        <th>Lớp</th>
        <th>Ngành</th>
        <th>Slug</th>
        <th></th>
      </tr>
      </thead>
      <tbody>
        @foreach($genus as $key => $genu)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $genu->chi_vn }}</td>
                <td>{{ $genu->chi_latin }}</td>
                <td>{{ $genu->family->ho_vn }}</td>
                <td>{{ $genu->order->bo_vn }}</td>
                <td>{{ $genu->classes->lop_vn }}</td>
                <td>{{ $genu->phylum->nganh_vn }}</td>
                <td>{{ $genu->slug }}</td>
                
                {{-- <td family="{{ $family->status == 'active' ? 'btn btn-success' : 'btn-btn-danger' }} bg-color">{{ $family->status }}</td> --}}
               
                <td>
                  <form id="deleteGenusForm"  method="POST">
                    <a class="btn btn-success" data-toggle="modal" data-target="#editGenusModal" data-action="edit" data-id="{{ $genu->id }}">
                        <i class="fa fa-edit"></i>
                    </a>
                    @csrf 
                    @method('DELETE')
                    <button type="button" class="btn btn-danger" onclick="confirmDeleteGenus({{ $genu->id }})">
                      <i class="fa fa-trash"></i>
                  </button>
                </form>
            </tr>
        @endforeach
    </tbody></table>
        </main>
        
    </div>
                
                    
@endsection
