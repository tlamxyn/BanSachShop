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
    public function create(Request $request)
    {

        return view('admin.staff.create');
    }
    public function store(Request $request)
    {
        $staff = [
            "Taikhoan" =>$request->Taikhoan,
            "MatKhau" => $request->Matkhau,
            "Email" => $request->Email,
            "MaCV" => $request->Chucvu
        ];
        nhanvien::create($staff);
        return redirect()->back();
    }
}
