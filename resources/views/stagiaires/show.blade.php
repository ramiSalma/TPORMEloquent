<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('welcome')
    @section('content')
    <h1 class="m-5 h2">stagiaire number {{$stagiaire->id}}</h1>
    <div class="card bg-dark border border-3 text-center ms-5 p-2 border-warning col-4">
        <i class="fa-solid fa-user fs-1 text-warning my-3"></i>
      <div class="card-body">
        <h3 class="card-title h3 text-warning">first name :{{$stagiaire->nom}}</h3>
        <h3 class="card-title h3 text-warning">last name : {{$stagiaire->prenom}}</h3>
        <h3 class="card-title h3 text-warning">age : {{$stagiaire->age}}</h3>
        <a href="{{url('/stagiaires')}}" class="btn btn-warning my-3">back</a>
        
      </div>
    </div>
    @endsection
</body>
</html>