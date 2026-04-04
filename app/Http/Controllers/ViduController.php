<?php   
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ViduController{
    public function moveToHomePage(Request $request){
        $id = request('book_id');
        if($id == 0){
            $books = DB::select('Select * From sach Limit 8');
            return view('book_example.book-list', compact('books'));
        }
        $books = DB::select('Select * 
                            From sach 
                            Where sach.the_loai = ? Limit 8', [$id]);
        return view('book_example.book-list', compact('books'));
    }

    public function moveToBookDetail(Request $request){
        $id = $request->input('book_id');
        // Viết code truy vấn Database
        $book = DB::select('select * from sach where sach.id=?',[$id]);
        return view('book_example.book-detail', compact('book'));
    }
}
