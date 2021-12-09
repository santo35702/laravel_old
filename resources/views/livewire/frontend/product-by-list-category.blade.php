<div id="page-content">
    <!--Collection Banner-->
    <div class="collection-header">
        <div class="collection-hero">
            <div class="collection-hero__image"><img data-src="{{ asset('assets/images/cat-men.jpg') }}" src="{{ asset('assets/images/cat-men.jpg') }}" alt="Men" title="Men" /></div>
            <div class="collection-hero__title-wrapper"><h1 class="collection-hero__title page-width"><span class="text-warning">{{ $category->name }}</span>'s Products List</h1></div>
        </div>
    </div>
    <!--End Collection Banner-->

    <div class="container">
        <div class="row">
            <!--Sidebar-->
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar filterbar">
                <div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i></div>
                <div class="sidebar_tags">
                    <!--Categories-->
                    <div class="sidebar_widget categories filter-widget">
                        <div class="widget-title"><h2>Categories</h2></div>
                        <div class="widget-content">
                            <ul class="sidebar_categories text-capitalize">
                                @foreach (\App\Models\Category::orderBy('name', 'asc')->get() as $key)
                                    <li class="lvl-1"><a href="{{ route('products.list.by_category', $key->slug) }}" class="site-nav">{{ $key->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!--Categories-->
                    <!--Price Filter-->
                    <div class="sidebar_widget filterBox filter-widget">
                        <div class="widget-title">
                            <h2>Price</h2>
                        </div>
                        <form action="#" method="post" class="price-filter">
                            <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p class="no-margin"><input id="amount" type="text"></p>
                                </div>
                                <div class="col-6 text-right margin-25px-top">
                                    <button class="btn btn-secondary btn--small">filter</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--End Price Filter-->
                    <!--Size Swatches-->
                    <div class="sidebar_widget filterBox filter-widget size-swacthes">
                        <div class="widget-title"><h2>Size</h2></div>
                        <div class="filter-color swacth-list">
                            <ul>
                                <li><span class="swacth-btn checked">X</span></li>
                                <li><span class="swacth-btn">XL</span></li>
                                <li><span class="swacth-btn">XLL</span></li>
                                <li><span class="swacth-btn">M</span></li>
                                <li><span class="swacth-btn">L</span></li>
                                <li><span class="swacth-btn">S</span></li>
                                <li><span class="swacth-btn">XXXL</span></li>
                                <li><span class="swacth-btn">XXL</span></li>
                                <li><span class="swacth-btn">XS</span></span></li>
                            </ul>
                        </div>
                    </div>
                    <!--End Size Swatches-->
                    <!--Color Swatches-->
                    <div class="sidebar_widget filterBox filter-widget">
                        <div class="widget-title"><h2>Color</h2></div>
                        <div class="filter-color swacth-list clearfix">
                            <span class="swacth-btn black"></span>
                            <span class="swacth-btn white checked"></span>
                            <span class="swacth-btn red"></span>
                            <span class="swacth-btn blue"></span>
                            <span class="swacth-btn pink"></span>
                            <span class="swacth-btn gray"></span>
                            <span class="swacth-btn green"></span>
                            <span class="swacth-btn orange"></span>
                            <span class="swacth-btn yellow"></span>
                            <span class="swacth-btn blueviolet"></span>
                            <span class="swacth-btn brown"></span>
                            <span class="swacth-btn darkGoldenRod"></span>
                            <span class="swacth-btn darkGreen"></span>
                            <span class="swacth-btn darkRed"></span>
                            <span class="swacth-btn dimGrey"></span>
                            <span class="swacth-btn khaki"></span>
                        </div>
                    </div>
                    <!--End Color Swatches-->
                    <!--Brand-->
                    <div class="sidebar_widget filterBox filter-widget">
                        <div class="widget-title"><h2>Brands</h2></div>
                        <ul class="text-capitalize">
                            @foreach (\App\Models\Brand::orderBy('name', 'asc')->get() as $key)
                                <li class="lvl-1"><a href="{{ route('products.by_brands', $key->slug) }}" class="site-nav">{{ $key->name }}</a></li>
                            @endforeach
                            <li>
                              <input type="checkbox" value="monark" id="check6">
                              <label for="check6"><span><span></span></span>Monark</label>
                            </li>
                        </ul>
                    </div>
                    <!--End Brand-->
                    <!--Popular Products-->
                    <div class="sidebar_widget">
                        <div class="widget-title"><h2>Popular Products</h2></div>
                        <div class="widget-content">
                            <div class="list list-sidebar-products">
                                <div class="grid">
                                    @foreach ($popular_products as $key)
                                    <div class="grid__item">
                                        <div class="mini-list-item">
                                            <div class="mini-view_image">
                                                <a class="grid-view-item__link" href="{{ route('products.details', $key->slug) }}">
                                                    <img class="grid-view-item__image" src="{{ asset('assets/images/product-images/' . $key->image ) }}" alt="{{ $key->title }}" />
                                                </a>
                                            </div>
                                            <div class="details">
                                                <a class="grid-view-item__title text-capitalize" href="{{ route('products.details', $key->slug) }}">{{ $key->title }}</a>
                                                <div class="grid-view-item__meta">
                                                    <span class="product-price__price">
                                                        <span class="money">${{ $key->regular_price }}</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Popular Products-->
                    <!--Banner-->
                    <div class="sidebar_widget static-banner">
                        <img src="{{ asset('assets/images/side-banner-2.jpg') }}" alt="" />
                    </div>
                    <!--Banner-->
                    <!--Information-->
                    <div class="sidebar_widget">
                        <div class="widget-title"><h2>Information</h2></div>
                        <div class="widget-content"><p>Use this text to share information about your brand with your customers. Describe a product, share announcements, or welcome customers to your store.</p></div>
                    </div>
                    <!--end Information-->
                    <!--Product Tags-->
                    <div class="sidebar_widget">
                        <div class="widget-title">
                            <h2>Product Tags</h2>
                        </div>
                        <div class="widget-content">
                            <ul class="product-tags">
                                <li><a href="#" title="Show products matching tag $100 - $400">$100 - $400</a></li>
                                <li><a href="#" title="Show products matching tag $400 - $600">$400 - $600</a></li>
                                <li><a href="#" title="Show products matching tag $600 - $800">$600 - $800</a></li>
                                <li><a href="#" title="Show products matching tag Above $800">Above $800</a></li>
                                <li><a href="#" title="Show products matching tag Black">Black</a></li>
                                <li><a href="#" title="Show products matching tag Blue">Blue</a></li>
                                <li><a href="#" title="Show products matching tag Gray">Gray</a></li>
                                <li><a href="#" title="Show products matching tag Green">Green</a></li>
                                <li><a href="#" title="Show products matching tag Hot">Hot</a></li>
                                <li><a href="#" title="Show products matching tag jesse kamm">jesse kamm</a></li>
                                <li><a href="#" title="Show products matching tag L">L</a></li>
                                <li><a href="#" title="Show products matching tag Lirisla">Lirisla</a></li>
                                <li><a href="#" title="Show products matching tag M">M</a></li>
                                <li><a href="#" title="Show products matching tag Monark">Monark</a></li>
                                <li><a href="#" title="Show products matching tag Navy">Navy</a></li>
                                <li><a href="#" title="Show products matching tag new">new</a></li>
                                <li><a href="#" title="Show products matching tag new arrivals">new arrivals</a></li>
                                <li><a href="#" title="Show products matching tag Orange">Orange</a></li>
                                <li><a href="#" title="Show products matching tag oxford">oxford</a></li>
                            </ul>
                            <span class="btn btn--small btnview">View all</span>
                        </div>
                    </div>
                    <!--end Product Tags-->
                </div>
            </div>
            <!--End Sidebar-->
            <!--Main Content-->
            <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col">
                <div class="category-description">
                    <h3 class="text-capitalize"><span class="text-info">{{ $category->name }}</span> Description</h3>
                    <p>{{ $category->description }}</p>
                </div>
                <hr>
                <div class="productList">
                    <!--Toolbar-->
                    <button type="button" class="btn btn-filter d-block d-md-none d-lg-none"> Product Filters</button>
                    <div class="toolbar">
                        <div class="filters-toolbar-wrapper">
                            <div class="row">
                                <div class="col-4 col-md-4 col-lg-4 filters-toolbar__item collection-view-as d-flex justify-content-start align-items-center">
                                    <a href="{{ route('products.by_category', $category->slug) }}" title="Grid View" class="change-view change-view--active">
                                        <img src="{{ asset('assets/images/grid.jpg') }}" alt="Grid" />
                                    </a>
                                    <a href="{{ route('products.list.index') }}" title="List View" class="change-view">
                                        <img src="{{ asset('assets/images/list.jpg') }}" alt="List" />
                                    </a>
                                </div>
                                <div class="col-4 col-md-4 col-lg-4 text-center filters-toolbar__item filters-toolbar__item--count d-flex justify-content-center align-items-center">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="sortBy">Sort By:</label>
                                        </div>
                                        <select class="custom-select custom-select-sm" id="sortBy" wire:model="sorting">
                                            <option value="default" selected>Default</option>
                                            <option>Best Selling</option>
                                            <option value="name">Alphabetically, A-Z</option>
                                            <option value="name-desc">Alphabetically, Z-A</option>
                                            <option value="price">Price, low to high</option>
                                            <option value="price-desc">Price, high to low</option>
                                            <option value="date">Date, new to old</option>
                                            <option value="date-desc">Date, old to new</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4 col-md-4 col-lg-4 text-right">
                                    <div class="input-group input-group-sm">
                                        <select class="custom-select custom-select-sm" id="perPage" wire:model="pagesize">
                                            <option value="20" selected>20 Items</option>
                                            <option value="30">30 Items</option>
                                            <option value="40">40 Items</option>
                                            <option value="50">50 Items</option>
                                            <option value="60">60 Items</option>
                                            <option value="70">70 Items</option>
                                            <option value="80">80 Items</option>
                                            <option value="100">100 Items</option>
                                        </select>
                                        <div class="input-group-append">
                                            <label class="input-group-text" for="perPage">Per Pages</label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--End Toolbar-->
                    <div class="list-view-items grid--view-items">
                        <!--ListView Item-->
                        @foreach ($products as $key)
                        <div class="list-product list-view-item">
                            <div class="list-view-item__image-column">
                                <div class="list-view-item__image-wrapper">
                                    <!-- Image -->
                                    <a href="{{ route('products.details', $key->slug) }}">
                                        <img class="list-view-item__image blur-up lazyload" data-src="{{ asset('assets/images/product-images/' . $key->image ) }}" src="{{ asset('assets/images/product-images/' . $key->image ) }}" alt="{{ $key->title }}" title="{{ $key->title }}">
                                    </a>
                                    <!-- End Image -->
                                    <!-- countdown start -->
                                    @if ($key->sale_price > 0)
                                    <div class="saleTime desktop" data-countdown="2022/03/01"></div>
                                    @endif
                                    <!-- countdown end -->
                                </div>
                            </div>
                            <div class="list-view-item__title-column">
                                <div class="h4 grid-view-item__title text-capitalize">
                                    <a href="{{ route('products.details', $key->slug) }}">{{ $key->title }}</a>
                                </div>
                                <!-- Product Review -->
                                <p class="product-review"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></p>
                                <!-- End Product Review -->
                                <!-- Sort Description -->
                                <p>{{ $key->short_description }}</p>
                                <!-- End Sort Description -->
                                <!-- Price -->
                                <p class="product-price grid-view-item__meta">
                                    @if ($key->sale_price > 0)
                                    <span class="old-price">${{ $key->regular_price }}</span>
                                    @endif
                                    <span class="product-price__price {{ $key->sale_price ? 'product-price__sale' : ''}}"><span class="money">${{ $key->sale_price ? $key->sale_price : $key->regular_price }}</span></span>
                                </p>
                                <!-- End Price -->
                                <a href="#" class="variants btn btn--small" wire:click.prevent="addToCart({{ $key->id }}, '{{ $key->title }}', {{ $key->regular_price }})">Add to Cart</a>
                                <!-- countdown start -->
                                @if ($key->sale_price > 0)
                                <div class="timermobile">
                                    <div class="saleTime desktop" data-countdown="2022/03/01"></div>
                                </div>
                                @endif
                                <!-- countdown end -->
                            </div>
                        </div>
                        @endforeach
                        <!--End ListView Item-->
                    </div>
                </div>
                <div class="pagination justify-content-between">
                    <p>Showing {{ $products->firstItem() }} to {{ $products->lastItem() }} Items from {{ $products->total() }} Results.</p>
                    {{ $products->links() }}
                </div>
            </div>
            <!--End Main Content-->
        </div>
    </div>
</div>
