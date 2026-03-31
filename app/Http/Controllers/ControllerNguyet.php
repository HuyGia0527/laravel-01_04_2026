<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
class ControllerNguyet extends Controller{
    public function minhNguyet()
    {
        return 'Nguyễn Thị Minh Nguyệt';
    }

    function movieCanada() {
    $movies = DB::select("select m.movie_name, m.release_date, m.runtime
    from movie as m
    where m.country_name = ?", ['Canada']);
    return view('movie_canada', compact('movies'));
}
}

