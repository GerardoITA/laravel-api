@extends('layouts.main-layout')

@section('content')
    <h1>{{ $movie -> name}}</h1>
    This film was made in {{ $movie -> year}} <br>
    Its cashout was {{ $movie -> cashout}}
@endsection