<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViduController;

Route::get('/baongoc', function () {
    return 'Trần Bảo Ngọc';
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/thuthao', [App\Http\Controllers\ControllerThao::class, 'thuThao']);
Route::get('/doanhthu', [App\Http\Controllers\ControllerThao::class, 'doanhThu']);

Route::get('/minhnguyet', [App\Http\Controllers\ControllerNguyet::class, 'minhNguyet']);
Route::get('/theloai', [App\Http\Controllers\ControllerKhoa::class, 'theLoai']);

Route::get('/theLoai', [App\Http\Controllers\ControllerHuy::class, 'theLoaiPhim']);

Route::get('/movies-long', [App\Http\Controllers\MovieController::class, 'getLongMovies']);
Route::get('/top-10-phim', [App\Http\Controllers\Top10Controller::class, 'top10bophim']);
Route::get('/movieCanada', [App\Http\Controllers\ControllerNguyet::class, 'movieCanada']);

Route::get('/home', [ViduController::class, 'moveToHomePage']);
Route::get('/bookdetail', [ViduController::class, 'moveToBookDetail']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';