@extends('mtuser')
@section('main-content')
<div style="flex-grow: 1;" id="layoutSidenav_content">
        <main>
            <br> <br>
            <br>
          <h1 style="text-align:center">Chào mừng bạn đến với trang trợ giúp</h1>
          <br>
  <!-- /.box-header -->



  <form style="text-align: center" action="{{ route('help') }}" method="GET">
  <span style="float:unset" >Chúng tôi có thể giúp gì cho bạn?</span>
  <br>
  <br><br>
      <input style="width:300px;height:50px;border-radius:10px" type="text" name="query" placeholder="Mô tả sự cố bạn gặp phải">
      <br> <br>
      <button type="submit" class="btn btn-success"><i class="fas fa-search"></i>Tìm Kiếm</button>
  </form>

  @if(isset($query))
      <h2>Kết quả tìm kiếm cho "{{ $query }}"</h2>
      <!-- Hiển thị kết quả tìm kiếm ở đây -->
  @endif
  <br><br><br>
<h2>Chủ đề phổ biến</h2>
<div class="gray-box-container">
    <div style="align-items: center;" class="gray-box"onclick="redirectToPage('/admin')">
        <h5 style="margin-top:40px">Không tải được trang</h5>
    </div>
    <div class="gray-box"onclick="redirectToPage('/admin')">
       <h5 style="margin-top:40px">Thông tin chưa chính xác</h5> 
    </div>
    <div class="gray-box"onclick="redirectToPage('/admin')">
        
        <h5 style="margin-top:40px">Chức năng bị lỗi</h5> 
    </div>
    <div class="gray-box"onclick="redirectToPage('/admin')">
      
        <h5 style="margin-top:40px">  Tài khoản và mật khẩu</h5> 
    </div>
    <div class="gray-box"onclick="redirectToPage('/admin')">
      
        <h5 style="margin-top:40px">  Không tải được trang</h5> 
    </div>
    <div class="gray-box"onclick="redirectToPage('/admin')">
       
        <h5 style="margin-top:40px"> Không tải được hình ảnh</h5> 
    </div>
</div>
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
    <script>
        function redirectToPage(url) {
            window.location.href = url;
        }
    </script>
                
                    
@endsection
