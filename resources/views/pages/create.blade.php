@extends('layouts.main-layout')

@section('content')
    <h1>Create</h1>
    <form action="" method="POST">
     @csrf
        <label for="name">Name</label>
        <input type="text" name="name">
        <br>
        <label for="year">Year</label>
        <input type="number" name="year">
        <br>
        <label for="cashout">Cashout</label>
        <input type="number" name="cashout">
        <br>
        <label for="genre">Genre</label>
        <select name="genre_id">
            @foreach ($genres as $genre)
                <option value="{{ $genre -> id }}">{{ $genre -> name }}</option>    
            @endforeach
        </select>
        <br>
        <h3>Tags</h3>
        @foreach ($tags as $tag)
            <input type="checkbox" name="tags[]" value="{{ $tag -> id }}">
            <label for="tags">{{ $tag -> name }}</label>
            <br>            
        @endforeach
        <input type="submit" value="CREATE MOVIE">   
    </form>
@endsection