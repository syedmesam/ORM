<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Orm Practice</title>
</head>
<body>
  <div class="container">
    @section('content')
        <p>mesam</p>
        <a href="/about">About Us</a>
        <br>
  <strong>{{ $name }}</strong>
  <br>
  <span>{{ $age }}</span>
  <br>
  <span>{{ $gender }}</span>
  <br>
  @foreach ($data as $info)
  <ul>{{ $info->name }}</ul>    
  @endforeach
  
  <br>
  <span>STRING FROM URL :{{ $str }} </span>
  {{-- <p>{!! $js !!}</p> --}}
    @extends('layouts.content.master')
  
    @endsection
  </div>
</body>
</html>