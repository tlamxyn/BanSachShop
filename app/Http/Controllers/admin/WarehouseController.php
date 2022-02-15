<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\sach;
class WarehouseController extends Controller
{
    //
    public function index()
    {
        $ds_sp=sach::all();
        return view('admin.warehouses.index', compact('ds_sp'));
    }

}
