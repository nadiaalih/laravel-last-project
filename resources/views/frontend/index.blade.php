@extends('frontend.layout.shared')
@section('content')
<body class="home home-3">
    <div id="all">
        <!-- Header -->
        <header id="header">
            <div class="container">
                <div class="header-top">
                    <div class="row align-items-center">
                        <!-- Header Left -->
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <!-- Main Menu -->
                            <div id="main-menu">
                                <ul class="menu">
                                    <li class="dropdown">
                                        <a href="/" title="Homepage">Home</a>
                                    </li>

                                    <li class="dropdown">
                                        <a href="product-grid-left-sidebar.html" title="Product">Product</a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                @foreach ($Categories as $items )
                                                <li class="has-image">
                                                    <img src="{{asset('frontend/img/product/' . $items->image)}}"
                                                        alt="{{$items->name}}">
                                                    <a href="product-grid-left-sidebar.html"
                                                        title="{{$items->name}}">{{$items->name}}</a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="dropdown">
                                        <a href="/blog">Blog</a>

                                    </li>

                                    <li>
                                        <a href="/about">About Us</a>
                                    </li>

                                    <li>
                                        <a href="/contact">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Header Center -->
                        <div class="col-lg-2 col-md-2 col-sm-12 header-center justify-content-center">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="home-3.html">
                                    <img class="img-responsive" src="{{asset('frontend/img/logo.png')}}" alt="Logo">
                                </a>
                            </div>

                            <span id="toggle-mobile-menu"><i class="zmdi zmdi-menu"></i></span>
                        </div>


                        <!-- Header Right -->
                        <div
                            class="col-lg-5 col-md-5 col-sm-12 header-right d-flex justify-content-end align-items-center">
                            <!-- Search -->
                            <div class="form-search">
                                <form action="#" method="get">
                                    <input type="text" class="form-input" placeholder="Search">
                                    <button type="submit" class="fa fa-search"></button>
                                </form>
                            </div>

                            <!-- Cart -->
                            <div class="block-cart dropdown">
                                <div class="cart-title">
                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    <span class="cart-count">2</span>
                                </div>

                                <div class="dropdown-content">
                                    <div class="cart-content">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="product-image">
                                                        <a href="product-detail-left-sidebar.html">
                                                            <img src="{{asset('frontend/img/product/7.jpg')}}" alt="Product">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="product-name">
                                                            <a href="product-detail-left-sidebar.html">Organic
                                                                Strawberry Fruits</a>
                                                        </div>
                                                        <div>
                                                            2 x <span class="product-price">$28.98</span>
                                                        </div>
                                                    </td>
                                                    <td class="action">
                                                        <a class="remove" href="#">
                                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="product-image">
                                                        <a href="product-detail-left-sidebar.html">
                                                            <img src="{{asset('frontend/img/product/6.jpg')}}" alt="Product">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="product-name">
                                                            <a href="product-detail-left-sidebar.html">Organic
                                                                Strawberry</a>
                                                        </div>
                                                        <div>
                                                            1 x <span class="product-price">$35.00</span>
                                                        </div>
                                                    </td>
                                                    <td class="action">
                                                        <a class="remove" href="#">
                                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr class="total">
                                                    <td>Total:</td>
                                                    <td colspan="2">$92.96</td>
                                                </tr>

                                                <tr>
                                                    <td colspan="3">
                                                        <div class="cart-button">
                                                            <a class="btn btn-primary" href="product-cart.html"
                                                                title="View Cart">View Cart</a>
                                                            <a class="btn btn-primary" href="product-checkout.html"
                                                                title="Checkout">Checkout</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>


                            <!-- My Account -->
                            <div class="my-account dropdown toggle-icon">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                                <div class="dropdown-menu">
                                    <div class="item">
                                        <a href="#" title="Log in to your customer account"><i
                                                class="fa fa-cog"></i>My
                                            Account</a>
                                    </div>
                                    <div class="item">
                                        <a href="user-login.html" title="Log in to your customer account"><i
                                                class="fa fa-sign-in"></i>Login</a>
                                    </div>
                                    <div class="item">
                                        <a href="user-register.html" title="Register Account"><i
                                                class="fa fa-user"></i>Register</a>
                                    </div>
                                    <div class="item">
                                        <a href="#" title="My Wishlists"><i class="fa fa-heart"></i>My
                                            Wishlists</a>
                                    </div>
                                    <div class="item">
                                        <!-- Language -->
                                        <div class="language switcher">
                                            <a href="#" title="Language English" class="active"><img
                                                    src="{{asset('frontend/img/language-en.jpg')}}" alt="Language English"></a>
                                            <a href="#" title="Language French"><img src="{{asset('frontend/img/language-fr.jpg')}}"
                                                    alt="Language French"></a>
                                            <a href="#" title="Language Deutsch"><img src="{{asset('frontend/img/language-de.jpg')}}"
                                                    alt="Language Deutsch"></a>
                                        </div>

                                        <!-- Currency -->
                                        <div class="currency switcher">
                                            <a href="#" title="USD" class="active">USD</a>
                                            <a href="#" title="EUR">EUR</a>
                                            <a href="#" title="GBP">GBP</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <!-- Main Content -->
        <div id="content" class="site-content">
            <!-- Slideshow -->
            <div class="section slideshow">
                <div class="tiva-slideshow-wrapper">
                    <div id="tiva-slideshow" class="nivoSlider">
                        <a href="#">
                            <img class="img-responsive" src="{{asset('frontend/img/slideshow/home3-slideshow-1.jpg')}}"
                                alt="Slideshow Image">
                        </a>
                        <a href="#">
                            <img class="img-responsive" src="{{asset('frontend/img/slideshow/home3-slideshow-2.jpg')}}"
                                alt="Slideshow Image">
                        </a>
                        <a href="#">
                            <img class="img-responsive" src="{{asset('frontend/img/slideshow/home3-slideshow-3.jpg')}}"
                                alt="Slideshow Image">
                        </a>
                    </div>
                </div>
            </div>


            <!-- Product - New Arrivals -->
            <div class="section products-block product-tab tab-2">
                <div class="block-title">
                    <h2 class="title">New <span>Arrivals</span></h2>
                    <div class="sub-title">Lorem ipsum dolor sit amet consectetur adipiscing elit eiusmod tempor</div>
                </div>

                <div class="block-content">
                    <div class="container">
                        <!-- Tab Navigation -->
                        <div class="tab-nav">
                            <ul>
                                <li class="active">
                                    <a data-toggle="tab" href="#all-products">
                                        <img src="{{asset('frontend/img/product/product-category-0.png')}}" alt="All Product">
                                        <span>All Products</span>
                                    </a>
                                </li>
                                @foreach ( $Categories as $items)
                                <li>
                                    <a data-toggle="tab" href="#{{$items->name}}">
                                        <img src="{{asset('frontend/img/product/'. $items->image)}}" alt="{{$items->name}}">
                                        <span>{{$items->name}}</span>
                                    </a>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                        <!-- Tab Content -->
                        <div class="tab-content">
                            <!-- All Products -->
                            <div role="tabpanel" class="tab-pane fade in active" id="all-products">
                                <div class="products owl-theme owl-carousel">
