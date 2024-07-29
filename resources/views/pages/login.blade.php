@extends('layouts.app')
@section('content')
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="customer_login">
    <div class="container">
        <div class="row">
            <!--login area start-->
            <div class="col-lg-6 col-md-6">
                <div class="account_form">
                    <h2>login</h2>
                    
                    <form action="{{ route('client.Login') }}" method="POST">
                        @csrf
                        @method('post')
                        @if(session('message'))
                        <p class="text-danger">{{ session('message') }}</p>
                        @endif
                        <p>
                            <label> Email <span class="text-danger">*</span></label>
                            <input value="{{ old('email') }}" name="email" type="email">
                            
                        </p>
                        <p>
                            <label>Passwords <span class="text-danger">*</span></label>
                            <input value="{{ old('password') }}" name="password" type="password">
                            
                        </p>
                        <div class="login_submit">
                            <a href="#">Lost your password?</a>
                            <label for="remember">
                                <input name="remember" id="remember" type="checkbox">
                                Remember me
                            </label>
                            <button type="submit">login</button>

                        </div>

                    </form>
                </div>
            </div>
            <!--login area start-->

            <!--register area start-->
            <div class="col-lg-6 col-md-6">
                <div class="account_form register">
                    <h2>Register</h2>
                    <form action="{{ route('client.Signup') }}" method="POST">
                        @method('POST')
                        @csrf
                        <p>
                            <label>Name <span class="text-danger">*</span></label>
                            <input  value="{{ old('name') }}" name="name" type="text">
                            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
                        </p>
                        <p>
                            <label>Email address <span class="text-danger">*</span></label>
                            <input  value="{{ old('email') }}" name="email" type="email">
                            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
                        </p>
                        <p>
                            <label>Passwords <span class="text-danger">*</span></label>
                            <input  value="{{ old('password') }}" name="password" type="password">
                            @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror
                        </p>
                        <div class="login_submit">
                            <button type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
            <!--register area end-->
        </div>
    </div>
</div>
@endsection
