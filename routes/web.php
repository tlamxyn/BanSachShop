<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'Categories'], function () {
    Route::get('/',  'App\Http\Controllers\admin\CategoryController@index')->name('admin.categories.index');
  
    Route::get('/create', [admin\CategoryController::class, 'create'])->name('admin.categories.create');
  
    Route::post('/store', [admin\CategoryController::class, 'store'])->name('admin.categories.store');
  
    Route::get('/{id}/edit', [admin\CategoryController::class, 'edit'])->name('admin.categories.edit');
  
    Route::post('/update', [admin\CategoryController::class, 'update'])->name('admin.categories.update');
    Route::get('/{id}/delete', [admin\CategoryController::class, 'delete'])->name('admin.categories.delete');
  });
Route::group(['prefix' => 'products'], function () {
    Route::get('/',  'App\Http\Controllers\admin\ProductController@index')->name('admin.products.index');
  
    Route::get('/create', [admin\CategoryController::class, 'create'])->name('admin.products.create');
  
    Route::post('/store', [admin\CategoryController::class, 'store'])->name('admin.products.store');
  
    Route::get('/{id}/edit', [admin\CategoryController::class, 'edit'])->name('admin.products.edit');
  
    Route::post('/update', [admin\CategoryController::class, 'update'])->name('admin.products.update');
    Route::get('/{id}/delete', [admin\CategoryController::class, 'delete'])->name('admin.products.delete');
  });
Route::group(['prefix' => 'orders'], function () {
    Route::get('/',  'App\Http\Controllers\admin\OrderController@index')->name('admin.orders.index');
  
    Route::get('/create', [admin\CategoryController::class, 'create'])->name('admin.orders.create');
  
    Route::post('/store', [admin\CategoryController::class, 'store'])->name('admin.orders.store');
  
    Route::get('/{id}/edit', [admin\CategoryController::class, 'edit'])->name('admin.orders.edit');
  
    Route::post('/update', [admin\CategoryController::class, 'update'])->name('admin.orders.update');
    Route::get('/{id}/delete', [admin\CategoryController::class, 'delete'])->name('admin.orders.delete');
  });
Route::group(['prefix' => 'users'], function () {
    Route::get('/',  'App\Http\Controllers\admin\UserController@index')->name('admin.users.index');
  
    Route::get('/create', [admin\CategoryController::class, 'create'])->name('admin.users.create');
  
    Route::post('/store', [admin\CategoryController::class, 'store'])->name('admin.users.store');
  
    Route::get('/{id}/edit', [admin\CategoryController::class, 'edit'])->name('admin.users.edit');
  
    Route::post('/update', [admin\CategoryController::class, 'update'])->name('admin.users.update');
    Route::get('/{id}/delete', [admin\CategoryController::class, 'delete'])->name('admin.users.delete');
  });
Route::group(['prefix' => 'admin'], function () {
    Route::get('/',  'App\Http\Controllers\admin\DashboardController@index')->name('admin.dashboard.index');
  
  });
