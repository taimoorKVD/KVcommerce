<x-web-head></x-web-head>

<body>

<x-web-cart-basket></x-web-cart-basket>

<div class="content-wrapper">

    <x-web-page-header></x-web-page-header>

    <div class="container">
        <div class="row pt120">
            <div class="books-grid">
                <div class="row mb30">
                    @if($products->count() > 0)
                        @foreach($products as $product)
                            <div class="col-lg-4 mb30">
                                <div class="books-item">
                                    <div class="books-item-thumb">
                                        <img src="{{ asset('storage/product/'. $product->image) }}" alt="book">
                                    </div>
                                    <div class="books-item-info">
                                        <h5 class="books-title">{{ Str::limit($product->name, 15) }}</h5>
                                        <div class="books-price">${{ number_format($product->price) }}</div>
                                    </div>
                                    <a href="{{ route('website.products.show', $product) }}"
                                       class="btn btn-small btn--dark add">
                                        <span class="text">See more</span>
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
