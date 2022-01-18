@extends('layouts.app')
@section('title') 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form action="{{ route('admin.categories.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
        
                    <label  for="my-input" class="control-label" style="margin-top: 10px"> Tên </label>
                    <input  id="my-input" required class="form-control" type="text" name="Ten">
                    <label  for="my-input" class="control-label" style="margin-top: 10px">Mô tả</label>
                    <input  id="my-input" required class="form-control" type="text" name="Mota">
                <a href="{{ route('admin.categories.index') }}" type="submit" class="btn btn-primary">Back To List</a>
                <button name="submit" id="" class="btn btn-primary" type="submit">Thêm</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection