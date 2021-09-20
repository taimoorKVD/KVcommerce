<x-web-head></x-web-head>

<body class=" ">

<header class="header" id="site-header">

    <div class="container">

        <div class="header-content-wrapper">

            <ul class="nav-add">
                <li class="cart">

                    <a href="#" class="js-cart-animate">
                        <i class="seoicon-basket"></i>
                        <span class="cart-count">0</span>
                    </a>

                    <div class="cart-popup-wrap">
                        <div class="popup-cart">
                            <h4 class="title-cart">No products in the cart!</h4>
                            <p class="subtitle">Please make your choice.</p>
                            <div class="btn btn-small btn--dark">
                                <span class="text">view all catalog</span>
                            </div>
                        </div>
                    </div>

                </li>
            </ul>
        </div>

    </div>

</header>


<div class="content-wrapper">

    <div class="container">
        <div class="row pt120">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="heading align-center mb60">
                    <h4 class="h1 heading-title">{{ config('app.name') }}</h4>
                    <p class="heading-text">Buy books, and we ship to you.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- End Books products grid -->

    <div class="container">
        <div class="row pt120">
            <div class="books-grid">

                <div class="row mb30">
                    @if($products->count() > 0)
                        @foreach($products as $product)
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb30">
                                <div class="books-item">
                                    <div class="books-item-thumb">
                                        <img src="{{ asset('storage/product/'. $product->image) }}" alt="book">
                                        {{--<div class="new">New</div>
                                        <div class="sale">Sale</div>
                                        <div class="overlay overlay-books"></div>--}}
                                    </div>

                                    <div class="books-item-info">
                                        <h5 class="books-title">{{ $product->name }}</h5>

                                        <div class="books-price">${{$product->price}}</div>
                                    </div>

                                    <a href="{{ route('products.show', $product) }}" class="btn btn-small btn--dark add">
                                        <span class="text">Add to Cart</span>
                                        <i class="seoicon-commerce"></i>
                                    </a>

                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>

                <div class="row pb120">
                    <div class="col-lg-12">{{ $products->links('pagination::default') }}</div>
                </div>
            </div>
        </div>
    </div>
</div>

<x-web-footer></x-web-footer>
