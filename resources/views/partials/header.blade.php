    <!--offcanvas menu area end-->
    <header>
        {{-- @if(session('Logout'))
                                    <div class="alert alert-success">{{ session('Logout') }}</div>
                                    @endif --}}
        <div class="main_header header_transparent sticky-header">
            <div class="header_container">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <!--main menu start-->
                            <div class="main_menu menu_two menu_position">
                                <nav>
                                    <ul>
                                        <li>
                                            <a class="active" href="{{ route('client.index') }}">Trang chủ</a>
                                        </li>
                                        <li>
                                            <a class="" href="{{-- route('product.index') --}}">Sản phẩm</a>
                                        </li>
                                        {{-- <li class="mega_items"><a href="{{ route('shop') }}">shop<i
                                                    class="fa fa-angle-down"></i></a>
                                            <div class="mega_menu">
                                                <ul class="mega_menu_inner">
                                                    <li><a href="#">Shop Layouts</a>
                                                        <ul>
                                                            <li><a href="shop-fullwidth.html">Full Width</a></li>
                                                            <li><a href="shop-fullwidth-list.html">Full Width list</a>
                                                            </li>
                                                            <li><a href="shop-right-sidebar.html">Right Sidebar </a>
                                                            </li>
                                                            <li><a href="shop-right-sidebar-list.html"> Right Sidebar
                                                                    list</a></li>
                                                            <li><a href="shop-list.html">List View</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">other Pages</a>
                                                        <ul>
                                                            <li><a href="cart.html">cart</a></li>
                                                            <li><a href="wishlist.html">Wishlist</a></li>
                                                            <li><a href="checkout.html">Checkout</a></li>
                                                            <li><a href="my-account.html">my account</a></li>
                                                            <li><a href="404.html">Error 404</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Product Types</a>
                                                        <ul>
                                                            <li><a href="product-details.html">product details</a></li>
                                                            <li><a href="product-sidebar.html">product sidebar</a></li>
                                                            <li><a href="product-grouped.html">product grouped</a></li>
                                                            <li><a href="variable-product.html">product variable</a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="blog.html">blog<i class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu pages">
                                                <li><a href="blog-details.html">blog details</a></li>
                                                <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                                <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">pages <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu pages">
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="services.html">services</a></li>
                                                <li><a href="faq.html">Frequently Questions</a></li>
                                                <li><a href="contact.html">contact</a></li>
                                                <li><a href="login.html">login</a></li>
                                                <li><a href="404.html">Error 404</a></li>
                                            </ul>
                                        </li>--}}
                                        <li><a href="contact.html"> Về chúng tôi</a></li> 

                                        <li><a href="contact.html">Tin tức</a></li> 

                                        <li><a href="contact.html">Liên hệ</a></li> 
                                    </ul>
                                </nav>
                            </div>
                            <!--main menu end-->
                        </div>
                        <div class="col-lg-3 col-md-3 col-4">
                            <div class="logo">
                                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-5 col-6">
                            <div class="header_right_info header_right_two">
                                <div class="search_container">
                                    <form action="{{-- route("product.search") --}}" method="GET">
                                        @csrf
                                        <div class="search_box">
                                            <input 
                                                placeholder="Tìm kiếm sản phẩm..." 
                                                type="text" 
                                                name="search"
                                            >
                                            <button type="submit"><i class="icon-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="header_account_area">
                                    <div class="header_account-list top_links text-center">
                                        <a href="#"><i class="icon-users"></i></a> <br>
                                         @if(Auth::check())
                                         <p >Welcome, {{ Auth::user()->name }}!</p>
                                         @endif
{{--                                 
                                         @endif
                                        <p >Welcome, {{ Auth::user()->name }}!</p> --}}
                                        {{-- @if(session('user')->name)
                                        <p>Welcome, {{ session('user')->name }}!</p>
                                        @endif --}}
                                        <ul class="dropdown_links">
                                            <li><a href="{{ route('client.getLogin') }}">Log in</a></li>
                                            <li><a href="{{ route('client.getSignup') }}">Sign up</a></li>
                                            <li><a href="{{ route('client.Logout') }}">Log out</a></li>
                                            <li><a href="wishlist.html">Forgot password</a></li>
                                        </ul>
                                    </div>
                                    <div class="header_account-list header_wishlist">
                                        <a href="wishlist.html"><i class="icon-heart"></i></a>
                                    </div>
                                    <div class="header_account-list  mini_cart_wrapper">
                                        <a href="javascript:void(0)"><i class="icon-shopping-bag"></i><span
                                                class="item_count">2</span></a>
                                        <!--mini cart-->
                                        <div class="mini_cart">
                                            <div class="cart_gallery">
                                                <div class="cart_item">
                                                    <div class="cart_img">
                                                        <a href="#"><img src="assets/img/s-product/product.jpg"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="cart_info">
                                                        <a href="#">Primis In Faucibus</a>
                                                        <p>1 x <span> $65.00 </span></p>
                                                    </div>
                                                    <div class="cart_remove">
                                                        <a href="#"><i class="icon-x"></i></a>
                                                    </div>
                                                </div>
                                                <div class="cart_item">
                                                    <div class="cart_img">
                                                        <a href="#"><img src="assets/img/s-product/product2.jpg"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="cart_info">
                                                        <a href="#">Letraset Sheets</a>
                                                        <p>1 x <span> $60.00 </span></p>
                                                    </div>
                                                    <div class="cart_remove">
                                                        <a href="#"><i class="icon-x"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mini_cart_table">
                                                <div class="cart_table_border">
                                                    <div class="cart_total">
                                                        <span>Sub total:</span>
                                                        <span class="price">$125.00</span>
                                                    </div>
                                                    <div class="cart_total mt-10">
                                                        <span>total:</span>
                                                        <span class="price">$125.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mini_cart_footer">
                                                <div class="cart_button">
                                                    <a href="cart.html"><i class="fa fa-shopping-cart"></i> View
                                                        cart</a>
                                                </div>
                                                <div class="cart_button">
                                                    <a href="checkout.html"><i class="fa fa-sign-in"></i> Checkout</a>
                                                </div>

                                            </div>
                                        </div>
                                        <!--mini cart end-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--header area end-->