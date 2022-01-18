@extends('layouts.app')
@section('title') 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form action="{{ route('admin.staff.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
        
                    <label  for="my-input" class="control-label" style="margin-top: 10px"> Tài khoản </label>
                    <input  id="my-input" required class="form-control" type="text" name="Taikhoan">
                    <label  for="my-input" class="control-label" style="margin-top: 10px">Mật khẩu</label>
                    <input  id="my-input" required class="form-control" type="text" name="Matkhau">
                    <label  for="my-input" class="control-label" style="margin-top: 10px">Email</label>
                    <input  id="my-input" required class="form-control" type="text" name="Email">
                    <label  for="my-input" class="control-label" style="margin-top: 10px">Chức vụ</label>
                    <input  id="my-input" required class="form-control" type="text" name="Chucvu">
                <a href="{{ route('admin.staff.index') }}" type="submit" class="btn btn-primary">Back To List</a>
                <button name="submit" id="" class="btn btn-primary" type="submit">Thêm</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection