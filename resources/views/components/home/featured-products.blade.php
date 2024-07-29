    <!--product area start -->
    <div class="product_area product_style2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title pt-5">
                        <h2>Sản phẩm nổi bật</h2>
                    </div>
                </div>
            </div>
            <div class="product_style2_ocntainer">
                <div class="row">
                    @foreach ($listProducts as $product)
                        <div class="col-lg-3">
                            <div class="product_items mb-5">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{-- route('product.show', $product->id) --}}">
                                                <img src="{{ $product->image_url }}" alt="">
                                            </a>
                                            <div class="label_product">
                                                <span class="label_sale">-7%</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i
                                                                class="icon-shopping-bag"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i
                                                                class="icon-sliders"></i></a></li>
                                                    <li class="wishlist"><a href="wishlist.html"
                                                            title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modal_box" title="quick view"> <i
                                                                class="icon-eye"></i></a></li>
                                                </ul>
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
                                                <a href="product-details.html">{{ $product->name }}</a>
                                            </h4>
                                            <span class="price_box current_price">${{ $product->price }}</span>
                                            
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!--product area end-->