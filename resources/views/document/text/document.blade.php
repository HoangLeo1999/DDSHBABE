@extends('admin.master')
@section('main-content')
<div style="flex-grow: 1;" id="layoutSidenav_content">
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
        
    </div>
                
                    
@endsection
