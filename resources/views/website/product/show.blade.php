<x-web-head></x-web-head>

<body>

<x-web-cart-basket></x-web-cart-basket>

<x-web-page-header></x-web-page-header>

<div class="content-wrapper">
    <div class="container">
        <div class="row medium-padding120">
            <div class="product-details">
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                    <div class="product-details-thumb">
                        <div class="swiper-container" data-effect="fade">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="product-details-img-wrap swiper-slide">
                                    <img src="{{ asset('storage/product/'. $product->image) }}" alt="product"
                                         data-swiper-parallax="-10">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-12 col-xs-offset-0">
                    <div class="product-details-info">
                        <div class="product-details-info-price">${{ number_format($product->price) }}</div>
                        <h3 class="product-details-info-title">{{ $product->name }}</h3>
                        <p class="product-details-info-text">{{ $product->description }}</p>
                        <form method="post" action="{{ route('website.cart.store') }}">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <div class="quantity">
                                <a href="#" class="quantity-minus quantity-minus-d">-</a>
                                <input title="Qty" class="email input-text qty text" type="text" name="qty" value="1">
                                <a href="#" class="quantity-plus quantity-plus-d">+</a>
                            </div>
                            <button type="submit" class="btn btn-medium btn--primary">
                                <span class="text">Add to Cart</span>
                                <i class="seoicon-commerce"></i>
                                <span class="semicircle"></span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<x-web-footer></x-web-footer>