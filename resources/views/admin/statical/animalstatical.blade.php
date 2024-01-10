@extends('admin.master')
@section('main-content')
<div id="layoutSidenav_content">
        <main>
          @include('admin.layouts.header')
          <style>
            /* Thêm đoạn CSS để chỉnh màu sắc của phần <thead> */
            table {
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 20px;
            }
    
            th, td {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
                
            }
            thead{
                background-color: #979393
            }
    
            th {
                background-color: #333; /* Màu sắc tối hơn cho phần <thead> */
                color: white;
            }
        </style>
          <br>
  <!-- /.box-header -->
  <a href="{{route('admin.exportanimal')}}" class="btn btn-success">Export to Excel</a>
  <div class="box-body table-responsive no-padding">
    <small>Động vật</small>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên việt nam</th>
                <th>Tên khoa học</th>
                <th>Ngành</th>
                <th>Lớp</th>
                <th>Bộ</th>
                <th>Họ</th>
            </tr>
        </thead>
        <tbody>
            @foreach($animals as $animal)
                <tr>
                    <td>{{ $animal['STT'] }}</td>
                    <td>{{ $animal['animal-vn'] }}</td>
                    <td>{{ $animal['animal-latin'] }}</td>
                    <td>{{ $animal['phylum'] }}</td>
                    <td>{{ $animal['class'] }}</td>
                    <td>{{ $animal['order'] }}</td>
                    <td>{{ $animal['family'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
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
