
<div class="products">
    <div class="row">
        @foreach($products as $row)
        <div class="col-6 col-md-4 col-lg-4 col-xl-3">
            <div class="product">
                <figure class="product-media">
                    <span class="product-label label-new">New</span>
                    <a href="/single-product/{{$row->id}}">
                        <img src="{{asset('storage/' . $row->image)}}" alt="Product image" class="product-image">
                    </a>

                    <div class="product-action-vertical">
                        <a href="#"
                           class="btn-product-icon btn-wishlist btn-expandable"><span>Add to wishlist</span></a>
                    </div><!-- End .product-action -->

                    <div class="product-action action-icon-top">
                        <a onclick="AddCart({{$row->id}})" href="javascript:" class="btn-product btn-cart"><span>Add to cart</span></a>
                        <a href="#" class="btn-product btn-quickview" title="Quick view"><span>Xem nhanh</span></a>
                    </div><!-- End .product-action -->
                </figure><!-- End .product-media -->

                <div class="product-body">
                    <div class="product-cat">
                        <a href="#">@if($row->category_id == 1) {{'Sức khỏe'}}
                            @elseif($row->category_id == 2) {{'Xinh đẹp'}}
                            @else{{'Sành điệu'}}
                            @endif</a>
                    </div><!-- End .product-cat -->
                    <h3 class="product-title"><a href="#">{{$row->name}}</a></h3>
                    <!-- End .product-title -->
                    <div class="product-price" >
                        {{number_format($row->price)}} VNĐ
                    </div><!-- End .product-price -->
                    <div class="ratings-container">
                        <div class="ratings">
                            <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                        </div><!-- End .ratings -->
                        <span class="ratings-text">( 0 Reviews )</span>
                    </div><!-- End .rating-container -->

                    <div class="product-nav product-nav-dots">
                        <a href="#" style="background: #cc9966;"><span class="sr-only">Color name</span></a>
                        <a href="#" class="active" style="background: #ebebeb;"><span class="sr-only">Color name</span></a>
                    </div><!-- End .product-nav -->
                </div><!-- End .product-body -->

            </div><!-- End .product -->
        </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->
        @endforeach
    </div><!-- End .row -->
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">
            {{$products->links()}}
        </ul>
    </nav>

    </div><!-- End .load-more-container -->
</div><!-- End .products -->

