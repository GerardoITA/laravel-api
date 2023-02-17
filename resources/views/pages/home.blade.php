@extends('layouts.main-layout')

@section('content')
    <h1>Movies</h1>
    <a href="/create">Create a new movie</a><br>
    <a href="/movies">See all movies</a><br>
    @foreach ($genres as $genre)
        <h2>{{ $genre -> name}}</h2>
        @foreach ($movies as $movie )
            @if ($movie -> genre_id === $genre -> id )
                <h6>
                    <a href="/movies/{{ $movie -> id}}">{{ $movie -> name}} - {{ $movie -> year}}</a> - <a href="{{ route('edit', $movie) }}">Edit</a> - <a href="{{ route('delete', $movie) }}">Delete</a>
                </h6>
            @endif           
        @endforeach
        <hr>
    @endforeach
@endsection