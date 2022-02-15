<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\nhanvien;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/admin';

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
        $this->model = new nhanvien();
    }

    public function showLoginForm()
    {
        return view('admin.login.index');
    }

    public function index()
    {
        return view('admin.dashboard.index');
    }

    public function login(Request $request)
    {
        // $this->validate($request, [
        //         'Email' => 'required|email',
        //         'password' => 'required|min:5',
        //     ]);
            //  $nhanvien = DB::table('nhanvien')->where('password',$request->password)->exists();
            //  dd($nhanvien);
            if (Auth::guard('admin')->attempt([
                'Email' => $request->email,
                'password' => $request->password,
            ], $request->get('remember'),)) { 
                return redirect()->intended(route('admin.dashboard.index'));
                //return view('admin.dashboard.index');
            }
            // dd($request->email,$request->password);
            return back()->withInput($request->only('email', 'remember'));
    }
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        return redirect()->route('admin.login');
    }
    public function singin(Request $request)
    {
        if($request->password== $request->password1)
        {
        $data = [
            "Email" =>$request->email,
            "password" => Hash::make($request->password ),
            "Taikhoan" => 1,
            "Sodienthoai" => 1,
            "Avatar" => 1,
            "MaCV" => 1,
            "DiaChi"=> 1,
        ];
        
        $create = $this->model::create($data);
        if ($create->save()) {
           
            return redirect()->route('admin.login');
            }
        else{
            return back()->withInput($request->only('email', 'remember'));
            }
        }
        return back()->withInput($request->only('email', 'remember'));
    }
        
    public function showSinginForm()
    {
        
        return view('admin.login.singin');
        
    }
}
