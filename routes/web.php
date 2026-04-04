<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AccountController;

<<<<<<< HEAD

//Truy cập vào trang chủ
Route::get('/', function(){
    return redirect('/home');
});
Route::get('/home', [BookController::class, 'index'])->name('index');


//Truy cập vào thông tin chi tiết sách
Route::get('/book/{id}', [BookController::class, 'show'])->name('book.show');


// Truy cập vào profile


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

// Truy cập để vào giỏ hàng
Route::get('/order','App\Http\Controllers\BookController@order')->name('order');

// Tạo đường dẫn cho trang xử lý thêm vào giỏ hàng
Route::post('/cart/add','App\Http\Controllers\BookController@cartadd')->name('cartadd');

//
Route::post('/cart/delete','App\Http\Controllers\BookController@cartdelete')->name('cartdelete');
Route::post('/order/create','App\Http\Controllers\BookController@ordercreate') 
			->middleware('auth')->name('ordercreate');


require __DIR__.'/auth.php';


=======
>>>>>>> parent of e0d709e ([MERGE COMMIT] Làm trang giỏ hàng và trang đặt hàng)
//Truy cập vào trang chủ
Route::get('/', function () {
    return redirect('/home');
});
Route::get('/home', [BookController::class, 'index'])->name('index');

//Truy cập vào thông tin chi tiết sách
Route::get('/book/{id}', [BookController::class, 'show'])->name('book.show')->where('id', '[0-9]+');

// Truy cập vào profile 
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
// Truy cập vào màn hình sau khi login/sign in thành công
Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware('auth')
    ->name('dashboard');

// Truy cập vào giao diện quản lý

// edit view
Route::get('/account/edit', [AccountController::class, 'edit'])
    ->middleware('auth')
    ->name('account.edit');

// Truy cập để lưu thông tin tài khoản
Route::post('/account/update', [AccountController::class, 'update'])
    ->middleware('auth')
    ->name('account.update');

Route::get('/book/index', [BookController::class, 'handleBook'])
    ->middleware('auth')
    ->name('book.index');

Route::get('/book/edit', [BookController::class, 'edit'])
->middleware('auth')
->name('book.edit');

Route::post('/book/update', [BookController::class, 'update'])
->middleware('auth')
->name('book.update');

Route::get('/book/create', [BookController::class, 'create'])
->middleware('auth')
->name('book.create');

Route::post('/book/insert', [BookController::class, 'insert'])
->middleware('auth')
->name('book.insert');

Route::post('/book/delete', [BookController::class, 'delete'])
->middleware('auth')
->name('book.delete');

require __DIR__ . '/auth.php';
