@extends('layouts.app')
@section('title') Category @endsection
@section('content')
<a class="btn btn-outline-secondary btn-icon-text create-new-button" href={{ route('admin.products.create')}}>Thêm mới</a>
<div >
    <div class=" stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Sách</h4>
          </p>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th></th>
                  <th>Mã sản phẩm</th>
                  <th>Tên sản phẩm</th>
                  <th>Giá bán</th>
                  <th>Số lượng tồn kho</th>
                  <th>Tổng</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($ds_sp as $product )
                @php
                  $tong =0;
                  $tong= $product->Giaban*$product->SLtonkho ;
                @endphp

                <tr>
                  <td></td>
                  <td>{{ $product->MaSP }}</td>
                  <td>{{ $product->Ten }} </td>
                  <td>{{ $product->Giaban }} </td>
                  <td>{{ $product->SLtonkho }} </td>
                  <td>{{ $tong}} </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
@endsection