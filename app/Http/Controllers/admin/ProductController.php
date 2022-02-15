<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\sach;
class ProductController extends Controller
{
    //
    public function index()
    {
        $ds_sp=sach::all();
        return view('admin.products.index', compact('ds_sp'));
    }

    public function create(Request $request)
    {
        return view('admin.products.create');
    }
    public function store(Request $request)
    {
        $ds_sp=sach::all();
        $count=$ds_sp->count();
        $base =0;
        $one =1;
        $filename=$count.'.'.$request->Hinhanh->extension();
        $request->validate([
            'Hinhanh' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $request->file('Hinhanh')->storeAs('images\product', $filename, 'local');
        $data = [
            "Ten" =>$request->Ten,
            "Giaban" => $base ,
            "SLtonkho" => $base ,
            "Hinhanh" => $filename,
            "Mota" => $request->Mota ,
            "TacGia" => $request->TacGia,
            "NXB" =>$request->NxB,
            "Theloai" => $request->Theloai,
            "Trangthai"=>$one,
        ];

        sach::create($data);
       
        return redirect()->back();
    }

    public function detail($MaSP)
    {
        if (sach::where('MaSP', $MaSP)->exists()) {
            $data = sach::where('MaSP',$MaSP)->get();
            return view('admin.products.detail', compact('data'));
        }
        else
        {
            return abort(404);
        }
    }

    public function Edit($MaSP)
    {
        $data = sach::where('MaSP',$MaSP)->get();
        return view('Admin.products.Edit',compact('data'));
    }
    public function update(Request $request)
    {
        
        $filename=$request->MaSP.'.'.$request->Hinhanh->extension();
        $request->validate([
            'Hinhanh' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $request->file('Hinhanh')->storeAs('images\product', $filename, 'local');
        $data = sach::where('MaSP',$request->MaSP)->first();

        if (!$data) {
            return back()->withInput();
        }     
        $data->update([
        'Ten' => $request->Ten,
        'Giaban' => $request->Giaban,
        'SLtonkho'=> $request->SLtonkho,
        'Hinhanh' =>  $filename,
        'Mota' => $request->Mota,
        'TacGia' =>$request->TacGia,
        'NXB' => $request->NxB,
        'Theloai' => $request->Theloai,
    ]);
        return redirect()->back();
    }
}
