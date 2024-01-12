@extends('admin.master')
@section('main-content')
<style>
    .upload-form {
    max-width: 400px;
    margin: auto;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
}

label {
    display: block;
    margin-bottom: 8px;
}

input[type="text"],
textarea,
input[type="file"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 16px;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}
</style>
<div style="flex-grow:1" id="layoutSidenav_content">
        <main>
          @include('admin.layouts.header')
          <br>
  <!-- /.box-header -->
  <h2>Upload Video</h2>
  <form action="{{ route('videos.store') }}" method="post" enctype="multipart/form-data" class="upload-form">
    @csrf
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" required>
    <br>
    <label for="description">Description:</label>
    <textarea id="description" name="description"></textarea>
    <br>
    <label for="video">Video File:</label>
    <input type="file" id="video" name="video" accept="video/*" required>
    <br>
    <button type="submit">Upload</button>
</form>
    <br>
    <a class="btn  btn-dark" href="{{ route('videos.index') }}">Back to List</a>
        </main>
        
    </div>
                
                    
@endsection
