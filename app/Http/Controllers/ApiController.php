<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Tag;
use App\Models\Genre;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function test() 
    {
        $movies = Movie::with('tags')
            ->orderBy('id')
            ->get();
        $tags = Tag::all();
        $genres = Genre::all();

        return response() -> json([
            'success' => true,
            'response' => [
                'movies' => $movies,
                'tags' => $tags,
                'genres' => $genres,

            ]
        ]);
    }

    public function createMovie(Request $request) {
        $data = $request -> validate([
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

        return response()->json([
            'success' => true,
            'response' => $movie,
            'data' => $request->all()
        ]);
    }
}

//  public function store(Request $request)
//     {
// 
//         $data = $request->validate([
//             'name' => 'required|string|max:64',
//             'year' => 'nullable|integer',
//             'cashout' => 'required',
//             'genre_id' => 'required|integer',
//             'tags' => 'required|array'
//         ]);
// 
//         $movie = Movie::make($data);
//         $genre = Genre::find($data['genre_id']);
// 
//         $movie->genre()->associate($genre);
//         $movie->save();
// 
//         $tags = Tag::find($data['tags']);
//         $movie->tags()->attach($tags);
// 
//         return redirect()->route('home');
//     }
