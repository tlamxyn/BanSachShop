<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
 

class ProductsController extends Controller
{
    public function index()
    {
        return view('Users.Products.index');
    }
}