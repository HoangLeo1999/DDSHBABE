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
            Thêm bộ
        </button>
        @include('admin.layouts.addOrderModal')
          @include('admin.layouts.editOrderModal')
          @include('admin.layouts.deleteOrderModal')
          <br>
  <!-- /.box-header -->
  <div class="box-body table-responsive no-padding">
    <br><br><br>
    <br><br>
    <table class="table table-hover">
      <thead>
        <tr>
            <th>STT</th>
            <th>Tên Bộ_VN</th>
            <th>Tên Bộ_Latin</th>
            <th>Lớp</th>
            <th>Ngành</th>
            <th>Slug</th>
            {{-- <th>Trạng Thái</th> --}}
            <th>Cập nhật</th>
            <th> </th>
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $key => $order)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $order->bo_vn }}</td>
                <td>{{ $order->bo_latin }}</td>
                <td>{{ $order->classes->lop_vn }}</td>
                <td>{{ $order->phylum->nganh_vn }}</td>
                <td>{{ $order->slug }}</td>
                {{-- <td order="{{ $order->status == 'active' ? 'btn btn-success' : 'btn-btn-danger' }} bg-color">{{ $order->status }}</td> --}}
                <td>{{ $order->created_at }}</td>
                <td>
                  <form id="deleteOrderForm" action="{{ route('admin.destroyOrder', $order->id) }}" method="POST">
                    <a class="btn btn-success" data-toggle="modal" data-target="#editOrderModal" data-action="edit" data-id="{{ $order->id }}">
                        <i class="fa fa-edit"></i>
                    </a>
                    @csrf 
                    @method('DELETE')
                    <button type="button" class="btn btn-danger" onclick="confirmDeleteOrder({{ $order->id }})">
                      <i class="fa fa-trash"></i>
                  </button>
                </form>
            </tr>
        @endforeach
    </tbody></table>
        </main>
       
    </div>
                
                    
@endsection
