@extends('layouts.app')
@section('title') 
@section('content') 
<div class="container">
    <div class="row">
        <div class="col-md-4">
            @foreach ($data as $content )
            <form action="{{ route('admin.categories.update')}}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    @csrf
                    @method('put')
                    <label  for="my-input" class="control-label" style="margin-top: 10px"> MaSP </label>
                    <input  id="my-input" required class="form-control" type="text" name="Ten" value="{{  $content->matl }}">
                    <label  for="my-input" class="control-label" style="margin-top: 10px"> Tên Sản Phẩm </label>
                    <input  id="my-input" required class="form-control" type="text" name="Ten" value="{{  $content->ten }}">

                    <label  for="my-input" class="control-label" style="margin-top: 10px">Thể Loại</label>
                    <input  id="my-input" required class="form-control" type="text" name="Theloai" value="{{  $content->mota }}">

                    <a href="{{ route('admin.products.index') }}" type="submit" class="btn btn-primary">Back To List</a>
                    <button name="submit" id="" class="btn btn-primary" type="submit">Sửa</button>
                </div>
                @endforeach
            </form>
        </div>
    </div>
</div>
@endsection