@extends('admin.layouts.app')
@extends('admin.layouts.home')
@section('content')
  <div class="container-fluid px-4">
    <h1 class="mt-4">List User</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">List User</li>
    </ol>
  @if(session('message')) 
  <div class="alert alert-success" role="alert">
    {{ session('message') }}
  </div>
  @endif
    <a href="{{ route('admin.users.addUser') }}" class="btn btn-primary mb-4">Thêm mới </a>
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
              <th>Email</th>
              <th>Role</th>
              {{-- <th>Hình ảnh</th>
              <th>Mô tả</th>
              <th>Lượt xem</th>
              <th>Số lượng trong kho</th> --}}
              <th>Hành động</th>
            </tr>
          </thead>
          <tbody>
            @foreach($listUsers as $key => $value)
            <tr>
              <td>{{ $key+1 }}</td>
              <td>{{ $value->name }}</td>
              <td>{{ $value->email }}</td>
              <td>{{ $value->role }}</td>
              {{-- <td>{{ $value-> }}</td>
              <td>{{ $value->quantity }}</td> --}}
              
              <td>
                <a href="{{ route('admin.users.editUser',$value->user_id) }}" class="btn btn-warning">Sửa</a>
                <form class="mt-2" action="{{ route('admin.users.deleteUser',$value->user_id) }}" method="post">
                  @method('DELETE')
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
        {{ $listUsers->links('pagination::bootstrap-5') }}
      </div>

</div>

</div>
  @endsection
            
      
           
        







