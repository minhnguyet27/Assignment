@extends('admin.layouts.app')
@section ('title')
Login
@endsection
<div class="bg-dark" id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Đăng nhập</h3></div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('admin.login') }}">
                                    @method('post') 
                                    @csrf
                                    @if(session('error'))
                                    <div class="alert alert-danger">{{ session('error') }}</div>
                                    @endif
                                    @if(session('logout'))
            <p class="text-sucssess">{{ session('logout') }}</p>
            @endif
                                   @if(session('message'))
            <p class="text-danger">{{ session('message') }}</p>
            @endif
                                    <div class="form-floating mb-3">
                                        <input name="email" class="form-control" id="inputEmail" type="text" placeholder="name@example.com" />
                                        <label for="inputEmail">Email:</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input name="password" class="form-control" id="inputPassword" type="password" placeholder="Password" />
                                        <label for="inputPassword">Password</label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input name="remember" class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                        <label class="form-check-label" for="inputRememberPassword">Remember me</label>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <a class="small" href="password.html">Forgot Password?</a>
                                        <input class="btn btn-success" type="submit" value="Đăng nhập">
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
                                {{-- <div class="small"><a href="#">Need an account? Sign up!</a></div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div id="layoutAuthentication_footer">
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2023</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>