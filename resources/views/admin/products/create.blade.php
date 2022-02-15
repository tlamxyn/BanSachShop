@extends('layouts.app')
@section('title') 
@section('content')
@php
    $data = App\Models\theloai::all();  
@endphp
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form action="{{ route('admin.products.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
        
                    <label  for="my-input" class="control-label" style="margin-top: 10px"> Tên Sản Phẩm </label>
                    <input  id="my-input" required class="form-control" type="text" name="Ten">
                    
                    <label  for="my-input" class="control-label" style="margin-top: 10px">Thể Loại</label>
                    {{-- <input  id="my-input" required class="form-control" type="text" name="Theloai"> --}}
                    <select name="Theloai" id="my-input" required class="form-control">
                        @foreach ($data as $tl )
                        <option value="{{  $tl->MaTL }}">{{  $tl->Ten }}</option>
                        @endforeach
                        
                      </select>

                    <label  for="my-input" class="control-label" style="margin-top: 10px">Mô tả</label>
                    <input  id="my-input" required class="form-control" type="text" name="Mota">
            
                
                    <label  for="my-input" class="control-label" style="margin-top: 10px">Tác Giả</label>
                    <input  id="my-input" required class="form-control" type="text" name="TacGia">
            
                
                    <label  for="my-input" class="control-label" style="margin-top: 10px">Nhà Xuất Bản</label>
                    <input  id="my-input" required class="form-control" type="text" name="NxB">           
                
                    <label  for="my-input" class="control-label" style="margin-top: 10px">Trạng Thái</label>
                    <input  id="my-input" required class="form-control" type="text" name="Trangthai">
            
                
                    <label  for="my-input" class="control-label" style="margin-top: 10px">Hình Ảnh</label>
                    <input  id="my-input" required class="form-control" type="file" name="Hinhanh">
            
                <a href="{{ route('admin.products.index') }}" type="submit" class="btn btn-primary">Back To List</a>
                <button name="submit" id="" class="btn btn-primary" type="submit">Thêm</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection