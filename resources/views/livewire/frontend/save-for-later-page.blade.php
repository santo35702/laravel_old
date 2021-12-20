<div id="page-content">
    <!--Page Title-->
    <div class="page section-header text-center">
        <div class="page-title">
            <div class="wrapper"><h1 class="page-width">{{ Cart::instance('saveForLater')->count() }} item's Save for Later</h1></div>
        </div>
    </div>
    <!--End Page Title-->

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                @if (session('status'))
                    <div class="alert alert-success text-uppercase" role="alert">
                        <i class="icon anm anm-truck-l icon-large"></i> &nbsp;<strong>Congratulations!</strong> {{ session('status') }}
                    </div>
                @endif
                @if (Cart::instance('saveForLater')->count() > 0)
                    <table class="table table-hover table-bordered border-outline cart">
                        <thead class="cart__row cart__header thead-light">
                            <tr>
                                <th colspan="2" class="text-center">Product</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Quantity</th>
                                <th class="text-right">Total</th>
                                <th class="action">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (Cart::instance('saveForLater')->content() as $key)
                            <tr class="cart__row border-bottom line1 cart-flex border-top">
                                <td class="cart__image-wrapper cart-flex-item align-middle">
                                    <a href="{{ route('products.details', $key->model->slug) }}"><img class="cart__image" src="{{ asset('assets/images/product-images/' . $key->model->image) }}" alt="{{ $key->model->title }}"></a>
                                </td>
                                <td class="cart__meta small--text-left cart-flex-item align-middle">
                                    <div class="list-view-item__title text-capitalize">
                                        <a href="{{ route('products.details', $key->model->slug) }}">{{ $key->model->title }}</a>
                                    </div>

                                    <div class="cart__meta-text">
                                        Color: Navy<br>Size: Small<br>
                                    </div>
                                </td>
                                <td class="cart__price-wrapper cart-flex-item align-middle">
                                    <span class="money">${{ $key->model->regular_price }}</span>
                                </td>
                                <td class="cart__update-wrapper cart-flex-item text-right align-middle">
                                    <div class="cart__qty text-center">
                                        <div class="qtyField">
                                            <a class="qtyBtn minus" href="javascript:void(0);"><i class="icon icon-minus"></i></a>
                                            <input class="cart__qty-input qty" type="text" name="updates[]" id="qty" value="1" pattern="[0-9]*">
                                            <a class="qtyBtn plus" href="javascript:void(0);"><i class="icon icon-plus"></i></a>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-right small--hide cart-price align-middle">
                                    <div><span class="money">${{ $key->subtotal }}</span></div>
                                </td>
                                <td class="text-center small--hide align-middle">
                                    <a href="#" class="btn btn--secondary cart__remove" title="Remove tem" wire:click.prevent="destroy('{{ $key->rowId }}')">
                                        <i class="icon icon anm anm-times-l"></i>
                                    </a>
                                    <a href="#" class="btn btn--secondary cart__remove" title="Add to Cart" wire:click.prevent="saveForLaterToCart('{{ $key->rowId }}')">
                                        <i class="icon fa fa-cart-plus"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3" class="text-left"><a href="#" class="btn btn-secondary btn--small cart-continue">Continue shopping</a></td>
                                <td colspan="3" class="text-right">
                                    <button type="submit" name="clear" class="btn btn-secondary btn--small  small--hide">Clear Cart</button>
                                    <button type="submit" name="update" class="btn btn-secondary btn--small cart-continue ml-2">Update Cart</button>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                @else
                    <div class="jumbotron-fluid justify-content-between d-flex">
                        <div class="jumbotron">
                            <h1 class="display-4 text-info">Sorry...!!</h1>
                            <p class="lead">You have no Products in Save for Later Page.</p>
                            <hr class="my-4">
                            <p>you can add our awesome product.</p>
                            <a class="btn btn-primary btn-lg" href="{{ route('products.index') }}" role="button">Click here</a>
                        </div>
                        <img src="{{ asset('assets/images/save-for-later.jpg')}}" alt="Cart logo" class="w-100 mh-100">
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
