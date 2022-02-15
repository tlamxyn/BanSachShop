@extends('layouts.app')
@section('title') 
@section('content') 
<div class="container">
    <div class="row">
        <div class="col-md-4">
            @foreach ($data as $content )
            <form action="{{ route('admin.products.update',$content->MaSP) }}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    @csrf
                    @method('put')
                    <label  for="my-input" class="control-label" style="margin-top: 10px"> Tên Sản Phẩm </label>
                    <input  id="my-input" required class="form-control" type="text" name="Ten" value="{{  $content->Ten }}">

                    <label  for="my-input" class="control-label" style="margin-top: 10px">Thể Loại</label>
                    <input  id="my-input" required class="form-control" type="text" name="Theloai" value="{{  $content->Theloai }}">

                    <label  for="my-input" class="control-label" style="margin-top: 10px">Moo tar</label>
                    <input  id="my-input" required class="form-control" type="text" name="Mota" value="{{  $content->Mota }}">


                    <label  for="my-input" class="control-label" style="margin-top: 10px">Tác Giả</label>
                    <input  id="my-input" required class="form-control" type="text" name="TacGia" value="{{  $content->TacGia }}">


                    <label  for="my-input" class="control-label" style="margin-top: 10px">Nhà Xuất Bản</label>
                    <input  id="my-input" required class="form-control" type="text" name="NxB" value="{{  $content->NxB }}">

                    <label  for="my-input" class="control-label" style="margin-top: 10px">Trạng Thái</label>
                    <input  id="my-input" required class="form-control" type="text" name="Trangthai" value="{{  $content->Trangthai }}">


                    <label  for="my-input" class="control-label" style="margin-top: 10px">Hình Ảnh</label>
                    <input  id="my-input" required class="form-control" type="file" name="Hinhanh" value="{{  $content->Hinhanh }}">

                    <a href="{{ route('admin.products.index') }}" type="submit" class="btn btn-primary">Back To List</a>
                    <button name="submit" id="" class="btn btn-primary" type="submit">Sửa</button>
                </div>
                @endforeach
            </form>
        </div>
    </div>
</div>
@endsection