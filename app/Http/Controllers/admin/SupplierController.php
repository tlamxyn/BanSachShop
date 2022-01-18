<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\nhacungcap;

class SupplierController extends Controller
{
    public function index()
    {
        $ds_ncc=nhacungcap::all();
        return view('admin.supplier.index', compact('ds_ncc'));
    }
    public function create(Request $request)
    {

        return view('admin.supplier.create');
    }
    public function store(Request $request)
    {
        $sup = [
            "TenNcc" =>$request->TenNcc,
            "mota" => $request->mota,
        ];
        nhacungcap::create($sup);
        return redirect()->back();
    }
}
