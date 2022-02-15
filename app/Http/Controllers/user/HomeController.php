<?php

namespace App\Http\Controllers\user;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\khachhang;
use Session;
class HomeController extends Controller
{
   public function index()
   { 
       return view('index');
   }
   public function cart()
   {
       return view('user.cart');
   }
   public function product()
   {
       return view('user.product');
   }
   public function loginUser(Request $request)
   {
        $taikhoan = DB::table('khachhang')->where('Taikhoan',$request->Taikhoan)->exists();
        $matkhau = DB::table('khachhang')->where('password',$request->password)->exists();
        Session::put('nameUser', null);
        
        if($taikhoan==true)
        {
            if($matkhau==true)
            {

                $value = DB::table('khachhang')->where('Taikhoan',$request->Taikhoan)->value('TaiKhoan');
                Session::put('nameUser', $value);
                //dd(Session::get('nameUser'));
                return view('user.cart');
                
            }
            else{
            return view('index');
            }
        }
        else
        {
            return view('index');
        }
   }
   public function SingUpUser(Request $request)
   {
    $this->model = new khachhang();
    $taikhoan = DB::table('khachhang')->where('Taikhoan',$request->Taikhoan)->exists();
    if($taikhoan)
    {
        return back()->withInput($request->only('taikhoan', 'remember'));
    }
    else{
        if($request->password== $request->password1)
        {
        $data = [
            "Email" =>$request->Email,
            "password" => $request->password ,
            "Taikhoan" => $request->Taikhoan,
            "Sodienthoai" => $request->Sodienthoai,
            "Avatar" => $request->Avatar,
            "DiaChi"=> $request->DiaChi,
        ];
        
        $create = $this->model::create($data);
        if ($create->save()) {
        return redirect()->route('home.product');
            }
        else{
            return back()->withInput($request->only('Taikhoan', 'remember'));
            }
        }
        else{
        return back()->withInput($request->only('TaiKhoan', 'remember'));
        }
    }
   }
   public function logout()
   {
    Session::put('nameUser', null);
       return view('index');
   }
}
    