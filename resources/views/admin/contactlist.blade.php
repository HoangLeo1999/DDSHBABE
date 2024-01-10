@extends('admin.master')
@section('main-content')
<div id="layoutSidenav_content">
        <main>
          @include('admin.layouts.header')
          <br>
  <!-- /.box-header -->
  <div class="box-body table-responsive no-padding">
    <table class="table table-hover">
      <tbody>
    <tr>
        <th>STT</th>
        <th>Họ tên </th>
        <th>Email</th>
        <th>Tiêu đề</th>
        <th>Nội dung</th>
        <th>Thời gian</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Nguyễn Văn A</td>
        <td>vana123@gmail.com</td>
        <td> </td>
        <td>Yêu cầu bổ sung tài liệu</td>
        <td>3-1-2023 14:51:02</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Nguyễn Văn B</td>
        <td>vanb123@gmail.com</td>
        <td> </td>
        <td>Yêu cầu bổ sung tài liệu</td>
        <td>3-1-2023 14:51:02</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Nguyễn Văn C</td>
        <td>vanc123@gmail.com</td>
        <td> </td>
        <td>Yêu cầu bổ sung tài liệu</td>
        <td>3-1-2023 14:51:02</td>
      </tr>
      <tr>
        <td>4</td>
        <td>Nguyễn Văn D</td>
        <td>vand123@gmail.com</td>
        <td> </td>
        <td>Yêu cầu bổ sung tài liệu</td>
        <td>3-1-2023 14:51:02</td>
      </tr>
      <tr>
        <td>5</td>
        <td>Nguyễn Văn E</td>
        <td>vane123@gmail.com</td>
        <td> </td>
        <td>Yêu cầu bổ sung tài liệu</td>
        <td>3-1-2023 14:51:02</td>
      </tr>
      <tr>
        <td>6</td>
        <td>Nguyễn Văn F</td>
        <td>vanf123@gmail.com</td>
        <td> </td>
        <td>Yêu cầu bổ sung tài liệu</td>
        <td>3-1-2023 14:51:02</td>
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
