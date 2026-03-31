<?php
namespace App\Http\Controllers;
 use Illuminate\Support\Facades\DB;

class ControllerKhoa extends Controller{
    public function dangKhoa()
    {
        return 'Hồ Huỳnh Đăng Khoa';
    }

    public function theLoai()
    {
     $movies = DB::select("select m.movie_name, m.release_date, m.overview, m.image_link
    from movie as m
    inner join movie_genre on m.id =movie_genre.id_movie 
    inner join genre on movie_genre .id_genre =genre.id
    where genre.genre_name = ?", ['Action']);
    return view('theloai', compact('movies'));
    }
}
