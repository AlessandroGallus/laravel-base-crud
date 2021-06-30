@extends('layout.main')

@section('content')
@if (session('deleted'))
  <div class="alert alert-success" role="alert">
      <strong>{{ session('deleted') }}</strong>
      Sei una persona orribile  
  </div>
@endif
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
      <a href="{{route('comics.edit', $comic)}}"><div class="show">Edit</div></a>
      <form action="{{ route('comics.destroy', $comic) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">DELETE</button>
     </form>
    </div>
@endforeach
</div>
@endsection