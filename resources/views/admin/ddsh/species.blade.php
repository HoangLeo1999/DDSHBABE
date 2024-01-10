@extends('admin.master')
@section('main-content')
<div id="layoutSidenav_content">
        <main>
          @include('admin.layouts.header')
          <a style="float: right" href="#" class="btn btn-success">Thêm loài mới</a>
          <br>
  <!-- /.box-header -->
  <div class="box-body table-responsive no-padding">
    <table class="table table-hover">
      <tbody><tr>
     
        <th>STT</th>
        <th>Tên chi VN</th>
        <th>Tên khoa học</th>
        <th>Slug</th>
        <th>Cập nhật</th>
      </tr>
      <tr>
       
        <td>1</td>
        <td>Tắc Kè</td>
        <td>Gekko gecko</td>
        <td>tac-ke</td>
        <td>3-1-2023 14:51:02</td>
        <td>
        <a href="edit-menu.html" class="btn btn-warning">
          <div class="nav-link-icon"><i class="fas fa-edit"></i></div>  Sửa</a>
        <a href="" class="btn btn-danger">
          <div class="nav-link-icon"><i class="fas fa-trash"></i></div>  Xóa</a>   
        </td>
      </tr>
      <tr>
         
          <td>2</td>
          <td>Tắc Kè Trung Quốc</td>
          <td>Gekko chinensis</td>
          <td>tac-ke-trung-quoc</td>
          <td>3-1-2023 14:51:02</td>
          <td>
              <a href="edit-menu.html" class="btn btn-warning">
                <div class="nav-link-icon"><i class="fas fa-edit"></i></div>  Sửa</a>
              <a href="" class="btn btn-danger">
                <div class="nav-link-icon"><i class="fas fa-trash"></i></div>  Xóa</a>   
              </td>
        </tr>
        <tr>
         
          <td>3</td>
          <td>Tắc Kè Nhật Bản</td>
          <td>Gekko japonicus</td>
          <td>tac-ke-nhat-ban</td>
          <td>3-1-2023 14:51:02</td>
          <td>
              <a href="edit-menu.html" class="btn btn-warning">
                <div class="nav-link-icon"><i class="fas fa-edit"></i></div>  Sửa</a>
              <a href="" class="btn btn-danger">
                <div class="nav-link-icon"><i class="fas fa-trash"></i></div>  Xóa</a>   
              </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Thạch Sùng Baorin</td>
          <td>Hemidactylus bowringi</td>
          <td>thach-sung-baorin</td>
          <td>3-1-2023 14:51:02</td>
          <td>
              <a href="edit-menu.html" class="btn btn-warning">
                <div class="nav-link-icon"><i class="fas fa-edit"></i></div>  Sửa</a>
              <a href="" class="btn btn-danger">
                <div class="nav-link-icon"><i class="fas fa-trash"></i></div>  Xóa</a>   
              </td>
        </tr>
        <tr>
          <td>5</td>
          <td>Bù Dẻ Trơn</td>
          <td>Uvaria boniana </td>
          <td>bu-de-tron</td>
          <td>3-1-2023 14:51:02</td>
          <td>
              <a href="edit-menu.html" class="btn btn-warning">
                <div class="nav-link-icon"><i class="fas fa-edit"></i></div>  Sửa</a>
              <a href="" class="btn btn-danger">
                <div class="nav-link-icon"><i class="fas fa-trash"></i></div>  Xóa</a>   
              </td>
        </tr>
        <tr>
          <td>6</td>
          <td>Kỳ Hương</td>
          <td>Uvaria micrantha </td>
          <td>ran-roi</td>
          <td>3-1-2023 14:51:02</td>
          <td>
              <a href="edit-menu.html" class="btn btn-warning">
                <div class="nav-link-icon"><i class="fas fa-edit"></i></div>  Sửa</a>
              <a href="" class="btn btn-danger">
                <div class="nav-link-icon"><i class="fas fa-trash"></i></div>  Xóa</a>   
              </td>
        </tr>
      
    </tbody></table>
        </main>
        <footer class="footer-admin mt-auto footer-light">
            <div class="container-xl px-4">
                <div class="row">
                    <div style="text-align: right" class="col-md-6 small"><i class="fab fa-facebook-square"></i>  <i class="fas fa-envelope"></i>  <i class="fab fa-twitter"></i>  <i class="fab fa-discord"></i>  <i class="fas fa-exclamation-circle"></i></div>
                    {{-- <div class="col-md-6 text-md-end small">
                        <a href="#!">Privacy Policy</a>
                        &middot;
                        <a href="#!">Terms &amp; Conditions</a>
                    </div> --}}
                </div>
            </div>
        </footer>
    </div>
                
                    
@endsection
