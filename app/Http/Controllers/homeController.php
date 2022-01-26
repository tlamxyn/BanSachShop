<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
 
    }
    public function product()
    {
        return view('user.product');
    }
    public function cart()
    {
        return view('user.cart');
    }
}
