@extends('layouts.app')
@section('title') 
@section('content') 
<div class="container">
    <div class="row">
        <div class="col-md-4">
                <div class="form-group">
                    @csrf
                    @method('put')
                    <label  for="my-input" class="control-label" style="margin-top: 10px"> Tên Sản Phẩm </label>

                    <label  for="my-input" class="control-label" style="margin-top: 10px">Thể Loại</label>

                    <label  for="my-input" class="control-label" style="margin-top: 10px">Moo tar</label>
                    <input  id="my-input" required class="form-control" type="text" name="Mota" value="{{  $content->Mota }}">


                    <label  for="my-input" class="control-label" style="margin-top: 10px">Tác Giả</label>


                    <label  for="my-input" class="control-label" style="margin-top: 10px">Nhà Xuất Bản</label>

                    <label  for="my-input" class="control-label" style="margin-top: 10px">Trạng Thái</label>


                    <label  for="my-input" class="control-label" style="margin-top: 10px">Hình Ảnh</label>

                    <a href="{{ route('admin.products.index') }}" type="submit" class="btn btn-primary">Back To List</a>
                    <button name="submit" id="" class="btn btn-primary" type="submit">Sửa</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection