<?php

namespace App\Http\Controllers\Users;
use App\Models\sach;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 

class ProductsController extends Controller
{
    public function index()
    {
        if (sach::where()->exists()) {
            $data = sach::all();
            return view('index', compact('data'));
        }
        else
        {
            return abort(404);
        }
    }

}