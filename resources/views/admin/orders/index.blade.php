@extends('layouts.app')
@section('title') Category @endsection
@section('content')
<div >
    <div class=" stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Basic Table</h4>
          </p>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Mã hóa đơn</th>
                  <th>Tài khoản</th>
                  <th>Tổng Tiền (VNĐ)</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($ds_hoadon as $hoadon )
                  

                <tr>
                  <td>{{ $hoadon->mahd }}</td>
                  <td>{{ $hoadon->makh }} </td>
                  <td>{{ $hoadon->tongtien }}</td>
                  <td>
                    <a  class="btn btn-outline-secondary btn-icon-text">Details</a>
                    <a  class="btn btn-outline-secondary btn-icon-text">Delete</a>
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