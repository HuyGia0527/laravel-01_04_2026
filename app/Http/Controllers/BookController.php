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

    public function show($id){
        // Viết code truy vấn Database
        $book = DB::select('select * from sach where sach.id=?',[$id]);
        return view('books.show', compact('book'));
    }

    public function handleBook(){
        $books = DB::select('Select * From sach');
        return view('books.index', compact('books'));
    }

    public function edit(){
        $action = "edit";
        $type = DB::table("dm_the_loai")->get();
        $book = DB::table("sach")->where("id",request('id'))->first();
        return view("books.edit-insert",compact("type","action","book"));
    }

    public function update(Request $request){
        $request->validate([
            'tieu_de' => ['required', 'string', 'max:200'],
            'nha_cung_cap' => ['required', 'string', 'max:50'],
            'nha_xuat_ban' => ['required', 'string', 'max:50'],
            'tac_gia' => ['required', 'string', 'max:50'],
            'hinh_thuc_bia' => ['required', 'string', 'max:50'],
            'gia_ban' => ['required', 'numeric'],
            'the_loai' => ['required', 'max:3'],
            'file_anh_bia' => ['nullable','image']
            ]);
        $data = $request->except("_token");
            if(request('action')=="edit")
                $data = $request->except("_token", "id");
            if($request->hasFile("file_anh_bia"))
        {
            $fileName = $request->input("tieu_de") ."_".rand(1000000,9999999).'.' . $request->file('file_anh_bia')->extension();
            $request->file('file_anh_bia')->storeAs('public/book_image', $fileName);
            $data['file_anh_bia'] = $fileName;
        }
        $message = "";
        if(request('action') =="add")
        {
            DB::table("sach")->insert($data);
            $message = "Thêm thành công";
        }
        else if(request('action')=="edit")
        {
            $id = $request->id;
            unset($data['action']);
            DB::table("sach")->where("id",$id)->update($data);
            $message = "Cập nhật thành công";
        }
        return redirect()->route('book.index')->with('status', $message);
    }

    public function create(){
        $type = DB::table("dm_the_loai")->get();
        $action = "add";
        return view("books.edit-insert",compact("type","action"));
    }

    public function insert(Request $request){
         $request->validate([
            'tieu_de' => ['required', 'string', 'max:200'],
            'nha_cung_cap' => ['required', 'string', 'max:50'],
            'nha_xuat_ban' => ['required', 'string', 'max:50'],
            'tac_gia' => ['required', 'string', 'max:50'],
            'hinh_thuc_bia' => ['required', 'string', 'max:50'],
            'gia_ban' => ['required', 'numeric'],
            'the_loai' => ['required', 'max:3'],
            'file_anh_bia' => ['nullable','image']
            ]);
            $data = $request->except("_token");
            if($request->hasFile("file_anh_bia"))
        {
            $fileName = $request->input("tieu_de") ."_".rand(1000000,9999999).'.' . $request->file('file_anh_bia')->extension();
            $request->file('file_anh_bia')->storeAs('public/book_image', $fileName);
            $data['file_anh_bia'] = $fileName;
        }
        $message = "";
        if(request('action')=="add")
        {
            unset($data['action']);
            DB::table("sach")->insert($data);
            $message = "Thêm thành công";
        }
        return redirect()->route('book.index')->with('status', $message);
    }
    public function delete(Request $request){
        $id = $request->id;
        DB::table("sach")->where("id",$id)->delete();
        return redirect()->route('book.index')->with('status', "Xóa thành công");
    }
}
