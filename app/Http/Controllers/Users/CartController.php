<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cart;
 

class CartController extends Controller
{
    public function index()
    {
        return view('Users.Carts.index');
    }
}