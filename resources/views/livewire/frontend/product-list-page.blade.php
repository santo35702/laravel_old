<div id="page-content">
    <!--Collection Banner-->
    <div class="collection-header">
        <div class="collection-hero">
            <div class="collection-hero__image"><img data-src="{{ asset('assets/images/cat-men.jpg') }}" src="{{ asset('assets/images/cat-men.jpg') }}" alt="Men" title="Men" /></div>
            <div class="collection-hero__title-wrapper"><h1 class="collection-hero__title page-width">Products List View</h1></div>
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
                            <ul class="sidebar_categories">
                                <li class="lvl-1"><a href="#;" class="site-nav">Shoes</a></li>
                                <li class="lvl-1"><a href="#;" class="site-nav">Accessories</a></li>
                                <li class="lvl-1"><a href="#;" class="site-nav">Collections</a></li>
                                <li class="lvl-1"><a href="#;" class="site-nav">Sale</a></li>
                                <li class="lvl-1"><a href="#;" class="site-nav">Page</a></li>
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
                        <ul>
                            <li>
                              <input type="checkbox" value="vanelas" id="check4">
                              <label for="check4"><span><span></span></span>Vanelas</label>
                            </li>
                            <li>
                              <input type="checkbox" value="pagini" id="check5">
                              <label for="check5"><span><span></span></span>Pagini</label>
                            </li>
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
                                    <div class="grid__item">
                                        <div class="mini-list-item">
                                            <div class="mini-view_image">
                                                <a class="grid-view-item__link" href="{{ route('products.details') }}">
                                                    <img class="grid-view-item__image" src="{{ asset('assets/images/product-images/product-image1.jpg') }}" alt="" />
                                                </a>
                                            </div>
                                            <div class="details">
                                                <a class="grid-view-item__title" href="{{ route('products.details') }}">Cena Skirt</a>
                                                <div class="grid-view-item__meta">
                                                    <span class="product-price__price">
                                                        <span class="money">$173.60</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid__item">
                                        <div class="mini-list-item">
                                            <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image" src="assets/images/product-images/product-image2.jpg" alt="" /></a> </div>
                                            <div class="details"> <a class="grid-view-item__title" href="#">Block Button Up</a>
                                                <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$378.00</span></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid__item">
                                        <div class="mini-list-item">
                                            <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image" src="assets/images/product-images/product-image3.jpg" alt="" /></a> </div>
                                            <div class="details"> <a class="grid-view-item__title" href="#">Balda Button Pant</a>
                                                <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$278.60</span></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid__item">
                                        <div class="mini-list-item">
                                            <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image" src="assets/images/product-images/product-image4.jpg" alt="" /></a> </div>
                                            <div class="details"> <a class="grid-view-item__title" href="#">Border Dress in Black/Silver</a>
                                                <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$228.00</span></span></div>
                                            </div>
                                        </div>
                                    </div>
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
                    <h3>Products Description</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</p>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
                </div>
                <hr>
                <div class="productList">
                    <!--Toolbar-->
                    <button type="button" class="btn btn-filter d-block d-md-none d-lg-none"> Product Filters</button>
                    <div class="toolbar">
                        <div class="filters-toolbar-wrapper">
                            <div class="row">
                                <div class="col-4 col-md-4 col-lg-4 filters-toolbar__item collection-view-as d-flex justify-content-start align-items-center">
                                    <a href="{{ route('products.index') }}" title="Grid View" class="change-view change-view--active">
                                        <img src="{{ asset('assets/images/grid.jpg') }}" alt="Grid" />
                                    </a>
                                    <a href="{{ route('products.list') }}" title="List View" class="change-view">
                                        <img src="{{ asset('assets/images/list.jpg') }}" alt="List" />
                                    </a>
                                </div>
                                <div class="col-4 col-md-4 col-lg-4 text-center filters-toolbar__item filters-toolbar__item--count d-flex justify-content-center align-items-center">
                                    <div class="filters-toolbar__item">
                                        <label for="SortBy" class="hidden">Sort By:</label>
                                        <select name="SortBy" id="SortBy" class="filters-toolbar__input filters-toolbar__input--sort">
                                            <option value="title-ascending" selected="selected">Sort</option>
                                            <option>Best Selling</option>
                                            <option>Alphabetically, A-Z</option>
                                            <option>Alphabetically, Z-A</option>
                                            <option>Price, low to high</option>
                                            <option>Price, high to low</option>
                                            <option>Date, new to old</option>
                                            <option>Date, old to new</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4 col-md-4 col-lg-4 text-right">
                                    <div class="filters-toolbar__item">
                                        <label for="SortBy" class="hidden">Items Count:</label>
                                        <select name="SortBy" id="SortBy" class="filters-toolbar__input filters-toolbar__input--sort">
                                            <option value="title-ascending" selected="selected">Sort</option>
                                            <option>Best Selling</option>
                                            <option>Alphabetically, A-Z</option>
                                            <option>Alphabetically, Z-A</option>
                                            <option>Price, low to high</option>
                                            <option>Price, high to low</option>
                                            <option>Date, new to old</option>
                                            <option>Date, old to new</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--End Toolbar-->
                    <div class="list-view-items grid--view-items">
                        <!--ListView Item-->
                        <div class="list-product list-view-item">
                            <div class="list-view-item__image-column">
                                <div class="list-view-item__image-wrapper">
                                    <!-- Image -->
                                    <a href="{{ route('products.details') }}"><img class="list-view-item__image blur-up lazyload" data-src="{{ asset('assets/images/product-images/product-image1.jpg') }}" src="{{ asset('assets/images/product-images/product-image1.jpg') }}" alt="image" title="product"></a>
                                    <!-- End Image -->
                                </div>
                            </div>
                            <div class="list-view-item__title-column">
                                <div class="h4 grid-view-item__title"><a href="{{ route('products.details') }}">Camelia Reversible Jacket</a></div>
                                <!-- Product Review -->
                                <p class="product-review"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></p>
                                <!-- End Product Review -->
                                <!-- Sort Description -->
                                <p>Bootstrap 4 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                                <!-- End Sort Description -->
                                <!-- Price -->
                                <p class="product-price grid-view-item__meta">
                                    <span class="old-price">$600.00</span>
                                    <span class="product-price__price product-price__sale"><span class="money">$500.00</span></span>
                                </p>
                                <!-- End Price -->
                                <form class="variants" action="#">
                                    <button class="btn btn--small" type="button">Select Options</button>
                                </form>
                            </div>
                        </div>
                        <!--End ListView Item-->
                        <!--ListView Item-->
                        <div class="list-product list-view-item">
                            <div class="list-view-item__image-column">
                                <div class="list-view-item__image-wrapper">
                                    <!-- Image -->
                                    <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/product-images/product-image2.jpg" src="assets/images/product-images/product-image2.jpg" alt="image" title="product"></a>
                                    <!-- End Image -->
                                </div>
                            </div>
                            <div class="list-view-item__title-column">
                                <div class="h4 grid-view-item__title"><a href="product-layout-2.html">Elastic Waist Dress</a></div>
                                <!-- Product Review -->
                                <p class="product-review"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></p>
                                <!-- End Product Review -->
                                <!-- Sort Description -->
                                <p>Bootstrap 4 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                                <!-- End Sort Description -->
                                <!-- Price -->
                                <p class="product-price grid-view-item__meta">
                                    <span class="product-price__price"><span class="money">$693.00</span></span>
                                </p>
                                <!-- End Price -->
                                <form class="variants" action="#">
                                    <button class="btn btn--small" type="button">Select Options</button>
                                </form>
                            </div>
                        </div>
                        <!--End ListView Item-->
                        <!--ListView Item-->
                        <div class="list-product list-view-item">
                            <div class="list-view-item__image-column">
                                <div class="list-view-item__image-wrapper">
                                    <!-- Image -->
                                    <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/product-images/product-image3.jpg" src="assets/images/product-images/product-image3.jpg" alt="image" title="product"></a>
                                    <!-- End Image -->
                                </div>
                            </div>
                            <div class="list-view-item__title-column">
                                <div class="h4 grid-view-item__title"><a href="product-layout-2.html">3/4 Sleeve Kimono Dress</a></div>
                                <!-- Product Review -->
                                <p class="product-review"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></p>
                                <!-- End Product Review -->
                                <!-- Sort Description -->
                                <p>Bootstrap 4 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                                <!-- End Sort Description -->
                                <!-- Price -->
                                <p class="product-price grid-view-item__meta">
                                    <span class="product-price__price"><span class="money">$500.00</span></span>
                                </p>
                                <!-- End Price -->
                                <form class="variants" action="#">
                                    <button class="btn btn--small" type="button">Select Options</button>
                                </form>
                            </div>
                        </div>
                        <!--End ListView Item-->
                        <!--ListView Item-->
                        <div class="list-product list-view-item">
                            <div class="list-view-item__image-column">
                                <div class="list-view-item__image-wrapper">
                                    <!-- Image -->
                                    <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/product-images/product-image4.jpg" src="assets/images/product-images/product-image4.jpg" alt="image" title="product"></a>
                                    <!-- End Image -->
                                </div>
                            </div>
                            <div class="list-view-item__title-column">
                                <div class="h4 grid-view-item__title"><a href="product-layout-2.html">Cape Dress</a></div>
                                <!-- Product Review -->
                                <p class="product-review"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></p>
                                <!-- End Product Review -->
                                <!-- Sort Description -->
                                <p>Bootstrap 4 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                                <!-- End Sort Description -->
                                <!-- Price -->
                                <p class="product-price grid-view-item__meta">
                                    <span class="old-price">$900.00</span>
                                    <span class="product-price__price product-price__sale"><span class="money">$800.00</span></span>
                                </p>
                                <!-- End Price -->
                                <form class="variants" action="#">
                                    <button class="btn btn--small" type="button">Select Options</button>
                                </form>
                            </div>
                        </div>
                        <!--End ListView Item-->
                        <!--ListView Item-->
                        <div class="list-product list-view-item">
                            <div class="list-view-item__image-column">
                                <div class="list-view-item__image-wrapper">
                                    <!-- Image -->
                                    <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/product-images/product-image5.jpg" src="assets/images/product-images/product-image5.jpg" alt="image" title="product"></a>
                                    <!-- End Image -->
                                </div>
                            </div>
                            <div class="list-view-item__title-column">
                                <div class="h4 grid-view-item__title"><a href="product-layout-2.html">Paper Dress</a></div>
                                <!-- Product Review -->
                                <p class="product-review"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></p>
                                <!-- End Product Review -->
                                <!-- Sort Description -->
                                <p>Bootstrap 4 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                                <!-- End Sort Description -->
                                <!-- Price -->
                                <p class="product-price grid-view-item__meta">
                                    <span class="old-price">$900.00</span>
                                    <span class="product-price__price product-price__sale"><span class="money">$800.00</span></span>
                                </p>
                                <!-- End Price -->
                                <form class="variants" action="#">
                                    <button class="btn btn--small" type="button">Select Options</button>
                                </form>
                            </div>
                        </div>
                        <!--End ListView Item-->
                        <!--ListView Item-->
                        <div class="list-product list-view-item">
                            <div class="list-view-item__image-column">
                                <div class="list-view-item__image-wrapper">
                                    <!-- Image -->
                                    <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/product-images/product-image17.jpg" src="assets/images/product-images/product-image17.jpg" alt="image" title="product"></a>
                                    <!-- End Image -->
                                </div>
                            </div>
                            <div class="list-view-item__title-column">
                                <div class="h4 grid-view-item__title"><a href="product-layout-2.html">Buttercup Dress</a></div>
                                <!-- Product Review -->
                                <p class="product-review"><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></p>
                                <!-- End Product Review -->
                                <!-- Sort Description -->
                                <p>Bootstrap 4 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                                <!-- End Sort Description -->
                                <!-- Price -->
                                <p class="product-price grid-view-item__meta">
                                    <span class="product-price__price"><span class="money">$800.00</span></span>
                                </p>
                                <!-- End Price -->
                                <form class="variants" action="#">
                                    <button class="btn btn--small" type="button">Add To Cart</button>
                                </form>
                            </div>
                        </div>
                        <!--End ListView Item-->
                        <!--ListView Item-->
                        <div class="list-product list-view-item">
                            <div class="list-view-item__image-column">
                                <div class="list-view-item__image-wrapper">
                                    <!-- Image -->
                                    <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/product-images/product-image18.jpg" src="assets/images/product-images/product-image18.jpg" alt="image" title="product"></a>
                                    <!-- End Image -->
                                </div>
                            </div>
                            <div class="list-view-item__title-column">
                                <div class="h4 grid-view-item__title"><a href="product-layout-2.html">Lima Shirt</a></div>
                                <!-- Product Review -->
                                <p class="product-review"><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></p>
                                <!-- End Product Review -->
                                <!-- Sort Description -->
                                <p>Bootstrap 4 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                                <!-- End Sort Description -->
                                <!-- Price -->
                                <p class="product-price grid-view-item__meta">
                                    <span class="product-price__price"><span class="money">$800.00</span></span>
                                </p>
                                <!-- End Price -->
                                <form class="variants" action="#">
                                    <button class="btn btn--small" type="button">Add To Cart</button>
                                </form>
                            </div>
                        </div>
                        <!--End ListView Item-->
                        <!--ListView Item-->
                        <div class="list-product list-view-item">
                            <div class="list-view-item__image-column">
                                <div class="list-view-item__image-wrapper">
                                    <!-- Image -->
                                    <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/product-images/product-image19.jpg" src="assets/images/product-images/product-image19.jpg" alt="image" title="product"></a>
                                    <!-- End Image -->
                                </div>
                            </div>
                            <div class="list-view-item__title-column">
                                <div class="h4 grid-view-item__title"><a href="product-layout-2.html">Romary Dress</a></div>
                                <!-- Product Review -->
                                <p class="product-review"><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></p>
                                <!-- End Product Review -->
                                <!-- Sort Description -->
                                <p>Bootstrap 4 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                                <!-- End Sort Description -->
                                <!-- Price -->
                                <p class="product-price grid-view-item__meta">
                                    <span class="product-price__price"><span class="money">$800.00</span></span>
                                </p>
                                <!-- End Price -->
                                <form class="variants" action="#">
                                    <button class="btn btn--small" type="button">Add To Cart</button>
                                </form>
                            </div>
                        </div>
                        <!--End ListView Item-->
                        <!--ListView Item-->
                        <div class="list-product list-view-item">
                            <div class="list-view-item__image-column">
                                <div class="list-view-item__image-wrapper">
                                    <!-- Image -->
                                    <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/product-images/product-image20.jpg" src="assets/images/product-images/product-image20.jpg" alt="image" title="product"></a>
                                    <!-- End Image -->
                                </div>
                            </div>
                            <div class="list-view-item__title-column">
                                <div class="h4 grid-view-item__title"><a href="product-layout-2.html">Floral Sleeveless Dress</a></div>
                                <!-- Product Review -->
                                <p class="product-review"><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></p>
                                <!-- End Product Review -->
                                <!-- Sort Description -->
                                <p>Bootstrap 4 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                                <!-- End Sort Description -->
                                <!-- Price -->
                                <p class="product-price grid-view-item__meta">
                                    <span class="product-price__price"><span class="money">$380.00</span></span>
                                </p>
                                <!-- End Price -->
                                <form class="variants" action="#">
                                    <button class="btn btn--small" type="button">Add To Cart</button>
                                </form>
                            </div>
                        </div>
                        <!--End ListView Item-->
                        <!--ListView Item-->
                        <div class="list-product list-view-item">
                            <div class="list-view-item__image-column">
                                <div class="list-view-item__image-wrapper">
                                    <!-- Image -->
                                    <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/product-images/product-image21.jpg" src="assets/images/product-images/product-image21.jpg" alt="image" title="product"></a>
                                    <!-- End Image -->
                                </div>
                            </div>
                            <div class="list-view-item__title-column">
                                <div class="h4 grid-view-item__title"><a href="product-layout-2.html">Button Up Dress</a></div>
                                <!-- Product Review -->
                                <p class="product-review"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></p>
                                <!-- End Product Review -->
                                <!-- Sort Description -->
                                <p>Bootstrap 4 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                                <!-- End Sort Description -->
                                <!-- Price -->
                                <p class="product-price grid-view-item__meta">
                                    <span class="product-price__price"><span class="money">$400.00</span></span>
                                </p>
                                <!-- End Price -->
                                <form class="variants" action="#">
                                    <button class="btn btn--small" type="button">Add To Cart</button>
                                </form>
                            </div>
                        </div>
                        <!--End ListView Item-->
                        <!--ListView Item-->
                        <div class="list-product list-view-item">
                            <div class="list-view-item__image-column">
                                <div class="list-view-item__image-wrapper">
                                    <!-- Image -->
                                    <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/product-images/product-image22.jpg" src="assets/images/product-images/product-image22.jpg" alt="image" title="product"></a>
                                    <!-- End Image -->
                                </div>
                            </div>
                            <div class="list-view-item__title-column">
                                <div class="h4 grid-view-item__title"><a href="product-layout-2.html">Lexie Shirt</a></div>
                                <!-- Product Review -->
                                <p class="product-review"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></p>
                                <!-- End Product Review -->
                                <!-- Sort Description -->
                                <p>Bootstrap 4 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                                <!-- End Sort Description -->
                                <!-- Price -->
                                <p class="product-price grid-view-item__meta">
                                    <span class="product-price__price"><span class="money">$200.00</span></span>
                                </p>
                                <!-- End Price -->
                                <form class="variants" action="#">
                                    <button class="btn btn--small" type="button">Add To Cart</button>
                                </form>
                            </div>
                        </div>
                        <!--End ListView Item-->
                        <!--ListView Item-->
                        <div class="list-product list-view-item">
                            <div class="list-view-item__image-column">
                                <div class="list-view-item__image-wrapper">
                                    <!-- Image -->
                                    <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/product-images/product-image23.jpg" src="assets/images/product-images/product-image23.jpg" alt="image" title="product"></a>
                                    <!-- End Image -->
                                </div>
                            </div>
                            <div class="list-view-item__title-column">
                                <div class="h4 grid-view-item__title"><a href="product-layout-2.html">One Shoulder Dress in Navy</a></div>
                                <!-- Product Review -->
                                <p class="product-review"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></p>
                                <!-- End Product Review -->
                                <!-- Sort Description -->
                                <p>Bootstrap 4 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                                <!-- End Sort Description -->
                                <!-- Price -->
                                <p class="product-price grid-view-item__meta">
                                    <span class="product-price__price"><span class="money">$1048.00</span></span>
                                </p>
                                <!-- End Price -->
                                <form class="variants" action="#">
                                    <button class="btn btn--small" type="button">Add To Cart</button>
                                </form>
                            </div>
                        </div>
                        <!--End ListView Item-->
                        <!--ListView Item-->
                        <div class="list-product list-view-item">
                            <div class="list-view-item__image-column">
                                <div class="list-view-item__image-wrapper">
                                    <!-- Image -->
                                    <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/product-images/product-image24.jpg" src="assets/images/product-images/product-image24.jpg" alt="image" title="product"></a>
                                    <!-- End Image -->
                                </div>
                            </div>
                            <div class="list-view-item__title-column">
                                <div class="h4 grid-view-item__title"><a href="product-layout-2.html">Triangle Sleeveless Dress in Multi</a></div>
                                <!-- Product Review -->
                                <p class="product-review"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></p>
                                <!-- End Product Review -->
                                <!-- Sort Description -->
                                <p>Bootstrap 4 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                                <!-- End Sort Description -->
                                <!-- Price -->
                                <p class="product-price grid-view-item__meta">
                                    <span class="product-price__price"><span class="money">$1048.00</span></span>
                                </p>
                                <!-- End Price -->
                                <form class="variants" action="#">
                                    <button class="btn btn--small" type="button">Add To Cart</button>
                                </form>
                            </div>
                        </div>
                        <!--End ListView Item-->
                        <!--ListView Item-->
                        <div class="list-product list-view-item">
                            <div class="list-view-item__image-column">
                                <div class="list-view-item__image-wrapper">
                                    <!-- Image -->
                                    <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="assets/images/product-images/product-image25.jpg" src="assets/images/product-images/product-image25.jpg" alt="image" title="product"></a>
                                    <!-- End Image -->
                                </div>
                            </div>
                            <div class="list-view-item__title-column">
                                <div class="h4 grid-view-item__title"><a href="product-layout-2.html">ACB Top</a></div>
                                <!-- Product Review -->
                                <p class="product-review"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></p>
                                <!-- End Product Review -->
                                <!-- Sort Description -->
                                <p>Bootstrap 4 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as boutiques, bookstores, technology stores, jewelries and other types of web shops....</p>
                                <!-- End Sort Description -->
                                <!-- Price -->
                                <p class="product-price grid-view-item__meta">
                                    <span class="product-price__price"><span class="money">$280.00</span></span>
                                </p>
                                <!-- End Price -->
                                <form class="variants" action="#">
                                    <button class="btn btn--small" type="button">Add To Cart</button>
                                </form>
                            </div>
                        </div>
                        <!--End ListView Item-->
                    </div>
                </div>
                <div class="pagination justify-content-between">
                    <p>Showing 1 to 20 Items from 50 Results.</p>
                    <ul>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li class="next"><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <!--End Main Content-->
        </div>
    </div>
</div>