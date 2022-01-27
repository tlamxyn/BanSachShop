<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class LoginController extends Controller
{
    
    protected $redirectTo = '/admin';

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
        $this->model = new Admin();
    
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
        
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        
    if (Auth::guard('admin')->attempt([
        'email' => $request->email,
        'password' => $request->password,
    ], $request->get('remember'))) {
         return redirect()->intended(route('admin.dashboard.index'));
    }
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
            "name" => "admin",
            "email" =>$request->email,
            "password" =>  bcrypt($request->password),
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
