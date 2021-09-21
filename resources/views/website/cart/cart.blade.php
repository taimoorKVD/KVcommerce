<x-web-head></x-web-head>

<body>

<x-web-cart-basket></x-web-cart-basket>

<div class="content-wrapper">

    <x-web-page-header></x-web-page-header>

    <div class="container-fluid">
        <div class="row bg-border-color medium-padding120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cart">
                            <h1 class="cart-title">In Your Shopping Cart: <span class="c-primary"> {{ Cart::content()->count() }} Items</span>
                            </h1>
                        </div>
                        <form action="#" method="post" class="cart-main">
                            <table class="shop_table cart">
                                <thead class="cart-product-wrap-title-main">
                                <tr>
                                    <th class="product-remove">&nbsp;</th>
                                    <th class="product-thumbnail">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach(Cart::content() as $cart_product)
                                    <tr class="cart_item">
                                        <td class="product-remove">
                                            <a href="{{ route('website.cart.delete', $cart_product->rowId) }}"
                                               class="product-del remove" title="Remove this item">
                                                <i class="seoicon-delete-bold"></i>
                                            </a>
                                        </td>
                                        <td class="product-thumbnail">
                                            <div class="cart-product__item">
                                                <a href="#">
                                                    <img
                                                        src="{{ asset("storage/product/".$cart_product->model->image) }}"
                                                        alt="product"
                                                        class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                                        width="200px">
                                                </a>
                                                <div class="cart-product-content">
                                                    <p class="cart-author">Callum Bailey</p>
                                                    <h5 class="cart-product-title">{{  Str::limit($cart_product->name, 15) }}</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="product-price">
                                            <h5 class="price amount">${{ number_format($cart_product->price) }}</h5>
                                        </td>
                                        <td class="product-quantity">
                                            <div class="quantity">
                                                <a href="{{ route('website.cart.decr', [ 'id' => $cart_product->rowId, 'qty' => $cart_product->qty ]) }}"
                                                   class="quantity-minus">-</a>
                                                <input title="Qty" class="email input-text qty text" type="text"
                                                       placeholder="1" readonly value="{{ $cart_product->qty }}">
                                                <a href="{{ route('website.cart.incr', [ 'id' => $cart_product->rowId, 'qty' => $cart_product->qty ]) }}"
                                                   class="quantity-plus">+</a>
                                            </div>
                                        </td>
                                        <td class="product-subtotal">
                                            <h5 class="total amount">${{ number_format($cart_product->total()) }}</h5>
                                        </td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td colspan="5" class="actions">
                                        <div class="coupon">
                                            <input name="coupon_code" class="email input-standard-grey" value=""
                                                   placeholder="Coupon code" type="text">
                                            <div class="btn btn-medium btn--breez btn-hover-shadow">
                                                <span class="text">Apply Coupon</span>
                                                <span class="semicircle--right"></span>
                                            </div>
                                        </div>
                                        <div class="btn btn-medium btn--dark btn-hover-shadow">
                                            <span class="text">Apply Coupon</span>
                                            <span class="semicircle"></span>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </form>
                        <div class="cart-total">
                            <h3 class="cart-total-title">Cart Totals</h3>
                            <h5 class="cart-total-total">Total: <span class="price">${{ number_format(Cart::total()) }}</span></h5>
                            <a href="{{ route('website.checkout.index') }}" class="btn btn-medium btn--light-green btn-hover-shadow">
                                <span class="text">Checkout</span>
                                <span class="semicircle"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<x-web-footer></x-web-footer>
<script>
    @if(Session::has('info'))
        toastr.info('{{ Session::get('info') }}');
    @endif
</script>
