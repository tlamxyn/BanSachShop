@extends('layouts.app')
@section('title') Category @endsection
@section('content')
<div >
    <div class=" stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Danh sách phiếu nhập</h4>
          </p>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Mã hóa đơn</th>
                  <th>Nhà cung cấp</th>
                  <th>Người lập</th>
                  <th>Tổng Tiền (VNĐ)</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($ds_phieunhap as $phieunhap )
                  

                <tr>
                  <td>{{ $phieunhap->MaPN }}</td>
                  <td>{{ $phieunhap->nhacungcap->TenNcc }}</td>
                  <td>{{ $phieunhap->nhanvien->TaiKhoan }} </td>
                  <td>{{ $phieunhap->Tongtien }}</td>
                  <td>
                    <a  class="btn btn-outline-secondary btn-icon-text">Details</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
@endsection