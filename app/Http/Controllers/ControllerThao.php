<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ControllerThao extends Controller
{
    public function thuThao(){
        return 'Nguyễn Thị Thu Thảo';
    }

    public function doanhThu(){
        $movies = DB::table('movie')
            ->orderBy('budget', 'desc')
            ->limit(10)
            ->get();

        return view('doanhthu', compact('movies'));
    }
}