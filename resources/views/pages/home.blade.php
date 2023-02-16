@extends('layouts.main-layout')

@section('content')
    <h1>Movies</h1>
    @foreach ($genres as $genre)
        <h2>{{ $genre -> name}}</h2>
        @foreach ($movies as $movie )
            @if ($movie -> genre_id === $genre -> id )
                <h6>{{ $movie -> name}} - {{ $movie -> year}}</h6>
            @endif           
        @endforeach
        <hr>
    @endforeach
@endsection