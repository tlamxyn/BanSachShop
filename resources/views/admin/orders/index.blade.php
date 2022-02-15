@extends('layouts.app')
@section('title') Category @endsection
@section('content')
<div >
    <div class=" stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Đơn đặt hàng</h4>
          </p>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Mã hóa đơn</th>
                  <th>Tên người nhận </th>
                  <th>Địa chỉ </th>
                  <th>Tổng Tiền (VNĐ)</th>
                  <th>Trạng thái</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($ds_hoadon as $hoadon )
                  

                <tr>
                  <td>{{ $hoadon->MaHD }}</td>
                  <td>{{ $hoadon->TenKH }} </td>
                  <td>{{ $hoadon->Diachigiaohang }} </td>
                  <td>{{ $hoadon->TongTien }}</td>
                  @if ($hoadon->Trangthai ==1)
                              
                  <td>
                    <div class="badge badge-outline-warning">Đang xử lý</div>
                  </td>
                
                    
                @elseif ($hoadon->Trangthai ==2)
                  
                    <td>
                      <div class="badge badge-outline-success">Đã giao hàng</div>
                    </td>
                  
                  @elseif ($hoadon->Trangthai ==0) 
                  
                    <td>
                      <div class="badge badge-outline-danger">Hủy đơn</div>
                    </td>
                  
              @endif
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