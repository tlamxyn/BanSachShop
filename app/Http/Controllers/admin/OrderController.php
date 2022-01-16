<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\hoadon;

class OrderController extends Controller
{
    //
    public function index()
    {
        //Tạo 1 biến chứa danh sách hóa đơn
        $danhsach_hoadon = hoadon::all();
        return view('admin.orders.index', compact('danhsach_hoadon'));
    }

    public function create(Request $request)
    {
        $hoadon = new hoadon();
        $hoadon->MaHD = $request->input('MaHD');
        $hoadon->MaKH = $request->input('MaKH');
        $hoadon->Tongtien = $request->input('Tongtien');
        $hoadon->Trangthai = $request->input('Trangthai');
        $hoadon->GiamGia = $request->input('GiamGia');
        $hoadon->TenKH = $request->input('TenKH');
        $hoadon->Diachigiaohang = $request->input('Diachigiaohang');
        $hoadon->Phuongthucthanhtoan = $request->input('Phuongthucthanhtoan');
        $hoadon->Sodienthoai = $request->input('Sodienthoai');
        $hoadon->Ngaylap = $request->input('Ngaylap');
        $hoadon->MaNV = $request->input('MaNV');
        $hoadon->save();
        return redirect()->back();
    }

    public function detail($mahd)
    {
        if (hoadon::where('MaHD', $mahd)->exists()) {
            $hoadon = hoadon::find($mahd);
            return view('admin.orders.detail', compact('hoadon'));
        }
        else
        {
            return abort(404);
        }
    }

    public function update(Request $request, $mahd)
    {
        $hoadon = hoadon::find($mahd);
        $hoadon->MaKH = $request->input('MaKH');
        $hoadon->Tongtien = $request->input('TongTien');
        $hoadon->Trangthai = $request->input('Trangthai');
        $hoadon->GiamGia = $request->input('GiamGia');
        $hoadon->TenKH = $request->input('TenKH');
        $hoadon->Diachigiaohang = $request->input('Diachigiaohang');
        $hoadon->Phuongthucthanhtoan = $request->input('Phuongthucthanhtoan');
        $hoadon->Sodienthoai = $request->input('Sodienthoai');
        $hoadon->Ngaylap = $request->input('Ngaylap');
        $hoadon->MaNV = $request->input('MaNV');
        $hoadon->update();
    }

    public function delete($mahd)
    {
        if(hoadon::where('MaHD', $mahd)->exists())
        {
            $hoadon = hoadon::find($mahd);
            foreach($hoadon->chitiethd as $cthd)
            {
                $cthd->delete();
            }
            $hoadon->delete();
            return redirect()->back();
        }
    }
}
