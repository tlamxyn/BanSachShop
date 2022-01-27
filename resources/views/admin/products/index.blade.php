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
                  <th>Mã sản phẩm</th>
                  <th>Tên sản phẩm</th>
                  <th>Số Lượng tồn kho</th>
                  <th>Đơn giá (VNĐ)</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($ds_sp as $product )
                  

                <tr>
                  <td>{{ $product->id }}</td>
                  <td>{{ $product->Ten }} </td>
                  <td>{{ $product->SLtonkho }}</td>
                  <td>{{ $product->Giaban }}</td>
                  <td>
                    <a  class="btn btn-outline-secondary btn-icon-text"href={{ route('admin.products.edit',$product->id)}}>Edit</a>
                    <a  class="btn btn-outline-secondary btn-icon-text"href={{ route('admin.products.detail',$product->id)}}>Details</a>
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