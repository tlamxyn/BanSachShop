<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\nhanvien;

class StaffController extends Controller
{
    public function index()
    {
        $ds_nv=nhanvien::all();
        return view('admin.staff.index', compact('ds_nv'));
    }
    // public function create(Request $request)
    // {

    //     return view('admin.categories.create');
    // }
    // public function store(Request $request)
    // {
    //     $theloai = $request->all();
    //     theloai::create($theloai);
    //     return redirect()->back();
    // }
    // public function update(Request $request, $matl)
    // {
    //     $theloai = theloai::find($matl);
    //     $theloai->ten = $request->input('ten');
    //     $theloai->mota=$request->input('mota');
    //     $theloai->update();
    // }
}
