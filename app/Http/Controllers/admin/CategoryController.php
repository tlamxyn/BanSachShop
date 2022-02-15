<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\theloai;


class CategoryController extends Controller
{
    public function index()
    {
        $ds_theloai=theloai::all();
        return view('admin.categories.index', compact('ds_theloai'));
    }
    public function create(Request $request)
    {

        return view('admin.categories.create');
    }
    public function store(Request $request)
    {
        $data = [
            "ten" =>$request->Ten,
            "mota" => $request->Mota,
        ];
        theloai::create($data);
        return redirect()->back();
    }
    public function update(Request $request, $matl)
    {
        $theloai = theloai::find($matl);
        $theloai->ten = $request->input('ten');
        $theloai->mota=$request->input('mota');
        $theloai->update();
    }
}
