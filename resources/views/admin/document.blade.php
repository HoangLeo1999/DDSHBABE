@extends('admin.master')
@section('main-content')
<div id="layoutSidenav_content">
        <main>
          @include('admin.layouts.header')
          <br>
  <!-- /.box-header -->
  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#uploadModal">
    Upload Document
</button>
@include('admin.layouts.uploadDocModal')
  <div class="box-body table-responsive no-padding">
    <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên tài liệu</th>
                    <th scope="col">Cơ quan ban hành</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($documents as $k=>$document)
                    <tr>
                        <td>{{ $k+1}}</td>
                        <td>{{$document->name}}</td>
                        <td>{{$document->coquanbh}}</td>
                        <td>
                            <a href="{{ route('admin.downloaddoc', ['id' => $document->id]) }}" class="btn btn-primary">Download</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No documents available.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        
        <!-- Pagination -->
        {{ $documents->links() }}
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
