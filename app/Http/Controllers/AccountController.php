<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class AccountController extends Controller
{
    // Hàm gọi ra giao diện cập nhật thông tin tài khoản
    public function edit()
    {
        $user = DB::table("users")->whereRaw("id=?", [Auth::user()->id])->first();
        return view("account.profile", compact("user"));
    }


    // Hàm truy cập nhật thông tin tài khoản
    public function update(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['nullable', 'string'],
            'photo' => ['nullable', 'image']
        ]);


        $id = $request->input('id');
        $data["name"] = $request->input('name');
        $data["email"] = $request->input('email');
        $data["phone"] = $request->input('phone');
        if ($request->hasFile('photo')) {
            $fileName = Auth::user()->id . '.' . $request->file('photo')->extension();
            $request->file('photo')->storeAs('public/profile', $fileName);
            $data['photo'] = $fileName;
        }
        DB::table("users")->where("id", $id)->update($data);
        return redirect()->route('account.edit')->with('status', 'Cập nhật thành công');
    }
}