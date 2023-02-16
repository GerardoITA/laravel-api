<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;
use App\Models\Tag;
use App\Models\Genre;


class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie:: factory() -> count(50) -> make() -> each(function($p) {
            $genre =  Genre :: inRandomOrder() -> first();
            $p -> genre() -> associate($genre);
            $p -> save();
            $tags = Tag :: inRandomOrder() -> limit(3) -> get();
            $p -> tags() -> attach($tags);
        });
    }
}
