@extends('layouts.app')
@section('title') Category @endsection
@section('content')
<a class="btn btn-outline-secondary btn-icon-text create-new-button" href="{{ route('admin.categories.create') }}" >Thêm mới</a>
<div >
    <div class=" stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Thê loại</h4>
          </p>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Mã thể loại</th>
                  <th>Tên thể loại</th>
                  <th>Mô tả</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($ds_theloai as $categories )
                  

                <tr>
                  <td>{{ $categories->MaTL }}</td>
                  <td>{{ $categories->Ten }} </td>
                  <td>{{ substr($categories->Mota,0,50)}}</td>
                  <td>
                    <a  class="btn btn-outline-secondary btn-icon-text">Edit</a>
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