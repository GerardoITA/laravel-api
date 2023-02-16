@extends('layouts.main-layout')

@section('content')
    <h1>Movies</h1>
    @foreach ($movies as $movie )
        <h6>
            <a href="/movies/{{ $movie -> id}}">{{ $movie -> name}} - {{ $movie -> year}}</a>          
        </h6>
    @endforeach
@endsection