@extends('layouts.app')
@section('title') Category @endsection
@section('content')
<div >
    <div class=" stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Danh sách khách hàng</h4>
          </p>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Mã khách hàng</th>
                  <th>Tên </th>
                  <th>Email </th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($ds_kh as $user )
                  

                <tr>
                  <td>{{ $user->MAKH }}</td>
                  <td>{{ $user->TaiKhoan }} </td>
                  <td>{{ $user->Email }}</td>
                  <td>
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