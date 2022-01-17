<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\product;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    protected $table = "products";
    protected $model;
    function __construct()
    {
        $this->model = new product();
    }
    public function index()
    {
        $data = $this->model->get();
        // dd($data);
        return view('admin.products.index',[
            'data' => $data
        ]);
    }
    public function Create()
    {
        return view('Admin.products.Create');
    }
    
    public function store(Request $request)
    {
        // $data = $request->validate(
        //     [
        //     "MaSP"=>'required|string',
        //     "Ten" => 'required|string',
        //     "GiaBan" =>'required|string',
        //     "SLtonkho" =>'required|string',
        //     "Hinhanh"=> 'required|string',
        //     "Mota" => 'required|string',
        //     "TacGia" =>  'required|string',
        //     "NxB" => 'required|string',  
        //     "Theloai" =>'required|string',
        //     "Trangthai"=> '1',
        // ],
        // [
        //     "Ten.required" => 'Ten không được trùng',
        // ]);
        
        // $create = $this->model::create([
        //     "MaSP" => $data['MaSP'],
        //     "Ten" => $data['Ten'],
        //     "GiaBan" => $data['GiaBan'],
        //     "SLtonkho" => $data('SLtonkho'),
        //     "Hinhanh" => $data['Hinhanh'],
        //     "Mota" => $data['Mota'],     
        //     "TacGia" => $data['TacGia'],
        //     "NxB" => $data['NxB'],
        //     "Theloai" => $data['Theloai'],
        //     "Trangthai" => $data['Trangthai'],
        // ]);
       
        // if ($create->save()) {
           
        //     return redirect()->route('admin.products.index',[
        //         'data' => $data
        //     ]);
        // }
        
        // return back()->withInput();

        $data = [
            "Ten" =>$request->Ten,
            "Giaban" => $request->Giaban,
            "SLtonkho" => $request->SLtonkho,
            "Hinhanh" => $request->Hinhanh,
            "Mota" => $request->Mota ,
            "TacGia" => $request->TacGia,
            "NxB" =>$request->NxB,
            "Theloai" => $request->Theloai,
            "Trangthai" => $request->Trangthai,
        ];
        $create = $this->model::create($data);
       
        if ($create->save()) {
           
            return redirect()->route('admin.products.index',[
                'data' => $data
            ]);
        }
        
        return back()->withInput();
    }

    public function destroy($id)
    {
        $data = $this->model->get();
        $kq = DB::delete('delete from products where id = ?', [$id]);
        return redirect()->route('admin.products.index');
    }
    public function Edit($id)
    {
        $data = $this->model::find($id);
        return view('Admin.products.Edit',[
            'id' => $id,
            'data' =>$data
        ]);
    }
    public function update(Request $request, $id)
    {
        
        $data = $this->model::find($id);
        if (!$data) {
            return back()->withInput();
        }
        $data->Ten = $request->Ten;
        $data->Giaban = $request->Giaban;
        $data->SLtonkho= $request->SLtonkho;
        $data->Hinhanh = $request->Hinhanh;
        $data->Mota = $request->Mota;
        $data->TacGia = $request->TacGia;
        $data->NxB = $request->NxB;
        $data->Theloai = $request->Theloai;
        $data->Trangthai = $request->Trangthai;
        if ($data->save()) {
            return redirect()->route('admin.products.index');
        }
        return back()->withInput();
    }
}
