@extends('layouts.app')
@section('title') Category @endsection
@section('content')
<a class="btn btn-outline-secondary btn-icon-text create-new-button" >Create</a>
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
                <tr>
                  <td>TL001</td>
                  <td>Lịch sử </td>
                  <td>đây là thể loại sách lịch sử</td>
                  <td>
                    <a  class="btn btn-outline-secondary btn-icon-text">Edit</a>
                    <a  class="btn btn-outline-secondary btn-icon-text">Details</a>
                    <a  class="btn btn-outline-secondary btn-icon-text">Delete</a>
                  </td>
                </tr>
                <tr>
                  <td>TL002</td>
                  <td>Tiểu thuyết</td>
                  <td>đây là thể loại sách tiểu thuyết</td>  
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