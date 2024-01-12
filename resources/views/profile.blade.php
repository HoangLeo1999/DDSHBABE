@extends('admin.master')
@section('main-content')
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.profile-container {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: #f4f4f4;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.profile-header {
    text-align: center;
}

.avatar {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin-bottom: 10px;
}

.profile-content {
    margin-top: 20px;
}

h1, h2, p {
    color: #333;
}
</style>
<div style="flex-grow:1" id="layoutSidenav_content">
        <main>
          @include('admin.layouts.header')
          <br>
  <!-- /.box-header -->
  
  <div class="profile-container">
    <div class="profile-header">
        <img src="avatar.jpg" alt="Avatar" class="avatar">
        <h1>User Name</h1>
        <p>Email: user@example.com</p>
    </div>

    <div class="profile-content">
        <h2>About Me</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, justo sit amet malesuada gravida.</p>

        <h2>Contact Information</h2>
        <p>Address: 57,Trường Trinh, Phổ Yên City</p>
        <p>Phone: +84868125016</p>
    </div>
</div>
        </main>
      
    </div>
                
                    
@endsection
