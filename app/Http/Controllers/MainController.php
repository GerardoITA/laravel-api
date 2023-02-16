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
}
