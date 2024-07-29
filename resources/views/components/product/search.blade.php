    <!--product area start-->
    <div class="product_area product_style2 container mt-148">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title pt-5">
                        <h2>Tìm kiếm sản phẩm</h2>
                    </div>
                </div>
            </div>
            <div class="product_style2_ocntainer">
                <div class="row">
                    @if (isset($products) && $products->count() > 0)
                        @foreach ($products as $product)
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="{{ route('product.show', $product->id) }}">
                                                    <img src="{{ $product->poster }}" alt="">
                                                </a>
                                                <div class="label_product">
                                                    <span class="label_sale">-7%</span>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product_name">
                                                    <a href="product-details.html">{{ $product->title }}</a>
                                                </h4>
                                                <div class="price_box">
                                                    <span class="current_price">£ {{ $product->price }}</span>
                                                    <span class="old_price">£ {{ $product->discount }}</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h3 class="text-center my-5 text-danger">Không tìm thấy sản phẩm nào.</h3>
                    @endif
                </div>
            </div>
            <div class="mt-3">
                {{ $products->links() }}
            </div>
        </div>
    </div>
    <!--product area end-->