<?php

namespace App\Http\Controllers\admin;
use App\Models\khachhang;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $ds_kh=khachhang::all();
        return view('admin.users.index', compact('ds_kh'));
    }
    public function create()
    {
        return view('admin.users.create');
    }
    public function store(Request $request){
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        khachhang::create($data);
        echo"success create user";
    }
    public function detail()
    {
        return view('admin.users.detail');
    }
    public function update(Request $request, $id){
        $user = khachhang::findOrFail($id);

        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        khachhang::update($data);
    }
        
}
