<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\phieunhap;

class InvoiceController extends Controller
{
    public function index()
    {
        $ds_phieunhap = phieunhap::all();
        return view('admin.invoices.index', compact('ds_phieunhap'));
    }

    public function create(Request $request)
    {
        $phieunhap = new phieunhap();
        $phieunhap->MaPN = $request->input('MaPN');
        $phieunhap->MaNV = $request->input('MaNV');
        $phieunhap->Tongtien = $request->input('Tongtien');
        $phieunhap->Ngaylap = $request->input('Ngaylap');
        $phieunhap->MaNCC = $request->input('MaNCC');
        $phieunhap->save();
        return redirect()->back();
    }

    public function detail($mapn)
    {
        if (phieunhap::where('MaPN', $mapn)->exists()) {
            $phieunhap = phieunhap::find($mapn);
            return view('admin.invoices.detail', compact('phieunhap'));
        }
        else
        {
            return abort(404);
        }
    }

    public function update(Request $request, $mapn)
    {
        $phieunhap = phieunhap::find($mapn);
        $phieunhap->MaNV = $request->input('MaNV');
        $phieunhap->Tongtien = $request->input('Tongtien');
        $phieunhap->Ngaylap = $request->input('Ngaylap');
        $phieunhap->MaNCC = $request->input('MaNCC');
        $phieunhap->update();
    }

    public function delete($mapn)
    {
        if(phieunhap::where('MaPN', $mapn)->exists())
        {
            $phieunhap = phieunhap::find($mapn);
            foreach($phieunhap->chitietphieunhap as $ctpn)
            {
                $ctpn->delete();
            }
            $phieunhap->delete();
            return redirect()->back();
        }
    }
}