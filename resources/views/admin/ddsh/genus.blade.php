@extends('admin.master')
@section('main-content')
<div id="layoutSidenav_content">
        <main>
          @include('admin.layouts.header')
          <a style="float: right" href="#" class="btn btn-success">Thêm chi mới</a>
          <br>
  <!-- /.box-header -->
  <div class="box-body table-responsive no-padding">
    <table class="table table-hover">
      <tbody><tr>
        <th></th>
        <th>STT</th>
        <th>Tên chi VN</th>
        <th>Tên khoa học</th>
        <th>Slug</th>
        <th>Cập nhật</th>
      </tr>
      <tr>
        <td><img src="https://bachkhoa-aptech.edu.vn/upload/image/banner-web(1).jpg" alt="" width="250px"></td>
        <td>1</td>
        <td>Tắc Kè</td>
        <td>Gekkonidae</td>
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
          <td><img src="https://bachkhoa-aptech.edu.vn/upload/image/banner-web(1).jpg" alt="" width="250px"></td>
          <td>2</td>
          <td>Nhông vảy</td>
          <td>Calotes</td>
          <td>nhong-vay</td>
          <td>3-1-2023 14:51:02</td>
          <td>
              <a href="edit-menu.html" class="btn btn-warning">
                <div class="nav-link-icon"><i class="fas fa-edit"></i></div>  Sửa</a>
              <a href="" class="btn btn-danger">
                <div class="nav-link-icon"><i class="fas fa-trash"></i></div>  Xóa</a>   
              </td>
        </tr>
        <tr>
          <td><img src="https://bachkhoa-aptech.edu.vn/upload/image/banner-web(1).jpg" alt="" width="250px"></td>
          <td>3</td>
          <td>Thằn Lằn Bóng</td>
          <td>Scincidae</td>
          <td>than-lan-bong</td>
          <td>3-1-2023 14:51:02</td>
          <td>
              <a href="edit-menu.html" class="btn btn-warning">
                <div class="nav-link-icon"><i class="fas fa-edit"></i></div>  Sửa</a>
              <a href="" class="btn btn-danger">
                <div class="nav-link-icon"><i class="fas fa-trash"></i></div>  Xóa</a>   
              </td>
        </tr>
        <tr>
          <td><img src="https://bachkhoa-aptech.edu.vn/upload/image/banner-web(1).jpg" alt="" width="250px"></td>
          <td>4</td>
          <td>Thằn Lằn Thực</td>
          <td>Lacertidae</td>
          <td>than-lan-thuc</td>
          <td>3-1-2023 14:51:02</td>
          <td>
              <a href="edit-menu.html" class="btn btn-warning">
                <div class="nav-link-icon"><i class="fas fa-edit"></i></div>  Sửa</a>
              <a href="" class="btn btn-danger">
                <div class="nav-link-icon"><i class="fas fa-trash"></i></div>  Xóa</a>   
              </td>
        </tr>
        <tr>
          <td><img src="https://bachkhoa-aptech.edu.vn/upload/image/banner-web(1).jpg" alt="" width="250px"></td>
          <td>5</td>
          <td>Trăn</td>
          <td>Boidae</td>
          <td>tran</td>
          <td>3-1-2023 14:51:02</td>
          <td>
              <a href="edit-menu.html" class="btn btn-warning">
                <div class="nav-link-icon"><i class="fas fa-edit"></i></div>  Sửa</a>
              <a href="" class="btn btn-danger">
                <div class="nav-link-icon"><i class="fas fa-trash"></i></div>  Xóa</a>   
              </td>
        </tr>
        <tr>
          <td><img src="https://bachkhoa-aptech.edu.vn/upload/image/banner-web(1).jpg" alt="" width="250px"></td>
          <td>6</td>
          <td>Rắn roi</td>
          <td>Ahaetulla</td>
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
