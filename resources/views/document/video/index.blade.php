@extends('admin.master')
@section('main-content')
<div style="flex-grow:1" id="layoutSidenav_content">
        <main>
          @include('admin.layouts.header')
          <br>
          <table class="table table-hover">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tiêu đề</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($videos as $video)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>
                            <a href="{{ route('videos.show', $video) }}">{{ $video->title }}</a>
                        </td>
                        <td>
                            <a href="{{ route('videos.download', $video) }}" download>Download</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a class="btn btn-success" href="{{ route('videos.create') }}">Upload Video</a>
  
        </main>
       
    </div>
                
                    
@endsection
