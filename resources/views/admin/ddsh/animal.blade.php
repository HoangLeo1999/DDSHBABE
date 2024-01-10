@extends('admin.master')
@section('main-content')
<div id="layoutSidenav_content">
        <main>
          @include('admin.layouts.header')
          <a style="float: right" href="#" class="btn btn-success">Thêm ngành mới</a>
          <br>
  <!-- /.box-header -->
  <div class="box-body table-responsive no-padding">
    <table class="table table-hover">
      <tbody><tr>
        <th></th>
        <th>STT</th>
        <th>Tên ngành VN</th>
        <th>Tên khoa học</th>
        <th>Slug</th>
        <th>Cập nhật</th>
      </tr>
      <tr>
        <td><img src="https://bachkhoa-aptech.edu.vn/upload/image/banner-web(1).jpg" alt="" width="250px"></td>
        <td>1</td>
        <td>Có xương sống</td>
        <td> </td>
        <td>co-xuong-song</td>
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
          <td>Thân mềm</td>
          <td> </td>
          <td>than-mem</td>
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
          <td>Quyết lá thông</td>
          <td>Psilotophyta</td>
          <td>quyet-la-thong</td>
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
          <td>Thông đất</td>
          <td>Lycopodiophyta</td>
          <td>thong-dat</td>
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
          <td>Ngọc lan</td>
          <td>Magnoliophyta</td>
          <td>ngoc-lan</td>
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
          <td>Mộc tặc</td>
          <td>Equisetophyta</td>
          <td>moc-tac</td>
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
