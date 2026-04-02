<?php  
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $book = DB::select('select * from sach where sach.id=?',[$id]);
        return view('books.show', compact('book'));
    }

    // 🛒 THÊM VÀO GIỎ HÀNG
public function cartadd(Request $request)
{
    $request->validate([
        "id"=>["required","numeric"],
        "num"=>["required","numeric"]
    ]);

    $id = $request->id;
    $num = $request->num;

    $cart = session()->get("cart", []);

    if(isset($cart[$id]))
        $cart[$id] += $num;
    else
        $cart[$id] = $num;

    session()->put("cart",$cart);

    // thay count($cart) bằng tổng số lượng sách
    return response()->json(array_sum($cart));
}

    // 🛒 HIỂN THỊ GIỎ HÀNG
    public function order()
    {
        $cart = session()->get("cart", []);
        $data = [];
        $quantity = [];

        if(count($cart) > 0)
        {
            foreach($cart as $id => $value)
            {
                $quantity[$id] = $value;
            }

            // ✅ FIX: dùng whereIn để tránh lỗi id in ()
            $data = DB::table("sach")
                        ->whereIn("id", array_keys($cart))
                        ->get();
        }

        return view("books.order", compact("quantity", "data"));
    }

    // ❌ XÓA SẢN PHẨM KHỎI GIỎ
    public function cartdelete(Request $request)
    {
        $request->validate([
            "id" => ["required", "numeric"]
        ]);

        $cart = session()->get("cart", []);

        unset($cart[$request->id]);

        session()->put("cart", $cart);

        return redirect()->route('order');
    }

    // 🧾 TẠO ĐƠN HÀNG
    public function ordercreate(Request $request)
    {
        $request->validate([
            "hinh_thuc_thanh_toan" => ["required","numeric"]
        ]);

        $cart = session()->get("cart", []);
        $data = [];
        $quantity = [];

        if(count($cart) > 0)
        {
            $order = [
                "ngay_dat_hang" => DB::raw("now()"),
                "tinh_trang" => 1,
                "hinh_thuc_thanh_toan" => $request->hinh_thuc_thanh_toan,
                "user_id" => Auth::user()->id
            ];

            DB::transaction(function () use ($order, $cart) {

                $id_don_hang = DB::table("don_hang")->insertGetId($order);

                // lấy danh sách sách
                $books = DB::table("sach")
                            ->whereIn("id", array_keys($cart))
                            ->get();

                $detail = [];

                foreach($books as $row)
                {
                    $detail[] = [
                        "ma_don_hang" => $id_don_hang,
                        "sach_id" => $row->id,
                        "so_luong" => $cart[$row->id],
                        "don_gia" => $row->gia_ban
                    ];
                }

                DB::table("chi_tiet_don_hang")->insert($detail);

                session()->forget('cart');
            });
        }

        return redirect()->route('order');
    }
}
