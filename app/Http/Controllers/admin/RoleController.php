<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\chucvu;

class RoleController extends Controller
{
    public function index()
    {
        $ds_cv=chucvu::all();
        return view('admin.role.index', compact('ds_cv'));
    }
    public function create(Request $request)
    {

        return view('admin.role.create');
    }
    public function store(Request $request)
    {
        $data = [
            "Ten" =>$request->Ten,
            "Mota" => $request->Mota,
        ];
        chucvu::create($data);
        return redirect()->back();
    }
}
