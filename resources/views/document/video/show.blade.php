@extends('admin.master')
@section('main-content')
<style>
    
.video-details {
    max-width: 800px;
    margin: auto;
    padding: 20px;
}

.video-container {
    width: 100%;
    position: relative;
    padding-bottom: 56.25%; /* 16:9 aspect ratio */
    overflow: hidden;
}

video {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
}

a {
    display: block;
    margin-top: 10px;
}
</style>
<div style="flex-grow:1" id="layoutSidenav_content">
        <main>
          @include('admin.layouts.header')
          <br>
  <!-- /.box-header -->
  <div class="video-details">
    <div style="display: flex"><h2 >Tên video:  </h2><h2>{{ $video->title }}</h2></div>
    <br>
    <div style="display:flex"><p >Mô tả:  </p> <p>{{ $video->description }}</p></div>
    <div class="video-container">
        <video controls>
            <source src="{{ asset('storage/' . $video->video_path) }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <a class="btn btn-primary" href="{{ route('videos.download', $video) }}" download>Download</a>
    <br>
    <a class="btn btn-dark" href="{{ route('videos.index') }}">Back to List</a>
</div>
                
                    
@endsection
