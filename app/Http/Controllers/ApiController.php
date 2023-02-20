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
        // $movies = Movie::all();
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
}
