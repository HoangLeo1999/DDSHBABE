@extends('mtuser')
@section('main-content')
<div style="flex-grow: 1;" id="layoutSidenav_content">
    <main>
    <div class="page-container"> 
        <br>
    <br>
        <div class="section1"style="background-image: url('{{ asset('them/assets/img/bg.jpg') }}');text-align:center;  align-items: center;">
        <h1 style="color: white">CSDL ĐA DẠNG SINH HỌC VQG BA BỂ</h1>
        <p>Cung cấp thông tin, dữ liệu chính xác, đầy đủ về đa dạng sinh học khu vực VQG Ba Bể</p>
        <!-- Add more content about your company -->
    </div>
    <div class="section2">
        <div class="sub-box">
            <a href="#"> <i class="fas fa-search"></i> Tra cứu</a>
            <br>
            <small>Tra cứu các loài sinh vật theo ngành, lớp, bộ...</small>
        </div>
        <div class="sub-box">
            <a href="#"> <i class="fas fa-chart-line"></i> Thống kê</a>
            <br>
            <small>Thống kê các loài sinh vật theo ngành, lớp, bộ...</small>
        </div>
        <div class="sub-box">
            <a href="#"> <i class="fas fa-map"></i> Bản đồ</a>
            <br>
            <small>Cung cấp vị trí về môi trường sống, nơi phân bố...</small>
        </div>
    </div>
    <div class="section3">
        <h2 style="text-align: center">About us</h2>
        <small style="text-align: center;">Cơ sở dữ liệu đa dạng sinh học VQG Ba Bể là một hệ thống tập trung thông tin, dữ liệu đầy đủ, chính xác về các loài động thực vật, môi trường sống và nguồn gen trên địa bàn VQG Ba Bể . Hệ thống cung cấp thông tin quan trọng cho các cơ quan quản lý, nhà khoa học và cộng đồng người dân nhằm phát huy giá trị sinh học và nâng cao nhận thức của người dân trong công tác bảo tồn đa dạng sinh học trên địa bàn.</small>
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
@endsection
