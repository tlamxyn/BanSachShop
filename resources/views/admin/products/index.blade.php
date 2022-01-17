@extends('layouts.app')
@section('title') Category @endsection
@section('content')
<a class="btn btn-outline-secondary btn-icon-text create-new-button" href="{{ route('admin.products.create') }}">Create</a>
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
                  <th>Mã sản phẩm</th>
                  <th>Tên sản phẩm</th>
                  <th>Số Lượng tồn kho</th>
                  <th>Đơn giá (VNĐ)</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>

                @foreach ($data as $pro)
                <tr>
                  <td>{{ $pro->id }}</td>
                  <td>{{ $pro->Ten }}</td>
                  <td>{{ $pro->SLtonkho }}</td>
                  <td>{{ $pro->Giaban }}</td>
                  <td>
                    <a  href="{{ route('admin.products.edit',$pro->id) }}"  class="btn btn-outline-secondary btn-icon-text">Edit</a>
                    <form action="{{ route('admin.products.delete',$pro->id) }}" method="POST">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-outline-secondary btn-icon-text">DELETE</button>
                    </form>
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