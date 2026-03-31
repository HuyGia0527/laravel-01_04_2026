<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Top10Controller extends Controller
{
    public function top10bophim()
    {
        $movies = DB::table('movie')
            ->select('movie_name', 'release_date', 'vote_average')
            ->orderBy('vote_average', 'desc')
            ->limit(10)
            ->get();
        return view('top10bophim', compact('movies'));
    }
}