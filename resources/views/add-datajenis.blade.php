@extends('layouts.admin')
<title>New Log Aktivitas</title>
@section('content')
<div class="main-wrapper">
    @include('partials.sidebar-2')
    <div class="page-wrapper">
        @include('partials.navbar-2')
        <!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
           <link rel="stylesheet" href="modal.css">
</head>
<body>
<div>
<a href="#wrab"><button class="btn"> Open modal</button></a>
</div>
<div href="" class="wrab" id="wrab">
        <div class="bg-color">
        <div class="modal" id="modal">
        <p><a href="">X</a></p>
        <h1 class="label">Login</h1>
<form action="" method="get" accept-charset="utf-8">
        <label for="">Email:</label>
        <input type="text" placeholder="Masukan Email" id="name">
        <label for="">Password:</label>
        <input type="password" placeholder="Masukan Password" id="sandi">
        <button type="submit" class="btn2">Login</button>
</form>
</div>
        </div>
</div>
</body>
</html>
        @include('partials.footer')
    </div>
</div>
@endsection