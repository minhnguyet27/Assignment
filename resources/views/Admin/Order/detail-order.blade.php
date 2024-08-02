@extends('admin.layouts.app')
@extends('admin.layouts.home')
@section('content')
  <div class="container-fluid px-4">
    <h1 class="mt-4">Order</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Order detail</li>
    </ol>
  @if(session('sucsses')) 
  <div class="alert alert-success" role="alert">
    {{ session('sucsses') }}
  </div>
  @endif
    {{-- <a href="{{ route('admin.orders.addOrder') }}" class="btn btn-primary mb-4">Thêm mới </a> --}}
    <div class=" card mb-4">
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
           
            </tr>
          </thead>
          <tbody>
            {{-- @foreach($orders as $order) --}}
            <tr>
              
              <td>1</td>
              <td>$</td>
              <td>1</td>
              <td>
               <select class="form-select" name="" id="">
                  <option class="text-warning" value="pending">pending</option>
                  <option class="text-info" value="processing">processing</option>
                  <option class="text-success" value="completed">completed</option>
                  <option  class="text-danger" value="cancelled">cancelled</option>
                </select>
              </td>
              
              <td class="text-muted">time</td> 
              {{-- <td>{{ $value->quantity }}</td> --}}
              <td>
               
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
            {{-- @endforeach --}}
          </tbody>  
        </table>
        {{-- //deatil --}}
  
        </div>
      
      </div>
      <div class="m-3">
        {{-- {{ $listOrders->links('pagination::bootstrap-5') }} --}}
      </div>

</div>
<div class="container">
    <div class="card ">
    <div class="card-header card-header-content-between">
        <div class="card-header-title">
            <h4 class="card-title">Detail</h4>
        </div>
        <div class="card-body">
            <div class="item1">
                   {{-- //img --}}
                <div class=" d-flex">
                    <div class="flex-shrink-0">image</div>
                <div class="flex-grow-1 ms-3">
                    <div class="row">
                        {{-- //name  --}}
                        <div class="col-md-6 mb-3 mb-md-0">Name product</div>
                        {{-- price  --}}
                        <div class="col col-sm-3 align-self-center">Price</div>
                        {{-- quantity  --}}
                        <div class="col col-sm-3 align-self-center text-end">Quantity</div>
                       
                    </div>
            </div>
           
         </div>
         
            
                
            </div>
        </div>
        
        
    </div>
    </div>

</div>
</div>
<
  @endsection
            
      
           
        







