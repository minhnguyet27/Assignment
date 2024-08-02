@extends('admin.layouts.app')
@extends('admin.layouts.home')
@section('content')
  <div class="container-fluid px-4">
    <h1 class="mt-4">List Order</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">List Order</li>
    </ol>
  @if(session('sucsses')) 
  <div class="alert alert-success" role="alert">
    {{ session('sucsses') }}
  </div>
  @endif
    {{-- <a href="{{ route('admin.orders.addOrder') }}" class="btn btn-primary mb-4">Thêm mới </a> --}}
    <div class=" card mb-4">
      <div class="card-header row d-flex justify-content-between">
        <div class="col-sm-3">  
          <i class="fas fa-table me-1"></i>
        </div>
        <div class="col-sm-3 ">
          <form class="d-flex justify-content-between " action="">
            <input  type="text" class="form-control" placeholder="Search">
            <button type="submit" class="btn btn-primary">Search</button>
          </form>         
        </div>
      </div>
      <div class="card-body">
        <table id="datatablesSimple" class="table ">
          <thead>
            <tr>
             
              <th>Id</th>
              <th>Total</th>
              <th>Customer</th>
              <th>Status</th>
              <th>Time</th>
              {{-- <th>Số lượng trong kho</th> --}}
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($listOrders as $order)
            <tr>
              
              <td>{{ $order->id }}</td>
              <td>{{ $order->totalPrice }}$</td>
              <td>{{ $order->user->name }}</td>
              <td>
                <select class="form-control" name="" id="">
                  <option class="text-warning" value="pending">pending</option>
                  <option class="text-info" value="processing">processing</option>
                  <option class="text-success" value="completed">completed</option>
                  <option class="text-danger" value="cancelled">cancelled</option>
                </select>
              </td>
              
              <td>{{ $order->created_at }}</td> 
              {{-- <td>{{ $value->quantity }}</td> --}}
              <td>
                <a href="{{ route('admin.orders.seeDetail',$order->id) }}" class="btn btn-info">See deatil</a>
                <button onclick=" return confirm('Are you sure?')" href="" class="btn btn-danger">Soft delete</button>
                {{-- <a href="{{ route('admin.products.editProduct',$value->product_id) }}" class="btn btn-warning">Sửa</a>
                <a href="{{ route('admin.products.editProduct',$value->product_id) }}" class="btn btn-warning">Xem chi tiet</a>
                <form class="mt-2" action="{{ route('admin.products.deleteProduct',$value->product_id) }}" method="post">
                  @method('DELETE')
                  @csrf
                  <button type="submit" 
                    onclick="return confirm('Bạn có muốn xóa không?')" class="btn btn-danger">Xóa</button>
                </form> --}}
   
              </td>
            </tr>
            @endforeach
          </tbody>  
        </table>
      
      </div>
      <div class="m-3">
        {{-- {{ $listOrders->links('pagination::bootstrap-5') }} --}}
      </div>

</div>

</div>
  @endsection
            
      
           
        







