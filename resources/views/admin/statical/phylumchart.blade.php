@extends('admin.master')
@section('main-content')
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Biểu Đồ Ngành Động Vật và Thực Vật</title>
</head>
<div style="flex-grow:1" id="layoutSidenav_content">
    <main>
      @include('admin.layouts.header')
<body>
    <div style="display: flex">
    <div style="width:500px;height:500px;margin-left:10%;text-align:center">
        <canvas id="animalChart" width="100" height="100"></canvas><small>Động vật</small></div>
        <div style="width:500px;height:500px;text-align:center">
    <canvas id="plantChart" width="100" height="100"></canvas><small>Thực vật</small>
        </div>
    </div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var animalData = @json($animalData);
        var plantData = @json($plantData);

        var animalChartCanvas = document.getElementById('animalChart').getContext('2d');
        var plantChartCanvas = document.getElementById('plantChart').getContext('2d');

        var animalChart = new Chart(animalChartCanvas, {
            type: 'pie',
            data: {
                labels: Object.keys(animalData),
                datasets: [{
                    data: Object.values(animalData),
                    backgroundColor: ['#FF6384', '#36A2EB'],
                }]
            },
        });

        var plantChart = new Chart(plantChartCanvas, {
            type: 'pie',
            data: {
                labels: Object.keys(plantData),
                datasets: [{
                    data: Object.values(plantData),
                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#33FF57', '#57FFCE', '#9A36EB'],
                }]
            },
        });
    });
</script>
</body>
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
