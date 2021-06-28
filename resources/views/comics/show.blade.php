@extends('layout.main')

@section('content')
  <h1>{{$comic['series']}}</h1>
  <img src="{{$comic['thumb']}}" alt="img">
  <h2>{{$comic['price']}}</h2>
  <h2>{{$comic['sale_date']}}</h2>
  <p><h2>{{$comic['description']}}</h2></p>

  <a href="{{route('comics.index')}}">TORNA INDIETRO</a>
@endsection