<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function getLongMovies()
    {
        $movies = DB::table('movie')
            ->where('runtime', '>', 120)
            ->limit(10)
            ->get();

        return view('long_movies', compact('movies'));
    }
}