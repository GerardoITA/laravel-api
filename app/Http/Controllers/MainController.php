<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\Tag;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        $movies = Movie::all();
        $genres = Genre::all();
        $tags = Tag::all();

        return view('pages.home', compact('movies', 'genres', 'tags'));
    }
    public function movie($id)
    {
        $movie = Movie::find($id);

        return view('pages.movie', compact('movie'));
    }
    public function edit(Movie $movie)
    {   
        $genres = Genre::all();
        $tags = Tag::all();

        return view('pages.edit', compact('movie', 'genres', 'tags'));
    }
    public function update(Request $request, Movie $movie){
        $data = $request->validate([
            'name' => 'required|string|max:64',
            'year' => 'nullable|integer',
            'cashout' => 'required',
            'genre_id' => 'required|integer',
            'tags' => 'required|array'
        ]);

        $movie -> update($data);
        $genre = Genre::find($data['genre_id']);

        $movie->genre()->associate($genre);
        $movie->save();

        $tags = Tag::find($data['tags']);
        $movie->tags()->sync($tags);

        return redirect()->route('home');
    }
    public function movies()
    {
        $movies = Movie::all();

        return view('pages.movies', compact('movies'));
    }
    public function create()
    {
        $tags = Tag::all();
        $genres = Genre::all();

        return view('pages.create', compact('genres', 'tags'));
    }
    public function store(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|string|max:64',
            'year' => 'nullable|integer',
            'cashout' => 'required',
            'genre_id' => 'required|integer',
            'tags' => 'required|array'
        ]);

        $movie = Movie::make($data);
        $genre = Genre::find($data['genre_id']);

        $movie->genre()->associate($genre);
        $movie->save();

        $tags = Tag::find($data['tags']);
        $movie->tags()->attach($tags);

        return redirect()->route('home');
    }
}
