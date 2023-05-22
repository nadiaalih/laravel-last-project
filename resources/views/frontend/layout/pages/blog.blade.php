@extends('frontend.layout.shared')
@section('content')
<body class="home home-1">
    <div id="all">
        <!-- Header -->
@include('frontend.layout.shared.header')


        <!-- Main Content -->
        <div id="content" class="site-content">
            <!-- Breadcrumb -->
            <div id="breadcrumb">
                <div class="container">
                    <h2 class="title">Our Blog</h2>

                    <ul class="breadcrumb">
                        <li><a href="#" title="Home">Home</a></li>
                        <li><span>Our Blog</span></li>
                    </ul>
                </div>
            </div>


            <div class="container">
                <div class="row">
                    <!-- Sidebar -->
                    <div id="left-column" class="sidebar col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <!-- Block - Product Categories -->
                        <div class="block product-categories">
                            <h3 class="block-title">Categories</h3>

                            <div class="block-content">
                                <div class="item">
                                    <span class="arrow collapsed" data-toggle="collapse" data-target="#vegetables" aria-expanded="false" role="button">
                                        <i class="zmdi zmdi-minus"></i>
                                        <i class="zmdi zmdi-plus"></i>
                                    </span>

                                    <a class="category-title" href="product-grid-left-sidebar.html">Vegetables</a>
                                    <div class="sub-category collapse" id="vegetables" aria-expanded="true" role="main">
                                        <div class="item">
                                            <a href="product-grid-left-sidebar.html">Tomato</a>
                                        </div>
                                        <div class="item">
                                            <a href="product-grid-left-sidebar.html">Broccoli</a>
                                        </div>
                                        <div class="item">
                                            <a href="product-grid-left-sidebar.html">Cabbage</a>
                                        </div>
                                        <div class="item">
                                            <a href="product-grid-left-sidebar.html">Cucumber</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <span class="arrow collapsed" data-toggle="collapse" data-target="#fruits" aria-expanded="false" role="button">
                                        <i class="zmdi zmdi-minus"></i>
                                        <i class="zmdi zmdi-plus"></i>
                                    </span>

                                    <a class="category-title" href="product-grid-left-sidebar.html">Fruits</a>
                                    <div class="sub-category collapse" id="fruits" aria-expanded="true" role="main">
                                        <div class="item">
                                            <a href="product-grid-left-sidebar.html">Orange</a>
                                        </div>
                                        <div class="item">
                                            <a href="product-grid-left-sidebar.html">Apple</a>
                                        </div>
                                        <div class="item">
                                            <a href="product-grid-left-sidebar.html">Banana</a>
                                        </div>
                                        <div class="item">
                                            <a href="product-grid-left-sidebar.html">Strawberry</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <span class="arrow collapsed" data-toggle="collapse" data-target="#juices" aria-expanded="false" role="button">
                                        <i class="zmdi zmdi-minus"></i>
                                        <i class="zmdi zmdi-plus"></i>
                                    </span>

                                    <a class="category-title" href="product-grid-left-sidebar.html">Juices</a>
                                    <div class="sub-category collapse" id="juices" aria-expanded="true" role="main">
                                        <div class="item">
                                            <a href="product-grid-left-sidebar.html">Orange Juices</a>
                                        </div>
                                        <div class="item">
                                            <a href="product-grid-left-sidebar.html">Tomato Juices</a>
                                        </div>
                                        <div class="item">
                                            <a href="product-grid-left-sidebar.html">Apple Juices</a>
                                        </div>
                                        <div class="item">
                                            <a href="product-grid-left-sidebar.html">Peaches Juices</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <a class="category-title" href="product-grid-left-sidebar.html">Tea and Coffee</a>
                                </div>

                                <div class="item">
                                    <a class="category-title" href="product-grid-left-sidebar.html">Jam</a>
                                </div>

                                <div class="item">
                                    <a class="category-title" href="product-grid-left-sidebar.html">SeaFood</a>
                                </div>

                                <div class="item">
                                    <a class="category-title" href="product-grid-left-sidebar.html">Fresh Meats</a>
                                </div>
                            </div>
                        </div>


                        <!-- Block - Recent Posts -->
                        <div class="block posts recent-posts">
                            <h3 class="block-title">Recent Posts</h3>

                            <div class="block-content">
                                <div class="post-item">
                                    <a class="post-title" href="blog-detail.html">5 Best Fruits To Make You Fresh And Healthy</a>
                                    <div class="post-info">
                                        <span class="comment item"><i class="zmdi zmdi-comments"></i>2 Comments</span>
                                        <span class="date item"><i class="zmdi zmdi-calendar-note"></i>14 Mar, 2018</span>
                                    </div>
                                    <div class="post-description">Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor, nisi elit consequat ipsum... </div>
                                    <div class="post-readmore"><a href="blog-detail.html">Read more</a></div>
                                </div>

                                <div class="post-item">
                                    <a class="post-title" href="blog-detail.html">5 Best Fruits To Make You Fresh And Healthy</a>
                                    <div class="post-info">
                                        <span class="comment item"><i class="zmdi zmdi-comments"></i>2 Comments</span>
                                        <span class="date item"><i class="zmdi zmdi-calendar-note"></i>14 Mar, 2018</span>
                                    </div>
                                    <div class="post-description">Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor, nisi elit consequat ipsum... </div>
                                    <div class="post-readmore"><a href="blog-detail.html">Read more</a></div>
                                </div>
                            </div>
                        </div>

                        <!-- Block - Blog Tags -->
                        <div class="block tags blog-tags">
                            <h3 class="block-title">Blog Tags</h3>

                            <div class="block-content">
                                <ul>
                                    <li><a href="#" title="Hot Trend">Hot Trend</a></li>
                                    <li><a href="#" title="Jewelry">Jewelry</a></li>
                                    <li><a href="#" title="Man">Man</a></li>
                                    <li><a href="#" title="Party">Party</a></li>
                                    <li><a href="#" title="SamSung">SamSung</a></li>
                                    <li><a href="#" title="Shirt Dresses">Shirt Dresses</a></li>
                                    <li><a href="#" title="Shoes">Shoes</a></li>
                                    <li><a href="#" title="Summer">Summer</a></li>
                                    <li><a href="#" title="Sweaters">Sweaters</a></li>
                                    <li><a href="#" title="Winter">Winter</a></li>
                                    <li><a href="#" title="Woman">Woman</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Block - Banner -->
                        <div class="block banner">
                            <div class="block-content">
                                <div class="effect">
                                    <img class="img-responsive" src="./assets/img/blog-banner.jpg')}}" alt="Banner">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Page Content -->
                    <div id="center-column" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="blog-list">
                            <div class="posts-list">
                                <div class="post-item">
                                    <div class="post-image">
                                        <a href="blog-detail.html">
                                            <img class="img-responsive" src="{{asset('frontend/img/blog/blog-1.jpg')}}" alt="Blog Image">
                                        </a>
                                    </div>
                                    <a class="post-title" href="blog-detail.html">5 Best Fruits To Make You Fresh And Healthy</a>
                                    <div class="post-info">
                                        <span class="comment item"><i class="zmdi zmdi-comments"></i>2 Comments</span>
                                        <span class="date item"><i class="zmdi zmdi-calendar-note"></i>14 Mar, 2018</span>
                                    </div>
                                    <div class="post-description">
                                        Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagit tis sem nibh id elit. Duis sed odio sit amet nibh vultate cursus a sit amet mauris. Proin gravida nibh vel velit...
                                        <span class="post-readmore"><a href="blog-detail.html">view more</a></span>
                                    </div>
                                </div>

                                <div class="post-item">
                                    <div class="post-image">
                                        <a href="blog-detail.html">
                                            <img class="img-responsive" src="./assets/img/blog/blog-2.jpg')}}" alt="Blog Image">
                                        </a>
                                    </div>
                                    <a class="post-title" href="blog-detail.html">5 Best Fruits To Make You Fresh And Healthy</a>
                                    <div class="post-info">
                                        <span class="comment item"><i class="zmdi zmdi-comments"></i>2 Comments</span>
                                        <span class="date item"><i class="zmdi zmdi-calendar-note"></i>14 Mar, 2018</span>
                                    </div>
                                    <div class="post-description">
                                        Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagit tis sem nibh id elit. Duis sed odio sit amet nibh vultate cursus a sit amet mauris. Proin gravida nibh vel velit...
                                        <span class="post-readmore"><a href="blog-detail.html">view more</a></span>
                                    </div>
                                </div>

                                <div class="post-item">
                                    <div class="post-image">
                                        <a href="blog-detail.html">
                                            <img class="img-responsive" src="./assets/img/blog/blog-3.jpg')}}" alt="Blog Image">
                                        </a>
                                    </div>
                                    <a class="post-title" href="blog-detail.html">5 Best Fruits To Make You Fresh And Healthy</a>
                                    <div class="post-info">
                                        <span class="comment item"><i class="zmdi zmdi-comments"></i>2 Comments</span>
                                        <span class="date item"><i class="zmdi zmdi-calendar-note"></i>14 Mar, 2018</span>
                                    </div>
                                    <div class="post-description">
                                        Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagit tis sem nibh id elit. Duis sed odio sit amet nibh vultate cursus a sit amet mauris. Proin gravida nibh vel velit...
                                        <span class="post-readmore"><a href="blog-detail.html">view more</a></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Pagination Bar -->
                            <div class="pagination-bar">
                                <div class="pagination">
                                    <ul class="page-list">
                                        <li><a href="#" class="prev">Previous</a></li>
                                        <li><a href="#" class="current">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#" class="next">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @include('frontend.layout.shared.footer')



@endsection
