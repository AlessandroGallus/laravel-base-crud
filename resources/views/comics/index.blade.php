@extends('layout.main')

@section('content')
<h1>IFFUMETTI</h1>
<div class="container">
@foreach ($comics as $comic)
    <div class="card">
      <img src="{{$comic['thumb']}}" alt="thumb">
      <div class="containerh1">
        <h1>{{$comic['series']}}</h1>
      </div>
      <h2>{{$comic['price']}}</h2>
      <h3>{{$comic['sale_date']}}</h3>
      <h3>{{$comic['type']}}</h3>
      <a href="{{route('comics.show', $comic)}}"><div class="show">Show</div></a>
    </div>
@endforeach
</div>
@endsection