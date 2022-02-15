<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\sach;

class HomeController extends Controller
{
    public function index()
    {
        $data = sach::all();   
        return view('index',compact('data'));
 
    }
    public function product()
    {
        return view('user.product');
    }
    public function cart()
    {
        return view('Users.Carts.index');
    }
}
