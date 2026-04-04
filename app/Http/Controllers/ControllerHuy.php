<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class ControllerHuy extends Controller{
    public function giaHuy()
    {
        return 'Phạm Bùi Gia Huy';
    }

    public function theLoaiPhim(){
        $theloaiphim = DB::table('genre') -> select('genre_name', 'genre_name_vn') -> get();
        return view('danhsachtheloaiphim', compact('theloaiphim'));
    }
}