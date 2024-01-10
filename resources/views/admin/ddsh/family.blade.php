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
          <button class="btn btn-success" data-toggle="modal" data-target="#addOrderModal">
            Thêm họ
        </button>
        @include('admin.layouts.addFamilyModal')
          @include('admin.layouts.editFamilyModal')
          @include('admin.layouts.deleteFamilyModal')
          
  <!-- /.box-header -->
  <div class="box-body table-responsive no-padding">
    <br><br><br>
    <br><br>
    <table class="table table-hover">
      <thead>
        <tr>
            <th>STT</th>
            <th>Tên Họ_VN</th>
            <th>Tên Họ_Latin</th>
            <th>Bộ</th>
            <th>Lớp</th>
            <th>Ngành</th>
            <th>Slug</th>
            <th>Trạng Thái</th>
            <th>Cập nhật</th>
            <th> </th>
        </tr>
    </thead>
    <tbody>
        @foreach($families as $key => $family)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $family->ho_vn }}</td>
                <td>{{ $family->ho_latin }}</td>
                <td>{{ $family->order->bo_vn }}</td>
                <td>{{ $family->classes->lop_vn }}</td>
                <td>{{ $family->phylum->nganh_vn }}</td>
                <td>{{ $family->slug }}</td>
                <td family="{{ $family->status == 'active' ? 'btn btn-success' : 'btn-btn-danger' }} bg-color">{{ $family->status }}</td>
                <td>{{ $family->created_at }}</td>
                <td>
                  <form id="deleteOrderForm" action="{{ route('admin.destroyFamily', $family->id) }}" method="POST">
                    <a class="btn btn-success" data-toggle="modal" data-target="#editFamilyModal" data-action="edit" data-id="{{ $family->id }}">
                        <i class="fa fa-edit"></i>
                    </a>
                    @csrf 
                    @method('DELETE')
                    <button type="button" class="btn btn-danger" onclick="confirmDeleteFamily({{ $family->id }})">
                      <i class="fa fa-trash"></i>
                  </button>
                </form>
            </tr>
        @endforeach
    </tbody></table>
        </main>
       
    </div>
                
                    
@endsection
