@extends('layouts.main-layout')

@section('content')
    <h1>Movies</h1>
    @foreach ($movies as $movie )
        <h6>{{ $movie -> name}} - {{ $movie -> year}}</h6>          
    @endforeach
@endsection