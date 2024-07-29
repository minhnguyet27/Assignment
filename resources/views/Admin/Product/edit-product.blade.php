@extends('admin.layouts.app')
@extends('admin.layouts.home')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Sửa sản phẩm</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Sửa sản phẩm</li>
    </ol>
    <div class=" mb-4">
        <form action="" method="POST">
            @method('put')
            @csrf
            <div class="form-group mb-3">
              <label for="">Tên sản phẩm</label>
              <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
            <div class="form-group mb-3">
              <label for="">Giá</label>
              <input name="price" type="text" class="form-control" id="exampleInputPassword1" placeholder="">
            </div>    
                <div class="form-group mb-3">
                  <label for="exampleFormControlFile1">Hình ảnh</label>
                  <input name="image_url" type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
            <div class="form-group mb-3">
                <label for="exampleInputPassword1">Mô tả</label>
                <textarea name="description" class="form-control" name="" id="" cols="30" rows="3"></textarea>
              </div>
              
              <div class="form-group mb-3">
                <label for="">Số lượng</label>
                <input name="quantity" type="text" class="form-control" id="exampleInputPassword1" placeholder="">
              </div> 
              <div class="form-group mb-3">
                <label for="">Lượt xem</label>
                <input name="view" type="text" class="form-control" id="exampleInputPassword1" placeholder="">
              </div>
              
           
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>

</div>
@endsection