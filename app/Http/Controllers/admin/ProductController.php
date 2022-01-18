<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
class ProductController extends Controller
{
    //
    public function index()
    {
        $ds_sp=product::all();
        return view('admin.products.index', compact('ds_sp'));
    }

    public function create(Request $request)
    {
        return view('admin.products.create');
    }
    public function store(Request $request)
    {
        $data = [
            "Ten" =>$request->Ten,
            "Giaban" => $request->Giaban,
            "SLtonkho" => $request->SLtonkho,
            "Giaban"=>$request->Giaban,
            "Hinhanh" => $request->Hinhanh,
            "Mota" => $request->Mota ,
            "TacGia" => $request->TacGia,
            "NXB" =>$request->NxB,
            "Theloai" => $request->Theloai,
        ];
        product::create($data);
       
        return redirect()->back();
    }

    public function detail($MaSP)
    {
        if (product::where('MaSP', $MaSP)->exists()) {
            $data = product::where('MaSP',$MaSP)->get();
            return view('admin.products.detail', compact('data'));
        }
        else
        {
            return abort(404);
        }
    }

    public function Edit($MaSP)
    {
        $data = product::where('MaSP',$MaSP)->get();
        return view('Admin.products.Edit',compact('data'));
    }
    public function update(Request $request)
    {
        
        $data = product::where('MaSP',$request->TenMaSP)->first();

        if (!$data) {
            return back()->withInput();
        }     
        $data->update([
        'Ten' => $request->Ten,
        'Giaban' => $request->Giaban,
        'SLtonkho'=> $request->SLtonkho,
        'Hinhanh' => $request->Hinhanh,
        'Mota' => $request->Mota,
        'TacGia' =>$request->TacGia,
        'NXB' => $request->NXB,
        'Theloai' => $request->Theloai,
    ]);
        return redirect()->back();
    }
}
