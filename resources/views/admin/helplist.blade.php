@extends('admin.master')
@section('main-content')
<div id="layoutSidenav_content">
        <main>
          @include('admin.layouts.header')
          <br>
  <!-- /.box-header -->
  <div class="box-body table-responsive no-padding">
    <table class="table table-hover">
      <tbody><tr>
        <th>STT</th>
        <th>Người gửi</th>
        <th>Nội dung cần trợ giúp</th>
        <th>Thời gian</th>
      </tr>
      <tr>
        <td>1</td>
        <td>customer1@gmail.com/td>
        <td>Lỗi không hiển thị ảnh </td>
        <td>3-1-2023 14:51:02</td>
        <td>
        <a href="edit-menu.html" class="btn btn-primary">
          <div class="nav-link-icon"><i class="fas fa-reply"></i></div>  Phản hồi</a>
        <a href="" class="btn btn-danger">
          <div class="nav-link-icon"><i class="fas fa-trash"></i></div>  Xóa</a>   
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>customer2@gmail.com/td>
        <td>Không load được trang tra cứu </td>
        <td>3-1-2023 14:51:02</td>
        <td>
        <a href="edit-menu.html" class="btn btn-primary">
          <div class="nav-link-icon"><i class="fas fa-reply"></i></div>  Phản hồi</a>
        <a href="" class="btn btn-danger">
          <div class="nav-link-icon"><i class="fas fa-trash"></i></div>  Xóa</a>   
        </td>
      </tr>
      <tr>
        <td>3</td>
        <td>customer3@gmail.com/td>
        <td>Thiếu dữ liệu</td>
        <td>3-1-2023 14:51:02</td>
        <td>
        <a href="edit-menu.html" class="btn btn-primary">
          <div class="nav-link-icon"><i class="fas fa-reply"></i></div>  Phản hồi</a>
        <a href="" class="btn btn-danger">
          <div class="nav-link-icon"><i class="fas fa-trash"></i></div>  Xóa</a>   
        </td>
      </tr>
      <tr>
        <td>4</td>
        <td>customer4@gmail.com/td>
        <td>Lỗi không hiển thị ảnh </td>
        <td>3-1-2023 14:51:02</td>
        <td>
        <a href="edit-menu.html" class="btn btn-primary">
          <div class="nav-link-icon"><i class="fas fa-reply"></i></div>  Phản hồi</a>
        <a href="" class="btn btn-danger">
          <div class="nav-link-icon"><i class="fas fa-trash"></i></div>  Xóa</a>   
        </td>
      </tr>
      <tr>
        <td>5</td>
        <td>customer5@gmail.com/td>
        <td>Lỗi không hiển thị ảnh </td>
        <td>3-1-2023 14:51:02</td>
        <td>
        <a href="edit-menu.html" class="btn btn-primary">
          <div class="nav-link-icon"><i class="fas fa-reply"></i></div>  Phản hồi</a>
        <a href="" class="btn btn-danger">
          <div class="nav-link-icon"><i class="fas fa-trash"></i></div>  Xóa</a>   
        </td>
      </tr>
      <tr>
        <td>6</td>
        <td>customer6@gmail.com/td>
        <td>Lỗi không hiển thị ảnh </td>
        <td>3-1-2023 14:51:02</td>
        <td>
        <a href="edit-menu.html" class="btn btn-primary">
          <div class="nav-link-icon"><i class="fas fa-reply"></i></div>  Phản hồi</a>
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
