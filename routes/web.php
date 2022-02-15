<?php
use Illuminate\Support\Facades\Route;  
use App\Http\Controllers\user\HomeController;

Route::group(['prefix' => '/'], function () {
    Route::get('',[HomeController::class, 'index'])->name('index');
    Route::get('product',[HomeController::class, 'product'])->name('home.product');
    Route::get('cart',[HomeController::class, 'cart'])->name('home.cart');
    Route::post('home.LoginUser', [HomeController::class, 'loginUser'])->name('home.LoginUser');
    Route::get('logout', [HomeController::class, 'logout'])->name('home.logoutUser');
    Route::post('home.SingUpUser', [HomeController::class, 'SingUpUser'])->name('home.SingUpUser');
});