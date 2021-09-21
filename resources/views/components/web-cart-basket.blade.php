<header class="header" id="site-header">
    <div class="container">
        <div class="header-content-wrapper">
            <ul class="nav-add">
                <li class="cart">
                    <a href="#" class="js-cart-animate">
                        <i class="seoicon-basket"></i>
                        <span class="cart-count">{{ Cart::content()->count() }}</span>
                    </a>
                    <div class="cart-popup-wrap">
                        <div class="popup-cart">
                            <h4 class="title-cart align-center">Total</h4>
                            <h4 class="title-cart align-center">${{ number_format(Cart::total()) }}</h4>
                            <br>
                            <a href="{{ route('website.cart.index') }}">
                            <div class="btn btn-small btn--dark">
                                    <span class="text">view cart</span>
                            </div>
                            </a>
                        </div>
                    </div>

                </li>
            </ul>
        </div>
    </div>
</header>
