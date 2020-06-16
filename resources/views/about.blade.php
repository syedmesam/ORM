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
        <p>Employee at ManyAutos</p>
        <a href="/home">Back to Home</a>
        
    @extends('layouts.content.master')
  
    @endsection
  </div>
</body>
</html>