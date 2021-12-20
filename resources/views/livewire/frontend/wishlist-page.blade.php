<div id="page-content">
    <!--Page Title-->
    <div class="page section-header text-center">
        <div class="page-title">
            <div class="wrapper"><h1 class="page-width">Wish List</h1></div>
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
                @if (Cart::instance('wishlist')->content()->count() > 0)
                    <form action="#">
                        <div class="wishlist-table table-content table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="product-name text-center alt-font">Remove</th>
                                        <th class="product-price text-center alt-font">Images</th>
                                        <th class="product-name alt-font">Product Name</th>
                                        <th class="product-price text-center alt-font">Unit Price</th>
                                        <th class="stock-status text-center alt-font">Stock Status</th>
                                        <th class="product-subtotal text-center alt-font">Add to Cart</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (Cart::instance('wishlist')->content() as $key)
                                    <tr>
                                        <td class="product-remove text-center" valign="middle">
                                            <a href="#" wire:click.prevent="removeFromWishlist({{ $key->id }})" title="Remove from Wishlist"><i class="icon icon anm anm-times-l"></i></a>
                                        </td>
                                        <td class="product-thumbnail text-center">
                                            <a href="{{ route('products.details', $key->model->slug) }}"><img src="{{ asset('assets/images/product-images/' . $key->model->image) }}" alt="{{ $key->model->title }}" title="{{ $key->model->title }}" /></a>
                                        </td>
                                        <td class="product-name text-capitalize">
                                            <h4 class="no-margin"><a href="{{ route('products.details', $key->model->slug) }}">{{ $key->model->title }}</a></h4>
                                        </td>
                                        <td class="product-price text-center">
                                            <span class="amount">${{ $key->model->regular_price }}</span>
                                        </td>
                                        <td class="stock text-center text-capitalize">
                                            <span class="{{ $key->model->stock_status === 'instock' ? 'in-stock' : 'text-danger'}}">{{ $key->model->stock_status }}</span>
                                        </td>
                                        <td class="product-subtotal text-center">
                                            {{-- <button type="button" class="btn btn-small">Add To Cart</button> --}}
                                            <a href="#" class="btn btn-small" wire:click.prevent="moveFromWishlistToCart('{{ $key->rowId }}')">Move to Cart</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="3" class="text-left"><a href="{{ route('products.index') }}" class="btn--link cart-continue"><i class="icon icon-arrow-circle-left"></i> Continue shopping</a></td>
                                        <td colspan="2" class="text-right"><button type="button" name="update" class="btn--link cart-update"><i class="fa fa-refresh"></i> Update</button></td>
                                        <td colspan="1" class="text-right"><a href="#" class="btn--link cart-update mr-2" wire:click.prevent="removeAll()"><i class="fa fa-trash-o"></i> Remove All</a></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </form>
                @else
                    <div class="jumbotron justify-content-between d-flex">
                        <div class="">
                            <h1 class="display-4 text-info">Sorry...!!</h1>
                            <p class="lead">You have no Products in your Wishlist.</p>
                            <hr class="my-4">
                            <p>you can buy our awesome product.</p>
                            <a class="btn btn-primary btn-lg" href="{{ route('products.index') }}" role="button">Click here</a>
                        </div>
                        <img src="{{ asset('assets/images/wishlist.png')}}" alt="Cart logo">
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
