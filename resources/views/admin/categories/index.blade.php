@extends('layouts.app')
@section('title') Category @endsection
@section('content')
<a class="btn btn-outline-secondary btn-icon-text create-new-button" href="{{ route('admin.categories.create') }}" >Create</a>
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
                  <th>Mã thể loại</th>
                  <th>Tên thể loại</th>
                  <th>Mô tả</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($ds_theloai as $categories )
                  

                <tr>
                  <td>{{ $categories->matl }}</td>
                  <td>{{ $categories->ten }} </td>
                  <td>{{ $categories->mota }}</td>
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