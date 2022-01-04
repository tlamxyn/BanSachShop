@extends('layouts.app')
@section('title') Category @endsection
@section('content')
<a class="btn btn-outline-secondary btn-icon-text create-new-button">Create</a>
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
                <tr>
                  <td>SP001</td>
                  <td>Thuật giả kim </td>
                  <td>20</td>
                  <td>100.000</td>
                  <td>
                    <a  class="btn btn-outline-secondary btn-icon-text">Edit</a>
                    <a  class="btn btn-outline-secondary btn-icon-text">Details</a>
                    <a  class="btn btn-outline-secondary btn-icon-text">Delete</a>
                  </td>
                </tr>
                <tr>
                  <td>SP002</td>
                  <td>Thuật giả kim b</td>
                  <td>20</td>   
                  <td>150.000</td>
                  <td>
                    <a  class="btn btn-outline-secondary btn-icon-text">Edit</a>
                    <a  class="btn btn-outline-secondary btn-icon-text">Details</a>
                    <a  class="btn btn-outline-secondary btn-icon-text">Delete</a>
                  </td>              
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
@endsection