@extends('admin.layouts.app')
@extends('admin.layouts.home')
@section('content')
  <div class="container-fluid px-4">
    <h1 class="mt-4">List Product</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">List Product</li>
    </ol>
  @if(session('sucsses')) 
  <div class="alert alert-success" role="alert">
    {{ session('sucsses') }}
  </div>
  @endif
    <a href="{{ route('admin.products.addProduct') }}" class="btn btn-primary mb-4">Thêm mới </a>
    <div class="card mb-4">
      <div class="card-header">
        <i class="fas fa-table me-1"></i>
      </div>
      <div class="card-body">
        <table id="datatablesSimple" class="table table-hover">
          <thead>
            <tr>
              <th>STT</th>
              <th>Tên</th>
              <th>Giá</th>
              <th>Hình ảnh</th>
              <th>Mô tả</th>
              <th>Lượt xem</th>
              <th>Số lượng trong kho</th>
              <th>Hành động</th>
            </tr>
          </thead>
          <tbody>
            @foreach($listProducts as $key => $value)
            <tr>
              <td>{{ $key+1 }}</td>
              <td>{{ $value->name }}</td>
              <td>{{ $value->price }}</td>
              <td><img style="width: 100px" src="{{ asset( $value->image_url) }}" alt=""></td>
              <td>{{ $value->description }}</td>
              <td>{{ $value->view }}</td>
              <td>{{ $value->quantity }}</td>
              <td>
                <a href="{{ route('admin.products.editProduct',$value->product_id) }}" class="btn btn-warning">Sửa</a>
                <form class="mt-2" action="{{ route('admin.products.deleteProduct',$value->id_product) }}" method="post">
                  @method('delete')
                  @csrf
                  <button type="submit" 
                    onclick="return confirm('Bạn có muốn xóa không?')" class="btn btn-danger">Xóa</button>
                </form>
                
              </td>
            </tr>
            @endforeach
          </tbody>  
        </table>
      
      </div>
      <div class="m-3">
        {{ $listProducts->links('pagination::bootstrap-5') }}
      </div>

</div>

</div>
  @endsection
            
      
           
        







