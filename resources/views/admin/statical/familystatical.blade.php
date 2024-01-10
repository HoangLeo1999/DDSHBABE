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
  <a href="{{route('admin.exportfamily')}}" class="btn btn-success">Export to Excel</a>
  <div class="box-body table-responsive no-padding">
    <small>Thực vật</small>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>STT</th>
                <th>Họ</th>
                <th>Số lượng loài</th>
            </tr>
        </thead>
        <tbody>
            @foreach($plants as $plant)
                <tr>
                    <td>{{ $plant['STT'] }}</td>
                    <td>{{ $plant['family'] }}</td>
                    <td>{{ $plant['species_count'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <small>Động vật</small>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>STT</th>
                <th>Họ</th>
                <th>Số lượng loài</th>
            </tr>
        </thead>
        <tbody>
            @foreach($animals as $animal)
                <tr>
                    <td>{{ $animal['STT'] }}</td>
                    <td>{{ $animal['family'] }}</td>
                    <td>{{ $animal['species_count'] }}</td>
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
