<div class="mb-3"></div><!-- End .mb-6 -->

<div class="container">
    <ul class="nav nav-pills nav-border-anim nav-big justify-content-center mb-3" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="products-featured-link" data-toggle="tab" href="#products-featured-tab"
               role="tab" aria-controls="products-featured-tab" aria-selected="true">New Products</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="products-sale-link" data-toggle="tab" href="#products-sale-tab" role="tab"
               aria-controls="products-sale-tab" aria-selected="false">On Sale</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="products-top-link" data-toggle="tab" href="#products-top-tab" role="tab"
               aria-controls="products-top-tab" aria-selected="false">Best sale</a>
        </li>
    </ul>
</div><!-- End .container -->

<div class="container-fluid">
    <div class="tab-content tab-content-carousel">
        <div class="tab-pane p-0 fade show active" id="products-featured-tab" role="tabpanel"
             aria-labelledby="products-featured-link">
            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                 data-owl-options='{
                                "nav": false,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    },
                                    "1600": {
                                        "items":6,
                                        "nav": true
                                    }
                                }
                            }'>
                @foreach($products as $row)
                    <div class="product product-11 text-center">
                        <figure class="product-media">
                            <a href="/single-product/{{$row->id}}">
                                <img src="{{asset('storage/' . $row->image)}}" alt="Product image"
                                     class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                            </div><!-- End .product-action-vertical -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <h3 class="product-title"><a href="#">{{$row->name}}</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                {{number_format($row->price)}} VNĐ
                            </div><!-- End .product-price -->
                        </div><!-- End .product-body -->
                        <div class="product-action">
                            <a onclick="AddCart({{$row->id}})" href="javascript:" class="btn-product btn-cart"><span>Add to cart</span></a>
                        </div><!-- End .product-action -->
                    </div><!-- End .product -->
                @endforeach

            </div><!-- End .owl-carousel -->
        </div><!-- .End .tab-pane -->
        <div class="tab-pane p-0 fade" id="products-sale-tab" role="tabpanel" aria-labelledby="products-sale-link">
            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                 data-owl-options='{
                                "nav": false,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    },
                                    "1600": {
                                        "items":6,
                                        "nav": true
                                    }
                                }
                            }'>
                <div class="product product-11 text-center">
                    <figure class="product-media">
                        <a href="#">
                            <img src="{{asset('layouts/images/demos/demo-2/products/product-5-1.jpg')}}"
                                 alt="Product image" class="product-image">
                            <img src="{{asset('layouts/images/demos/demo-2/products/product-5-2.jpg')}}"
                                 alt="Product image" class="product-image-hover">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                        </div><!-- End .product-action-vertical -->

                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <h3 class="product-title"><a href="#">Petite Table Lamp</a></h3><!-- End .product-title -->
                        <div class="product-price">
                            $675,00
                        </div><!-- End .product-price -->

                        <div class="product-nav product-nav-dots">
                            <a href="#" class="active" style="background: #74543e;"><span
                                    class="sr-only">Color name</span></a>
                            <a href="#" style="background: #e8e8e8;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                    </div><!-- End .product-body -->
                    <div class="product-action">
                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                    </div><!-- End .product-action -->
                </div><!-- End .product -->

                <div class="product product-11 text-center">
                    <figure class="product-media">
                        <a href="#">
                            <img src="{{asset('layouts/images/demos/demo-2/products/product-6-1.jpg')}}"
                                 alt="Product image" class="product-image">
                            <img src="{{asset('layouts/images/demos/demo-2/products/product-6-2.jpg')}}"
                                 alt="Product image" class="product-image-hover">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                        </div><!-- End .product-action-vertical -->

                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <h3 class="product-title"><a href="#">Elephant Armchair</a></h3><!-- End .product-title -->
                        <div class="product-price">
                            $457,00
                        </div><!-- End .product-price -->
                    </div><!-- End .product-body -->
                    <div class="product-action">
                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                    </div><!-- End .product-action -->
                </div><!-- End .product -->

                <div class="product product-11 text-center">
                    <figure class="product-media">
                        <a href="#">
                            <img src="{{asset('layouts/images/demos/demo-2/products/product-1-1.jpg')}}"
                                 alt="Product image" class="product-image">
                            <img src="{{asset('layouts/images/demos/demo-2/products/product-1-2.jpg')}}"
                                 alt="Product image" class="product-image-hover">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                        </div><!-- End .product-action-vertical -->

                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <h3 class="product-title"><a href="#">Butler Stool Ladder</a></h3><!-- End .product-title -->
                        <div class="product-price">
                            $251,00
                        </div><!-- End .product-price -->
                    </div><!-- End .product-body -->
                    <div class="product-action">
                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                    </div><!-- End .product-action -->
                </div><!-- End .product -->
            </div><!-- End .owl-carousel -->
        </div><!-- .End .tab-pane -->
        <div class="tab-pane p-0 fade" id="products-top-tab" role="tabpanel" aria-labelledby="products-top-link">
            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                 data-owl-options='{
                                "nav": false,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    },
                                    "1600": {
                                        "items":6,
                                        "nav": true
                                    }
                                }
                            }'>
                <div class="product product-11 text-center">
                    <figure class="product-media">
                        <a href="#">
                            <img src="{{asset('layouts/images/demos/demo-2/products/product-2-1.jpg')}}"
                                 alt="Product image" class="product-image">
                            <img src="{{asset('layouts/images/demos/demo-2/products/product-2-2.jpg')}}"
                                 alt="Product image" class="product-image-hover">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                        </div><!-- End .product-action-vertical -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <h3 class="product-title"><a href="#">Octo 4240</a></h3><!-- End .product-title -->
                        <div class="product-price">
                            $746,00
                        </div><!-- End .product-price -->

                        <div class="product-nav product-nav-dots">
                            <a href="#" class="active" style="background: #1f1e18;"><span
                                    class="sr-only">Color name</span></a>
                            <a href="#" style="background: #e8e8e8;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                    </div><!-- End .product-body -->
                    <div class="product-action">
                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                    </div><!-- End .product-action -->
                </div><!-- End .product -->

                <div class="product product-11 text-center">
                    <figure class="product-media">
                        <span class="product-label label-circle label-new">New</span>
                        <a href="#">
                            <img src="{{asset('layouts/images/demos/demo-2/products/product-3-1.jpg')}}"
                                 alt="Product image" class="product-image">
                            <img src="{{asset('layouts/images/demos/demo-2/products/product-3-2.jpg')}}"
                                 alt="Product image" class="product-image-hover">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                        </div><!-- End .product-action-vertical -->

                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <h3 class="product-title"><a href="#">Flow Slim Armchair</a></h3><!-- End .product-title -->
                        <div class="product-price">
                            $970,00
                        </div><!-- End .product-price -->
                    </div><!-- End .product-body -->
                    <div class="product-action">
                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                    </div><!-- End .product-action -->
                </div><!-- End .product -->

                <div class="product product-11 text-center">
                    <figure class="product-media">
                        <span class="product-label label-circle label-sale">Sale</span>
                        <a href="#">
                            <img src="{{asset('layouts/images/demos/demo-2/products/product-4-1.jpg')}}"
                                 alt="Product image" class="product-image">
                            <img src="{{asset('layouts/images/demos/demo-2/products/product-4-2.jpg')}}"
                                 alt="Product image" class="product-image-hover">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                        </div><!-- End .product-action-vertical -->

                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <h3 class="product-title"><a href="#">Roots Sofa Bed</a></h3><!-- End .product-title -->
                        <div class="product-price">
                            <span class="new-price">$337,00</span>
                            <span class="old-price">Was $449,00</span>
                        </div><!-- End .product-price -->

                        <div class="product-nav product-nav-dots">
                            <a href="#" class="active" style="background: #878883;"><span
                                    class="sr-only">Color name</span></a>
                            <a href="#" style="background: #dfd5c2;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                    </div><!-- End .product-body -->
                    <div class="product-action">
                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                    </div><!-- End .product-action -->
                </div><!-- End .product -->
            </div><!-- End .owl-carousel -->
        </div><!-- .End .tab-pane -->
    </div><!-- End .tab-content -->
</div><!-- End .container-fluid -->

<div class="mb-5"></div><!-- End .mb-5 -->
