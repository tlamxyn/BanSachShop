<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;

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

            Route::get('/', function () {
                return view('admin.dashboard.index');
            })->name('admin.dashboard.index');
            
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
              
                Route::get('/create', 'App\Http\Controllers\admin\ProductController@Create')->name('admin.products.create');
              
                Route::post('/store', [admin\ProductController::class, 'store'])->name('admin.products.store');
              
                Route::get('/{id}/edit', [admin\ProductController::class, 'edit'])->name('admin.products.edit');
              
                Route::put('/{id}/update', [admin\ProductController::class, 'update'])->name('admin.products.update');
                
                Route::delete('/{id}/destroy', [admin\ProductController::class, 'destroy'])->name('admin.products.delete');
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
        });
    });