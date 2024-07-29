    <!--product details start-->
    <div class="product_details mt-100 mb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-tab">
                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img id="zoom1" src="{{ $product->poster }}"
                                    data-zoom-image="{{ $product->poster }}" alt="big-1">
                            </a>
                        </div>
                        <div class="single-zoom-thumb">
                            <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product_d_right">
                        <form action="#">

                            <h1>{{ $product->title }}</h1>
                            <div class=" product_ratting">
                                <ul>
                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                    <li class="review"><a href="#"> (customer review ) </a></li>
                                </ul>

                            </div>
                            <div class="price_box">
                                <span class="current_price">£{{ $product->price }}</span>
                                <span class="old_price">£{{ $product->discount }}</span>
                            </div>
                            <div class="product_variant color">
                                <label>Màu sắc</label>
                                <ul>
                                    <li class="color1"><a href="#"></a></li>
                                    <li class="color2"><a href="#"></a></li>
                                    <li class="color3"><a href="#"></a></li>
                                    <li class="color4"><a href="#"></a></li>
                                </ul>
                            </div>
                            <div class="product_variant quantity">
                                <label>Số lượng</label>
                                <input min="1" value="1" type="number">
                                <button class="button" type="submit">Thêm vào giỏ hàng</button>
                            </div>
                            <div class="product_meta">
                                <span>Danh mục: <a href="#">Lọ mini</a></span>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product details end-->