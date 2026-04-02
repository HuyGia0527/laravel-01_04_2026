<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AccountController;


//Truy cập vào trang chủ
Route::get('/', function(){
    return redirect('/home');
});
Route::get('/home', [BookController::class, 'index'])->name('index');


//Truy cập vào thông tin chi tiết sách
Route::get('/book/{id}', [BookController::class, 'show'])->name('book.show');


// Truy cập vào profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Truy cập vào màn hình sau khi login/sign in thành công
Route::get('/dashboard', function(){return view('dashboard');})
->middleware('auth')
->name('dashboard');


// Truy cập vào giao diện quản lý


// edit view
Route::get('/account/edit',[AccountController::class, 'edit'])
->middleware('auth')
->name("account.edit");


// Truy cập để lưu thông tin tài khoản
Route::post('/account/update', [AccountController::class, 'update'])
->middleware('auth')
->name('account.update');

//Yêu cầu 4
Route::post('/bookview','App\Http\Controllers\BookController@bookview')->name("bookview");


require __DIR__.'/auth.php';
