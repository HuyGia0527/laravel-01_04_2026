<?php   
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BookController extends Controller{
    public function index(Request $request){
        $id = request('book_id', 0);
        if($id == 0){
            $books = DB::select('Select * From sach Limit 8');
            return view('books.home', compact('books'));
        }
        $books = DB::select('Select * 
                            From sach 
                            Where sach.the_loai = ? Limit 8', [$id]);
        return view('books.home', compact('books'));
    }

    public function show(int $id){
        // Viết code truy vấn Database
        $book = DB::select('select * from sach where sach.id=?',[$id]);
        return view('books.show', compact('book'));
    }
}
