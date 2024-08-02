@extends('admin.layouts.app')
@extends('admin.layouts.home')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit User</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Edit User</li>
    </ol>
    <div class=" mb-4">
        <form action="{{ route('admin.users.updateUser',$user->user_id) }}" method="POST">
            @method('put')
            @csrf
            {{-- @if(session('message'))
                        <p class="text-danger">{{ session('message') }}</p>
                        @endif --}}
            <div class="form-group mb-3">
              <label for="">Name:</label>
              <input value="{{ $user->name }}" name="name" type="text" class="form-control" id="" aria-describedby="" >
              @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="form-group mb-3">
              <label for="">Email</label>
              <input value="{{ $user->email }}" name="email" type="email" class="form-control" id="" placeholder="">
              @error('email')
              <div class="text-danger">{{ $message }}</div>
          @enderror
              <div class="form-group mb-3">
                <label for="">Password</label>
                <input {{ $user->password }} name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="" required>
                @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror
              </div>  
              <div class="form-group mb-3">
                <label for="">Confirm Password</label>
                <input class="form-control"  id="password_confirmation" type="password" name="password_confirmation" required >
              </div> 
              <div class="form-group mb-3">
                <label for="role">Role</label>
                <select class="form-control" id="role" name="role" >
                    <option value="client" {{ $user->role == 'client' ? 'selected' : '' }}>Client</option>
                    <option value="admin"{{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                </select> @error('role')
                <div class="text-danger">{{ $message }}</div>
            @enderror
              </div> 
              
           
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>

</div>
@endsection