@foreach ( $allproducts as $items)

                                    <div class="product-group">
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="{{asset('frontend/img/product/' . $items->image)}}" alt="{{$items->name}}">
                                                </a>
                                            </div>

                                            <div class="product-title">
                                                <a href="{{route('product.name' , $items->id)}}">
                                                    {{$items->name}}
                                                </a>
                                            </div>

                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>

                                            <div class="product-price">
                                                <span class="sale-price">{{$items->price}}</span>
                                                <span class="base-price">$90.00</span>
                                            </div>

                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>

                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                </a>

                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>

                            <!-- Vegetables -->
                            <div role="tabpanel" class="tab-pane fade" id="vegetables">
                                <div class="products owl-theme owl-carousel">
                                    @foreach ($vegetables as $items )

                                    <div class="product-group">

                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="{{asset('frontend/img/product/' . $items->image)}}" alt="{{$items->name}}">
                                                </a>
                                            </div>

                                            <div class="product-title">
                                                <a href="/product_details">
                                                    {{$items->name}}                                                </a>
                                            </div>

                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>

                                            <div class="product-price">
                                                <span class="sale-price">{{$items->price}}</span>
                                                <span class="base-price">$90.00</span>
                                            </div>

                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>

                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                </a>

                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach


                                </div>
                            </div>
 <!-- fruits -->
 <div role="tabpanel" class="tab-pane fade" id="fruite">
    <div class="products owl-theme owl-carousel">
        @foreach ($fruite as $items )

        <div class="product-group">

            <div class="product-item">
                <div class="product-image">
                    <a href="product-detail-left-sidebar.html">
                        <img src="{{asset('frontend/img/product/' . $items->image)}}" alt="{{$items->name}}">
                    </a>
                </div>

                <div class="product-title">
                    <a href="product-detail-left-sidebar.html">
                        {{$items->name}}                                                </a>
                </div>

                <div class="product-rating">
                    <div class="star on"></div>
                    <div class="star on"></div>
                    <div class="star on "></div>
                    <div class="star on"></div>
                    <div class="star"></div>
                </div>

                <div class="product-price">
                    <span class="sale-price">{{$items->price}}</span>
                    <span class="base-price">$90.00</span>
                </div>

                <div class="product-buttons">
                    <a class="add-to-cart" href="#">
                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                    </a>

                    <a class="add-wishlist" href="#">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                    </a>

                    <a class="quickview" href="#">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </a>
                </div>
            </div>


        </div>
        @endforeach


    </div>
