@extends('admin.master')
@section('main-content')
<div id="layoutSidenav_content">
        <main>
          @include('admin.layouts.header')
          <button class="btn btn-success" data-toggle="modal" data-target="#addSpeciesModal">
            Thêm loài
        </button>
        @include('admin.layouts.addSpeciesModal')
          @include('admin.layouts.editSpeciesModal')
          @include('admin.layouts.deleteSpeciesModal')
  <!-- /.box-header -->
  <div class="box-body table-responsive no-padding">
    <br><br><br><br><br>
    <table class="table table-hover">
      <thead><tr> 
        <th>STT</th>
        <th>Tên loài VN</th>
        <th>Tên khoa học</th>
        <th>Họ</th>
        <th>Bộ</th>
        <th>Lớp</th>
        <th>Ngành</th>
        <th></th>
      </tr>
      </thead>
      <tbody>
        @foreach($species as $specy)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $specy->loai_vn }}</td>
                <td>{{ $specy->loai_latin }}</td>
                <td>{{ $specy->family->ho_vn }}</td>
                <td>{{ $specy->order->bo_vn }}</td>
                <td>{{ $specy->classes->lop_vn }}</td>
                <td>{{ $specy->phylum->nganh_vn }}</td>
                
                {{-- <td family="{{ $family->status == 'active' ? 'btn btn-success' : 'btn-btn-danger' }} bg-color">{{ $family->status }}</td> --}}
               
                <td>
                  <form id="deleteSpeciesForm"  method="POST">
                    <a class="btn btn-success" data-toggle="modal" data-target="#editSpeciesModal" data-action="edit" data-id="{{ $specy->id }}">
                        <i class="fa fa-edit"></i>
                    </a>
                    @csrf 
                    @method('DELETE')
                    <button type="button" class="btn btn-danger" onclick="confirmDeleteSpecies({{ $specy->id }})">
                      <i class="fa fa-trash"></i>
                  </button>
                </form>
            </tr>
        @endforeach
    </tbody></table>
        </main>
       
    </div>
                
                    
@endsection
