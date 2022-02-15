<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
 

    Route::group(['prefix' => '/'], function () {
        Route::get('login', [Admin\LoginController::class, 'showLoginForm'])->
        name('admin.login');
        Route::get('singin', [Admin\LoginController::class, 'showSinginForm'])->
        name('admin.singin');

        Route::post('login', [Admin\LoginController::class, 'login'])->
        name('admin.login.post');
        Route::get('logout', [Admin\LoginController::class, 'logout'])->
        name('admin.logout');
        Route::post('singin', [Admin\LoginController::class, 'singin'])->
        name('admin.singin.post');
        
    Route::group(['middleware' => ['auth:admin']], function () {

    Route::get('/', [Admin\LoginController::class, 'index'])->name('admin.dashboard.index');
    
    Route::group(['prefix' => 'Categories'], function () {
        Route::get('/',  'App\Http\Controllers\admin\CategoryController@index')->name('admin.categories.index');
      
        Route::get('/create', [App\Http\Controllers\admin\CategoryController::class, 'create'])->name('admin.categories.create');
        // Thêm dòng dưới đây vào
        Route::post('/create', [App\Http\Controllers\admin\CategoryController::class, 'store'])->name('admin.categories.store');
      
        Route::get('/{id}/edit', [admin\CategoryController::class, 'edit'])->name('admin.categories.edit');
      
        Route::post('/update', [admin\CategoryController::class, 'update'])->name('admin.categories.update');
        Route::get('/{id}/delete', [admin\CategoryController::class, 'delete'])->name('admin.categories.delete');
      });
    Route::group(['prefix' => 'products'], function () {
        Route::get('/',  'App\Http\Controllers\admin\ProductController@index')->name('admin.products.index');
      
        Route::get('/create', 'App\Http\Controllers\admin\ProductController@Create')->name('admin.products.create');
                  
        Route::post('/store', 'App\Http\Controllers\admin\ProductController@store')->name('admin.products.store');
      
        Route::get('/{id}/edit', 'App\Http\Controllers\admin\ProductController@edit')->name('admin.products.edit');
        Route::get('/detail/{id}', 'App\Http\Controllers\admin\ProductController@detail')->name('admin.products.detail');
        Route::put('/update', 'App\Http\Controllers\admin\ProductController@update')->name('admin.products.update');
        Route::get('/{id}/delete', 'App\Http\Controllers\admin\ProductController@delete')->name('admin.products.delete');
      });
    Route::group(['prefix' => 'orders'], function () {
        Route::get('/',  'App\Http\Controllers\admin\OrderController@index')->name('admin.orders.index');                  
        Route::get('/{id}/delete', [admin\CategoryController::class, 'delete'])->name('admin.orders.delete');
      });
      Route::group(['prefix' => 'invoice'], function () {
        Route::get('/',  'App\Http\Controllers\admin\invoiceController@index')->name('admin.invoice.index');
      
        Route::get('/create', [admin\CategoryController::class, 'create'])->name('admin.invoice.create');
      
        Route::post('/store', [admin\CategoryController::class, 'store'])->name('admin.invoice.store');
      
        Route::get('/{id}/edit', [admin\CategoryController::class, 'edit'])->name('admin.invoice.edit');
      
        Route::post('/update', [admin\CategoryController::class, 'update'])->name('admin.invoice.update');
        Route::get('/{id}/delete', [admin\CategoryController::class, 'delete'])->name('admin.invoice.delete');
      });
      Route::group(['prefix' => 'users'], function () {
        Route::get('/',  'App\Http\Controllers\admin\UserController@index')->name('admin.users.index');
    
        Route::get('/{id}',  'App\Http\Controllers\admin\UserController@detail')->name('admin.users.detail');
    
        Route::get('/create', 'App\Http\Controllers\admin\UserController@create')->name('admin.users.create');
      
        Route::post('/store', 'App\Http\Controllers\admin\UserController@store')->name('admin.users.store');
      
      });
      Route::group(['prefix' => 'staff'], function () {
        Route::get('/',  'App\Http\Controllers\admin\StaffController@index')->name('admin.staff.index');
    
        //Route::get('/{id}',  'App\Http\Controllers\admin\StaffController@detail')->name('admin.staff.detail');
    
        Route::get('/create', 'App\Http\Controllers\admin\StaffController@create')->name('admin.staff.create');
      
        Route::post('/store', 'App\Http\Controllers\admin\StaffController@store')->name('admin.staff.store');
      
      });
      Route::group(['prefix' => 'role'], function () {
        Route::get('/',  'App\Http\Controllers\admin\RoleController@index')->name('admin.role.index');
    
    
        Route::get('/create', 'App\Http\Controllers\admin\RoleController@create')->name('admin.role.create');
      
        Route::post('/store', 'App\Http\Controllers\admin\RoleController@store')->name('admin.role.store');
      
      });
      Route::group(['prefix' => 'supplier'], function () {
        Route::get('/',  'App\Http\Controllers\admin\SupplierController@index')->name('admin.supplier.index');
    
    
        Route::get('/create', 'App\Http\Controllers\admin\SupplierController@create')->name('admin.supplier.create');
      
        Route::post('/store', 'App\Http\Controllers\admin\SupplierController@store')->name('admin.supplier.store');
      
      });
    });
});