</div>
                            <!-- Bread -->
                            <div role="tabpanel" class="tab-pane fade" id="Bread">
                                <div class="products owl-theme owl-carousel">
                                    @foreach ($Bread as $items )

                                    <div class="product-group">

                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="{{asset('frontend/img/product/' . $items->image)}}" alt="{{$items->name}}">
                                                </a>
                                            </div>

                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    {{$items->name}}                                                </a>
                                            </div>

                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>

                                            <div class="product-price">
                                                <span class="sale-price">{{$items->price}}</span>
                                                <span class="base-price">$90.00</span>
                                            </div>

                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>

                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                </a>

                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>


                                    </div>
                                    @endforeach


                                </div>
                            </div>

                            <!-- Juices -->
                            <div role="tabpanel" class="tab-pane fade" id="juices">
                                <div class="products owl-theme owl-carousel">
                                    <div class="product-group">
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="{{asset('frontend/img/product/4.jpg')}}" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>

                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>

                                            <div class="product-price">
                                                <span class="sale-price">$80.00</span>
                                                <span class="base-price">$90.00</span>
                                            </div>

                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>

                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                </a>

                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="{{asset('frontend/img/product/14.jpg')}}" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>

                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>

                                            <div class="product-price">
                                                <span class="sale-price">$80.00</span>
                                                <span class="base-price">$90.00</span>
                                            </div>

                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>

                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                </a>

                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-group">
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="{{asset('frontend/img/product/8.jpg')}}" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>

                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>

                                            <div class="product-price">
                                                <span class="sale-price">$120.00</span>
                                            </div>

                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>

                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                </a>

                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="{{asset('frontend/img/product/9.jpg')}}" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>

                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                            </div>

                                            <div class="product-price">
                                                <span class="sale-price">$80.00</span>
                                                <span class="base-price">$90.00</span>
                                            </div>

                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>

                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                </a>

                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-group">
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="{{asset('frontend/img/product/10.jpg')}}" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>

                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>

                                            <div class="product-price">
                                                <span class="sale-price">$96.00</span>
                                            </div>

                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>

                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                </a>

                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="{{asset('frontend/img/product/33.jpg')}}" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>

                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>

                                            <div class="product-price">
                                                <span class="sale-price">$80.00</span>
                                                <span class="base-price">$90.00</span>
                                            </div>

                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>

                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                </a>

                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-group">
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="{{asset('frontend/img/product/20.jpg')}}" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>

                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>

                                            <div class="product-price">
                                                <span class="sale-price">$96.00</span>
                                            </div>

                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>

                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                </a>

                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="{{asset('frontend/img/product/23.jpg')}}" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>

                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>

                                            <div class="product-price">
                                                <span class="sale-price">$80.00</span>
                                                <span class="base-price">$90.00</span>
                                            </div>

                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>

                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                </a>

                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>


            <!-- Intro -->
            <div class="section intro">
                <div class="block-content">
                    <div class="container">
                        <div class="intro-content">
                            <div class="row">
                                <div class="title">Why Choose Us</div>
                                <div class="col-lg-6 col-md-6 col-xs-6 item up-left">
                                    <h4>100% Natural</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua.</p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xs-6 item up-right">
                                    <h4>Always Fresh</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua.</p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xs-6 item down-left">
                                    <h4>Premium Quality</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua.</p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xs-6 item down-right">
                                    <h4>Super Healthy</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Product -->
            <div class="two-column">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="section products-block category-double no-border">
                            <div class="block-title">
                                <h2 class="title">Featured <span>Products</span></h2>
                                <div class="sub-title">Lorem ipsum dolor sit amet consectetur adipiscing</div>
                            </div>

                            <div class="block-content">
                                <div class="products owl-theme owl-carousel">
                                    <div class="product-item">
                                        <div class="product-image">
                                            <a href="product-detail-left-sidebar.html">
                                                <img src="{{asset('frontend/img/product/4.jpg')}}" alt="Product Image">
                                            </a>
                                        </div>

                                        <div class="product-title">
                                            <a href="product-detail-left-sidebar.html">
                                                Organic Strawberry Fruits
                                            </a>
                                        </div>

                                        <div class="product-rating">
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on "></div>
                                            <div class="star on"></div>
                                            <div class="star"></div>
                                        </div>

                                        <div class="product-price">
                                            <span class="sale-price">$80.00</span>
                                            <span class="base-price">$90.00</span>
                                        </div>

                                        <div class="product-buttons">
                                            <a class="add-to-cart" href="#">
                                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                            </a>

                                            <a class="add-wishlist" href="#">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </a>

                                            <a class="quickview" href="#">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="product-item">
                                        <div class="product-image">
                                            <a href="product-detail-left-sidebar.html">
                                                <img src="{{asset('frontend/img/product/8.jpg')}}" alt="Product Image">
                                            </a>
                                        </div>

                                        <div class="product-title">
                                            <a href="product-detail-left-sidebar.html">
                                                Organic Strawberry Fruits
                                            </a>
                                        </div>

                                        <div class="product-rating">
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on "></div>
                                            <div class="star on"></div>
                                            <div class="star"></div>
                                        </div>

                                        <div class="product-price">
                                            <span class="sale-price">$120.00</span>
                                        </div>

                                        <div class="product-buttons">
                                            <a class="add-to-cart" href="#">
                                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                            </a>

                                            <a class="add-wishlist" href="#">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </a>

                                            <a class="quickview" href="#">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="product-item">
                                        <div class="product-image">
                                            <a href="product-detail-left-sidebar.html">
                                                <img src="{{asset('frontend/img/product/14.jpg')}}" alt="Product Image">
                                            </a>
                                        </div>

                                        <div class="product-title">
                                            <a href="product-detail-left-sidebar.html">
                                                Organic Strawberry Fruits
                                            </a>
                                        </div>

                                        <div class="product-rating">
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on "></div>
                                            <div class="star on"></div>
                                            <div class="star"></div>
                                        </div>

                                        <div class="product-price">
                                            <span class="sale-price">$80.00</span>
                                            <span class="base-price">$90.00</span>
                                        </div>

                                        <div class="product-buttons">
                                            <a class="add-to-cart" href="#">
                                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                            </a>

                                            <a class="add-wishlist" href="#">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </a>

                                            <a class="quickview" href="#">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="product-item">
                                        <div class="product-image">
                                            <a href="product-detail-left-sidebar.html">
                                                <img src="{{asset('frontend/img/product/6.jpg')}}" alt="Product Image">
                                            </a>
                                        </div>

                                        <div class="product-title">
                                            <a href="product-detail-left-sidebar.html">
                                                Organic Strawberry Fruits
                                            </a>
                                        </div>

                                        <div class="product-rating">
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on "></div>
                                            <div class="star on"></div>
                                            <div class="star"></div>
                                        </div>

                                        <div class="product-price">
                                            <span class="sale-price">$120.00</span>
                                        </div>

                                        <div class="product-buttons">
                                            <a class="add-to-cart" href="#">
                                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                            </a>

                                            <a class="add-wishlist" href="#">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </a>

                                            <a class="quickview" href="#">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="section products-block category-double no-border">
                            <div class="block-title">
                                <h2 class="title">Best <span>Sellers</span></h2>
                                <div class="sub-title">Lorem ipsum dolor sit amet consectetur adipiscing</div>
                            </div>

                            <div class="block-content">
                                <div class="products owl-theme owl-carousel">
                                    <div class="product-item">
                                        <div class="product-image">
                                            <a href="product-detail-left-sidebar.html">
                                                <img src="{{asset('frontend/img/product/16.jpg')}}" alt="Product Image">
                                            </a>
                                        </div>

                                        <div class="product-title">
                                            <a href="product-detail-left-sidebar.html">
                                                Organic Strawberry Fruits
                                            </a>
                                        </div>

                                        <div class="product-rating">
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on "></div>
                                            <div class="star on"></div>
                                            <div class="star"></div>
                                        </div>

                                        <div class="product-price">
                                            <span class="sale-price">$80.00</span>
                                            <span class="base-price">$90.00</span>
                                        </div>

                                        <div class="product-buttons">
                                            <a class="add-to-cart" href="#">
                                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                            </a>

                                            <a class="add-wishlist" href="#">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </a>

                                            <a class="quickview" href="#">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="product-item">
                                        <div class="product-image">
                                            <a href="product-detail-left-sidebar.html">
                                                <img src="{{asset('frontend/img/product/30.jpg')}}" alt="Product Image">
                                            </a>
                                        </div>

                                        <div class="product-title">
                                            <a href="product-detail-left-sidebar.html">
                                                Organic Strawberry Fruits
                                            </a>
                                        </div>

                                        <div class="product-rating">
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on "></div>
                                            <div class="star on"></div>
                                            <div class="star"></div>
                                        </div>

                                        <div class="product-price">
                                            <span class="sale-price">$120.00</span>
                                        </div>

                                        <div class="product-buttons">
                                            <a class="add-to-cart" href="#">
                                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                            </a>

                                            <a class="add-wishlist" href="#">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </a>

                                            <a class="quickview" href="#">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="product-item">
                                        <div class="product-image">
                                            <a href="product-detail-left-sidebar.html">
                                                <img src="{{asset('frontend/img/product/17.jpg')}}" alt="Product Image">
                                            </a>
                                        </div>

                                        <div class="product-title">
                                            <a href="product-detail-left-sidebar.html">
                                                Organic Strawberry Fruits
                                            </a>
                                        </div>

                                        <div class="product-rating">
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on "></div>
                                            <div class="star on"></div>
                                            <div class="star"></div>
                                        </div>

                                        <div class="product-price">
                                            <span class="sale-price">$80.00</span>
                                            <span class="base-price">$90.00</span>
                                        </div>

                                        <div class="product-buttons">
                                            <a class="add-to-cart" href="#">
                                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                            </a>

                                            <a class="add-wishlist" href="#">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </a>

                                            <a class="quickview" href="#">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="product-item">
                                        <div class="product-image">
                                            <a href="product-detail-left-sidebar.html">
                                                <img src="{{asset('frontend/img/product/20.jpg')}}" alt="Product Image">
                                            </a>
                                        </div>

                                        <div class="product-title">
                                            <a href="product-detail-left-sidebar.html">
                                                Organic Strawberry Fruits
                                            </a>
                                        </div>

                                        <div class="product-rating">
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on "></div>
                                            <div class="star on"></div>
                                            <div class="star"></div>
                                        </div>

                                        <div class="product-price">
                                            <span class="sale-price">$120.00</span>
                                        </div>

                                        <div class="product-buttons">
                                            <a class="add-to-cart" href="#">
                                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                            </a>

                                            <a class="add-wishlist" href="#">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </a>

                                            <a class="quickview" href="#">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Banners -->
            <div class="section banners">
                <div class="row margin-0">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 padding-0">
                        <div class="banner-item">
                            <div class="text">
                                <h3>Tomato and Pepper</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip</p>
                                <a class="button" href="#"><i class="fa fa-shopping-cart"
                                        aria-hidden="true"></i>SHOP
                                    NOW</a>
                            </div>
                            <div class="image-mask"></div>
                            <img class="img-responsive" src="{{asset('frontend/img/banner/home3-banner-1.jpg')}}" alt="Banner">
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 padding-0">
                        <div class="row margin-0">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 padding-0">
                                <div class="banner-item">
                                    <div class="text">
                                        <h3>Tomato and Pepper</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                                        <a class="button" href="#"><i class="fa fa-shopping-cart"
                                                aria-hidden="true"></i>SHOP NOW</a>
                                    </div>
                                    <div class="image-mask"></div>
                                    <img class="img-responsive" src="{{asset('frontend/img/banner/home3-banner-2.jpg')}}"
                                        alt="Banner">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 padding-0">
                                <div class="banner-item">
                                    <div class="text">
                                        <h3>Tomato and Pepper</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                                        <a class="button" href="#"><i class="fa fa-shopping-cart"
                                                aria-hidden="true"></i>SHOP NOW</a>
                                    </div>
                                    <div class="image-mask"></div>
                                    <img class="img-responsive" src="{{asset('frontend/img/banner/home3-banner-3.jpg')}}"
                                        alt="Banner">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 padding-0">
                                <div class="banner-item">
                                    <div class="text">
                                        <h3>Tomato and Pepper</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                                        <a class="button" href="#"><i class="fa fa-shopping-cart"
                                                aria-hidden="true"></i>SHOP NOW</a>
                                    </div>
                                    <div class="image-mask"></div>
                                    <img class="img-responsive" src="{{asset('frontend/img/banner/home3-banner-4.jpg')}}"
                                        alt="Banner">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 padding-0">
                                <div class="banner-item">
                                    <div class="text">
                                        <h3>Tomato and Pepper</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                                        <a class="button" href="#"><i class="fa fa-shopping-cart"
                                                aria-hidden="true"></i>SHOP NOW</a>
                                    </div>
                                    <div class="image-mask"></div>
                                    <img class="img-responsive" src="{{asset('frontend/img/banner/home3-banner-5.jpg')}}"
                                        alt="Banner">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Latest News -->
            <div class="section latest-news layout-2">
                <div class="block-title">
                    <h2 class="title">Our <span>Blog</span></h2>
                    <div class="sub-title">Lorem ipsum dolor sit amet consectetur</div>
                </div>

                <div class="block-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="blog-item">
                                    <div class="blog-image">
                                        <a href="blog-detail.html" class="zoom-effect">
                                            <img src="{{asset('frontend/img/blog/blog-1.jpg')}}" alt="Blog Image">
                                        </a>
                                    </div>
                                    <div class="blog-info">
                                        <div class="blog-time">
                                            <span><i class="zmdi zmdi-comments"></i>13 comment</span>
                                            <span><i class="zmdi zmdi-calendar-note"></i>20 APRIl 2017</span>
                                        </div>
                                        <div class="blog-title"><a href="blog-detail.html">5 Best fruits to make you
                                                fresh and healthy</a></div>
                                        <div class="blog-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                            elit,
                                            sed diam nonummy...</div>
                                        <div class="readmore"><a href="blog-detail.html">Read more</a></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="blog-item">
                                    <div class="blog-image">
                                        <a href="blog-detail.html" class="zoom-effect">
                                            <img src="{{asset('frontend/img/blog/blog-2.jpg')}}" alt="Blog Image">
                                        </a>
                                    </div>
                                    <div class="blog-info">
                                        <div class="blog-time">
                                            <span><i class="zmdi zmdi-comments"></i>13 comment</span>
                                            <span><i class="zmdi zmdi-calendar-note"></i>20 APRIl 2017</span>
                                        </div>
                                        <div class="blog-title"><a href="blog-detail.html">5 Best fruits to make you
                                                fresh and healthy</a></div>
                                        <div class="blog-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                            elit,
                                            sed diam nonummy...</div>
                                        <div class="readmore"><a href="blog-detail.html">Read more</a></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="blog-item">
                                    <div class="blog-image">
                                        <a href="blog-detail.html" class="zoom-effect">
                                            <img src="{{asset('frontend/img/blog/blog-3.jpg')}}" alt="Blog Image">
                                        </a>
                                    </div>
                                    <div class="blog-info">
                                        <div class="blog-time">
                                            <span><i class="zmdi zmdi-comments"></i>13 comment</span>
                                            <span><i class="zmdi zmdi-calendar-note"></i>20 APRIl 2017</span>
                                        </div>
                                        <div class="blog-title"><a href="blog-detail.html">5 Best fruits to make you
                                                fresh and healthy</a></div>
                                        <div class="blog-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                            elit,
                                            sed diam nonummy...</div>
                                        <div class="readmore"><a href="blog-detail.html">Read more</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Testimonial -->
            <div class="section testimonial layout-2">
                <div class="container">
                    <div class="row">
                        <div class="testimonial-wrap owl-theme owl-carousel">
                            <div class="item">
                                <div class="image"><img src="{{asset('frontend/img/testimonial-1.png')}}" alt=""></div>
                                <div class="content"><i class="fa fa-quote-left" aria-hidden="true"></i> Proin
                                    gravida
                                    nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi
                                    elit consequat ipsum, nec sagittis sem nibh id elit.”</div>
                                <div class="name">WILLIAM JAMES</div>
                                <div class="job">Hairstyle</div>
                            </div>

                            <div class="item">
                                <div class="image"><img src="{{asset('frontend/img/testimonial-2.png')}}" alt=""></div>
                                <div class="content"><i class="fa fa-quote-left" aria-hidden="true"></i> Proin
                                    gravida
                                    nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi
                                    elit consequat ipsum, nec sagittis sem nibh id elit.”</div>
                                <div class="name">WILLIAM JAMES</div>
                                <div class="job">Hairstyle</div>
                            </div>

                            <div class="item">
                                <div class="image"><img src="{{asset('frontend/img/testimonial-3.png')}}" alt=""></div>
                                <div class="content"><i class="fa fa-quote-left" aria-hidden="true"></i> Proin
                                    gravida
                                    nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi
                                    elit consequat ipsum, nec sagittis sem nibh id elit.”</div>
                                <div class="name">WILLIAM JAMES</div>
                                <div class="job">Hairstyle</div>
                            </div>

                            <div class="item">
                                <div class="image"><img src="{{asset('frontend/img/testimonial-2.png')}}" alt=""></div>
                                <div class="content"><i class="fa fa-quote-left" aria-hidden="true"></i> Proin
                                    gravida
                                    nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi
                                    elit consequat ipsum, nec sagittis sem nibh id elit.”</div>
                                <div class="name">WILLIAM JAMES</div>
                                <div class="job">Hairstyle</div>
                            </div>

                            <div class="item">
                                <div class="image"><img src="{{asset('frontend/img/testimonial-1.png')}}" alt=""></div>
                                <div class="content"><i class="fa fa-quote-left" aria-hidden="true"></i> Proin
                                    gravida
                                    nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi
                                    elit consequat ipsum, nec sagittis sem nibh id elit.”</div>
                                <div class="name">WILLIAM JAMES</div>
                                <div class="job">Hairstyle</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>


        <!-- Footer -->
        <footer id="footer">
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="footer-intro">
                                <a href="home-3.html" class="logo-footer">
                                    <img src="{{asset('frontend/img/logo-3.png')}}" alt="Logo">
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore </p>
                                <div class="social">
                                    <ul>
                                        <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-dribbble"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <div class="footer-top">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-col">
                                        <div class="block menu">
                                            <h2 class="block-title">Information</h2>

                                            <div class="block-content">
                                                <ul>
                                                    <li><a href="#">Specials</a></li>
                                                    <li><a href="#">New products</a></li>
                                                    <li><a href="#">Best sellers</a></li>
                                                    <li><a href="#">Terms and conditions</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-col">
                                        <div class="block menu">
                                            <h2 class="block-title">About Us</h2>

                                            <div class="block-content">
                                                <ul>
                                                    <li><a href="#">Who are we ?</a></li>
                                                    <li><a href="#">Delivery and return</a></li>
                                                    <li><a href="#">Size guide</a></li>
                                                    <li><a href="#">Legal Mentions</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-col">
                                        <div class="block menu">
                                            <h2 class="block-title">Your account</h2>

                                            <div class="block-content">
                                                <ul>
                                                    <li><a href="#">My merchandise returns</a></li>
                                                    <li><a href="#">My credit slips</a></li>
                                                    <li><a href="#">My addresses</a></li>
                                                    <li><a href="#">My personal info</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-col">
                                        <div class="block menu">
                                            <h2 class="block-title">Customer Service</h2>

                                            <div class="block-content">
                                                <ul>
                                                    <li><a href="#">Store Locator</a></li>
                                                    <li><a href="#">Returns Policy</a></li>
                                                    <li><a href="#">Order Tracking</a></li>
                                                    <li><a href="#">Give Back Box</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="footer-bottom">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 footer-left">
                                        <div class="block newsletter">
                                            <h2 class="block-title">Newsletter</h2>

                                            <div class="block-content">
                                                <p class="description">Sign up for newsletter to receive special
                                                    offers
                                                    and exclusive news about FreshMart products</p>
                                                <form action="#" method="post">
                                                    <input type="text" placeholder="Enter Your Email">
                                                    <button type="submit"
                                                        class="btn btn-primary">Subscribe</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 footer-right">
                                        <div class="block text">
                                            <h2 class="block-title">Contact Us</h2>

                                            <div class="block-content">
                                                <div class="contact">
                                                    <div class="item d-flex">
                                                        <div>
                                                            <i class="zmdi zmdi-home"></i>
                                                        </div>
                                                        <div>
                                                            <span>123 Suspendis matti, VST District, NY Accums, North
                                                                American</span>
                                                        </div>
                                                    </div>
                                                    <div class="item d-flex">
                                                        <div>
                                                            <i class="zmdi zmdi-phone-in-talk"></i>
                                                        </div>
                                                        <div>
                                                            <span>0123-456-78910<br>0987-654-32100</span>
                                                        </div>
                                                    </div>
                                                    <div class="item d-flex">
                                                        <div>
                                                            <i class="zmdi zmdi-email"></i>
                                                        </div>
                                                        <div>
                                                            <span><a
                                                                    href="mailto:support@domain.com">support@domain.com</a><br><a
                                                                    href="mailto:contact@domain.com">contact@domain.com</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="footer-copyright">
                                <div class="row">
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                        <div class="copyright"><a target="_blank"
                                                href="https://www.templateshub.net">Templates Hub</a></div>
                                    </div>
                                </div>

                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 align-right">
                                    <div class="payment">
                                        <img src="{{asset('frontend/img/payment.png')}}" alt="Payment">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection

