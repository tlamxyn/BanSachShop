@extends('layouts.app')
@section('title') Category @endsection
@section('content')
<a class="btn btn-outline-secondary btn-icon-text create-new-button" href={{ route('admin.staff.create')}}>Thêm mới</a>
<div >
    <div class=" stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Nhân viên</h4>
          </p>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Tài khoản</th>
                  <th>Email</th>
                  <th>Chức vụ</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($ds_nv as $nhanvien )
                  

                <tr>
                  <td>{{ $nhanvien->TaiKhoan }}</td>
                  <td>{{ $nhanvien->email }} </td>
                  <td>{{ $nhanvien->MaCV }}</td>
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