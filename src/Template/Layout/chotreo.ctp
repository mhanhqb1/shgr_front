<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Direo Template</title>
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,600,700" rel="stylesheet">
    <!-- inject:css-->
    <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/brands.css">
    <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/line-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/slick.css">
    <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/style.css">
    <!-- endinject -->
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $BASE_URL;?>/images/fevicon.png">
</head>

<body>
    <section class="intro-wrapper bgimage overlay overlay--dark">
        <div class="bg_image_holder"><img src="<?php echo $BASE_URL;?>/images/intro.jpg" alt=""></div>
        <div class="mainmenu-wrapper">
            <div class="menu-area menu1 menu--light">
                <div class="top-menu-area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="menu-fullwidth">
                                    <div class="logo-wrapper order-lg-0 order-sm-1">
                                        <div class="logo logo-top">
                                            <a href="index.html"><img src="<?php echo $BASE_URL;?>/images/logo-white.png" alt="logo image" class="img-fluid"></a>
                                        </div>
                                    </div><!-- ends: .logo-wrapper -->
                                    <div class="menu-container order-lg-1 order-sm-0">
                                        <div class="d_menu">
                                            <nav class="navbar navbar-expand-lg mainmenu__menu">
                                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#direo-navbar-collapse" aria-controls="direo-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                                                    <span class="navbar-toggler-icon icon-menu"><i class="la la-reorder"></i></span>
                                                </button>
                                                <!-- Collect the nav links, forms, and other content for toggling -->
                                                <div class="collapse navbar-collapse" id="direo-navbar-collapse">
                                                    <ul class="navbar-nav">
                                                        <li>
                                                            <a href="index.html">Home</a>
                                                        </li>
                                                        <li class="dropdown has_dropdown">
                                                            <a href="#" class="dropdown-toggle" id="drop3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listings</a>
                                                            <ul class="dropdown-menu" aria-labelledby="drop3">
                                                                <li><a href="all-listings-grid.html">Listing Grid</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /.navbar-collapse -->
                                            </nav>
                                        </div>
                                    </div>
                                    <div class="menu-right order-lg-2 order-sm-2"></div><!-- ends: .menu-right -->
                                </div>
                            </div>
                        </div>
                        <!-- end /.row -->
                    </div>
                    <!-- end /.container -->
                </div>
                <!-- end  -->
            </div>
        </div><!-- ends: .mainmenu-wrapper -->
        <div class="directory_content_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="search_title_area">
                            <h2 class="title">Yên tâm tuyệt đối khi mua sắm online</h2>
                            <p class="sub_title">Tìm ra nơi bán Giá Rẻ Nhất. Phát hiện Khuyến Mại Ảo. Hỗ trợ Tiki, Sendo, Shopee, Lazada, Adayroi, ...</p>
                        </div><!-- ends: .search_title_area -->
                        <form action="/" class="search_form">
                            <div class="atbd_seach_fields_wrapper">
                                <div class="single_search_field search_query">
                                    <input class="form-control search_fields" type="text" placeholder="Nhập thông tin sản phẩm bạn cần tìm?">
                                </div>
                                <div class="atbd_submit_btn">
                                    <button type="submit" class="btn btn-block btn-gradient btn-gradient-one btn-md btn_search">Search</button>
                                </div>
                            </div>
                        </form><!-- ends: .search_form -->
                        <div class="directory_home_category_area">
                            <ul class="categories">
                                <li>
                                    <a href="">
                                        <span class="color-primary"><i class="la la-cutlery"></i></span>
                                        Shopee
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="color-success"><i class="la la-map-marker"></i></span>
                                        Lazada
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="color-warning"><i class="la la-shopping-cart"></i></span>
                                        Tiki
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="color-danger"><i class="la la-bed"></i></span>
                                        Sendo
                                    </a>
                                </li>
                            </ul>
                        </div><!-- ends: .directory_home_category_area -->
                    </div><!-- ends: .col-lg-10 -->
                </div>
            </div>
        </div><!-- ends: .directory_search_area -->
    </section><!-- ends: .intro-wrapper -->
    <section class="categories-cards section-padding-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Danh mục</h2>
                        <p>Discover best things to do restaurants, shopping, hotels, cafes and places around the world by categories.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="category-single category--img">
                        <figure class="category--img4">
                            <img src="<?php echo $BASE_URL;?>/images/cat1.jpg" alt="">
                            <figcaption class="overlay-bg">
                                <a href="" class="cat-box">
                                    <div>
                                        <div class="icon">
                                            <span class="la la-cutlery"></span>
                                        </div>
                                        <h4 class="cat-name">Thiết bị điện tử</h4>
                                        <span class="badge badge-pill badge-success">48 Listings</span>
                                    </div>
                                </a>
                            </figcaption>
                        </figure>
                    </div><!-- ends: .category-single -->
                </div><!-- ends: .col -->
                <div class="col-lg-4 col-sm-6">
                    <div class="category-single category--img">
                        <figure class="category--img4">
                            <img src="<?php echo $BASE_URL;?>/images/cat2.jpg" alt="">
                            <figcaption class="overlay-bg">
                                <a href="" class="cat-box">
                                    <div>
                                        <div class="icon">
                                            <span class="la la-map-marker"></span>
                                        </div>
                                        <h4 class="cat-name">Sức khỏe & Làm đẹp</h4>
                                        <span class="badge badge-pill badge-success">74 Listings</span>
                                    </div>
                                </a>
                            </figcaption>
                        </figure>
                    </div><!-- ends: .category-single -->
                </div><!-- ends: .col -->
                <div class="col-lg-4 col-sm-6">
                    <div class="category-single category--img">
                        <figure class="category--img4">
                            <img src="<?php echo $BASE_URL;?>/images/cat3.jpg" alt="">
                            <figcaption class="overlay-bg">
                                <a href="" class="cat-box">
                                    <div>
                                        <div class="icon">
                                            <span class="la la-shopping-cart"></span>
                                        </div>
                                        <h4 class="cat-name">Thời trang nam & nữ</h4>
                                        <span class="badge badge-pill badge-success">27 Listings</span>
                                    </div>
                                </a>
                            </figcaption>
                        </figure>
                    </div><!-- ends: .category-single -->
                </div><!-- ends: .col -->
                <div class="col-lg-4 col-sm-6">
                    <div class="category-single category--img">
                        <figure class="category--img4">
                            <img src="<?php echo $BASE_URL;?>/images/cat4.jpg" alt="">
                            <figcaption class="overlay-bg">
                                <a href="" class="cat-box">
                                    <div>
                                        <div class="icon">
                                            <span class="la la-bank"></span>
                                        </div>
                                        <h4 class="cat-name">Siêu thị tạp hóa</h4>
                                        <span class="badge badge-pill badge-success">103 Listings</span>
                                    </div>
                                </a>
                            </figcaption>
                        </figure>
                    </div><!-- ends: .category-single -->
                </div><!-- ends: .col -->
                <div class="col-lg-4 col-sm-6">
                    <div class="category-single category--img">
                        <figure class="category--img4">
                            <img src="<?php echo $BASE_URL;?>/images/cat5.jpg" alt="">
                            <figcaption class="overlay-bg">
                                <a href="" class="cat-box">
                                    <div>
                                        <div class="icon">
                                            <span class="la la-bed"></span>
                                        </div>
                                        <h4 class="cat-name">Hàng gia dụng và đời sống</h4>
                                        <span class="badge badge-pill badge-success">11 Listings</span>
                                    </div>
                                </a>
                            </figcaption>
                        </figure>
                    </div><!-- ends: .category-single -->
                </div><!-- ends: .col -->
                <div class="col-lg-4 col-sm-6">
                    <div class="category-single category--img">
                        <figure class="category--img4">
                            <img src="<?php echo $BASE_URL;?>/images/cat6.jpg" alt="">
                            <figcaption class="overlay-bg">
                                <a href="" class="cat-box">
                                    <div>
                                        <div class="icon">
                                            <span class="la la-glass"></span>
                                        </div>
                                        <h4 class="cat-name">Sản phẩm khác</h4>
                                        <span class="badge badge-pill badge-success">29 Listings</span>
                                    </div>
                                </a>
                            </figcaption>
                        </figure>
                    </div><!-- ends: .category-single -->
                </div><!-- ends: .col -->
            </div>
        </div>
    </section><!-- ends: .categories-cards -->
    <section class="listing-cards section-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Sản phẩm <span>nổi bật</span></h2>
                        <p>Explore the popular listings around the world</p>
                    </div>
                </div>
                <div class="listing-cards-wrapper col-lg-12">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="atbd_single_listing ">
                                <article class="atbd_single_listing_wrapper">
                                    <figure class="atbd_listing_thumbnail_area">
                                        <div class="atbd_listing_image">
                                            <a href="">
                                                <img src="<?php echo $BASE_URL;?>/images/p1.jpg" alt="listing image">
                                            </a>
                                        </div><!-- ends: .atbd_listing_image -->
                                        <div class="atbd_author atbd_author--thumb">
                                            <a href="">
                                                <img src="<?php echo $BASE_URL;?>/images/author-thumb2.jpg" alt="Author Image">
                                                <span class="custom-tooltip">Jeffery A, Owner</span>
                                            </a>
                                        </div>
                                        <div class="atbd_thumbnail_overlay_content">
                                            <ul class="atbd_upper_badge">
                                                <li><span class="atbd_badge atbd_badge_featured">Featured</span></li>
                                            </ul><!-- ends .atbd_upper_badge -->
                                        </div><!-- ends: .atbd_thumbnail_overlay_content -->
                                    </figure><!-- ends: .atbd_listing_thumbnail_area -->
                                    <div class="atbd_listing_info">
                                        <div class="atbd_content_upper">
                                            <h4 class="atbd_listing_title">
                                                <a href="">Flanders Heat &amp; Air Systems</a>
                                            </h4>
                                            <div class="atbd_listing_meta">
                                                <span class="atbd_meta atbd_listing_price">$55.00</span>
                                                <span class="atbd_meta atbd_badge_open">Open Now</span>
                                            </div><!-- End atbd listing meta -->
                                            <div class="atbd_listing_data_list">
                                                <ul>
                                                    <li>
                                                        <p><span class="la la-calendar-check-o"></span>Posted 2 months ago</p>
                                                    </li>
                                                </ul>
                                            </div><!-- End atbd listing meta -->
                                        </div><!-- end .atbd_content_upper -->
                                        <div class="atbd_listing_bottom_content">
                                            <div class="atbd_content_left">
                                                <div class="atbd_listing_category">
                                                    <a href=""><span class="la la-glass"></span>Restaurant</a>
                                                </div>
                                            </div>
                                            <ul class="atbd_content_right">
                                                <li class="atbd_count"><span class="la la-eye"></span>900+</li>
                                                <li class="atbd_save">
                                                    <span class="la la-heart-o"></span>
                                                </li>
                                            </ul>
                                        </div><!-- end .atbd_listing_bottom_content -->
                                    </div><!-- ends: .atbd_listing_info -->
                                </article><!-- atbd_single_listing_wrapper -->
                            </div>
                        </div>
                        <div class="col-lg-12 text-center m-top-20">
                            <a href="" class="btn btn-gradient btn-gradient-two">Xem tất cả</a>
                        </div>
                    </div>
                </div><!-- ends: .listing-cards-wrapper -->
            </div>
        </div>
    </section><!-- ends: .listing-cards -->
    <section class="cta section-padding border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Why <span>Direo</span> for your Business?</h2>
                        <p>Explore the popular listings around the world</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <img src="<?php echo $BASE_URL;?>/images/svg/illustration-1.svg" alt="" class="svg">
                        </div>
                        <div class="col-lg-5 offset-lg-1 col-md-6 mt-5 mt-md-0">
                            <ul class="feature-list-wrapper list-unstyled">
                                <li>
                                    <div class="icon"><span class="circle-secondary"><i class="la la-check-circle"></i></span></div>
                                    <div class="list-content">
                                        <h4>Claim Listing</h4>
                                        <p>Excepteur sint occaecat cupidatat non proident sunt in culpa officia deserunt mollit.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><span class="circle-success"><i class="la la-money"></i></span></div>
                                    <div class="list-content">
                                        <h4>Paid Listing</h4>
                                        <p>Excepteur sint occaecat cupidatat non proident sunt in culpa officia deserunt mollit.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><span class="circle-primary"><i class="la la-line-chart"></i></span></div>
                                    <div class="list-content">
                                        <h4>Promote your Business</h4>
                                        <p>Excepteur sint occaecat cupidatat non proident sunt in culpa officia deserunt mollit.</p>
                                    </div>
                                </li>
                            </ul><!-- ends: .feature-list-wrapper -->
                            <ul class="action-btns list-unstyled">
                                <li><a href="" class="btn btn-success">See our Pricing</a></li>
                                <li><a href="" class="btn btn-primary">Submit Listings</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- ends: .cta -->
    <section class="places section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Khuyến mãi mới nhất</h2>
                        <p>Explore best listings around the world by city</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="cat-places-wrapper">
                        <div class="category-place-single">
                            <figure>
                                <a href=""><img src="<?php echo $BASE_URL;?>/images/place1.jpg" alt=""></a>
                                <figcaption>
                                    <h3>London, UK</h3>
                                    <p>68 Listings</p>
                                </figcaption>
                            </figure>
                        </div><!-- ends: .category-place-single -->
                        <div class="category-place-single">
                            <figure>
                                <a href=""><img src="<?php echo $BASE_URL;?>/images/place2.png" alt=""></a>
                                <figcaption>
                                    <h3>New York</h3>
                                    <p>68 Listings</p>
                                </figcaption>
                            </figure>
                        </div><!-- ends: .category-place-single -->
                        <div class="category-place-single">
                            <figure>
                                <a href=""><img src="<?php echo $BASE_URL;?>/images/place3.png" alt=""></a>
                                <figcaption>
                                    <h3>Sydney</h3>
                                    <p>68 Listings</p>
                                </figcaption>
                            </figure>
                        </div><!-- ends: .category-place-single -->
                        <div class="category-place-single">
                            <figure>
                                <a href=""><img src="<?php echo $BASE_URL;?>/images/place4.png" alt=""></a>
                                <figcaption>
                                    <h3>Paris, France</h3>
                                    <p>68 Listings</p>
                                </figcaption>
                            </figure>
                        </div><!-- ends: .category-place-single -->
                    </div><!-- ends: .col-lg-12 -->
                </div>
            </div>
        </div>
    </section><!-- ends: .places -->
    <section class="testimonial-wrapper section-padding--bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Đánh giá từ người dùng</h2>
                        <p>Here is what people say about Direo</p>
                    </div>
                </div><!-- ends: .col-lg-12 -->
                <div class="testimonial-carousel owl-carousel">
                    <div class="carousel-single">
                        <div class="author-thumb">
                            <img src="<?php echo $BASE_URL;?>/images/tthumb1.jpg" alt="" class="rounded-circle">
                        </div>
                        <div class="author-info">
                            <h4>Francis Burton</h4>
                            <span>Toronto, Canada</span>
                        </div>
                        <p class="author-comment">Excepteur sint occaecat cupidatat non proident sunt in culpa officia deserunt mollit anim laborum sint occaecat cupidatat non proident. Occaecat cupidatat non proident
                            culpa officia deserunt mollit.</p>
                    </div><!-- ends: .carousel-single -->
                    <div class="carousel-single">
                        <div class="author-thumb">
                            <img src="<?php echo $BASE_URL;?>/images/tthumb1.jpg" alt="" class="rounded-circle">
                        </div>
                        <div class="author-info">
                            <h4>Francis Burton</h4>
                            <span>Toronto, Canada</span>
                        </div>
                        <p class="author-comment">Excepteur sint occaecat cupidatat non proident sunt in culpa officia deserunt mollit anim laborum sint occaecat cupidatat non proident. Occaecat cupidatat non proident
                            culpa officia deserunt mollit.</p>
                    </div><!-- ends: .carousel-single -->
                    <div class="carousel-single">
                        <div class="author-thumb">
                            <img src="<?php echo $BASE_URL;?>/images/tthumb1.jpg" alt="" class="rounded-circle">
                        </div>
                        <div class="author-info">
                            <h4>Francis Burton</h4>
                            <span>Toronto, Canada</span>
                        </div>
                        <p class="author-comment">Excepteur sint occaecat cupidatat non proident sunt in culpa officia deserunt mollit anim laborum sint occaecat cupidatat non proident. Occaecat cupidatat non proident
                            culpa officia deserunt mollit.</p>
                    </div><!-- ends: .carousel-single -->
                </div><!-- ends: .testimonial-carousel -->
            </div>
        </div>
    </section><!-- ends: .testimonial-wrapper -->
    <section class="clients-logo-wrapper border-top p-top-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-carousel owl-carousel">
                        <div class="carousel-single">
                            <img src="<?php echo $BASE_URL;?>/images/shopee-logo.png" alt="">
                        </div>
                        <div class="carousel-single">
                            <img src="<?php echo $BASE_URL;?>/images/tiki-logo.png" alt="">
                        </div>
                        <div class="carousel-single">
                            <img src="<?php echo $BASE_URL;?>/images/sendo-logo.png" alt="">
                        </div>
                        <div class="carousel-single">
                            <img src="<?php echo $BASE_URL;?>/images/lazada-logo.png" alt="">
                        </div>
                        <div class="carousel-single">
                            <img src="<?php echo $BASE_URL;?>/images/adayroi-logo.png" alt="">
                        </div>
                        <div class="carousel-single">
                            <img src="<?php echo $BASE_URL;?>/images/fptshop-logo.png" alt="">
                        </div>
                    </div><!-- ends: .logo-carousel -->
                </div>
            </div>
        </div>
    </section><!-- ends: .clients-logo-wrapper -->
    <section class="subscribe-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1>Đăng ký nhận tin khuyến mãi</h1>
                    <p>Subscribe to get update and information. Don't worry, we won't send spam!</p>
                    <form action="/" class="subscribe-form m-top-40">
                        <div class="form-group">
                            <span class="la la-envelope-o"></span>
                            <input type="text" placeholder="Enter your email" required>
                        </div>
                        <button class="btn btn-gradient btn-gradient-one">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section><!-- ends: .subscribe-wrapper -->
    <footer class="footer-three footer-grey p-top-95">
        <div class="footer-top p-bottom-25">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-sm-6">
                        <div class="widget widget_pages">
                            <h2 class="widget-title">Company Info</h2>
                            <ul class="list-unstyled">
                                <li class="page-item"><a href="">About Us</a></li>
                                <li class="page-item"><a href="">Conact Us</a></li>
                                <li class="page-item"><a href="">Our Listings</a></li>
                                <li class="page-item"><a href="">Our Pricings</a></li>
                                <li class="page-item"><a href="">Support</a></li>
                                <li class="page-item"><a href="">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div><!-- ends: .col-lg-3 -->
                    <div class="col-lg-3 d-flex justify-content-lg-center  col-sm-6">
                        <div class="widget widget_pages">
                            <h2 class="widget-title">Helpful Links</h2>
                            <ul class="list-unstyled">
                                <li class="page-item"><a href="">Join Direo</a></li>
                                <li class="page-item"><a href="">Sign In</a></li>
                                <li class="page-item"><a href="">How it Work</a></li>
                                <li class="page-item"><a href="">Advantages</a></li>
                                <li class="page-item"><a href="">Direo App</a></li>
                                <li class="page-item"><a href="">Packages</a></li>
                            </ul>
                        </div>
                    </div><!-- ends: .col-lg-3 -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget widget_social">
                            <h2 class="widget-title">Connect with Us</h2>
                            <ul class="list-unstyled social-list">
                                <li><a href=""><span class="mail"><i class="la la-envelope"></i></span> Contact Support</a></li>
                                <li><a href=""><span class="twitter"><i class="fab fa-twitter"></i></span> Twitter</a></li>
                                <li><a href=""><span class="facebook"><i class="fab fa-facebook-f"></i></span> Facebook</a></li>
                                <li><a href=""><span class="instagram"><i class="fab fa-instagram"></i></span> Instagram</a></li>
                                <li><a href=""><span class="gplus"><i class="fab fa-google-plus-g"></i></span> Google+</a></li>
                            </ul>
                        </div><!-- ends: .widget -->
                    </div><!-- ends: .col-lg-3 -->
                    <div class="col-lg-4 col-sm-6">
                        <div class="widget widget_text">
                            <h2 class="widget-title">Direo on Mobile</h2>
                            <div class="textwidget">
                                <p>Download the Direo app today so you can find your events anytime, anywhere.</p>
                                <ul class="list-unstyled store-btns">
                                    <li><a href="" class="btn-gradient btn-gradient-two btn btn-md btn-icon icon-left"><span class="fab fa-apple"></span> App Store</a></li>
                                    <li><a href="" class="btn btn-dark btn-md btn-icon btn-icon"><span class="fab fa-android"></span> Google Play</a></li>
                                </ul>
                            </div>
                        </div><!-- ends: .widget -->
                    </div><!-- ends: .col-lg-3 -->
                </div>
            </div>
        </div><!-- ends: .footer-top -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-bottom--content">
                            <a href="" class="footer-logo"><img src="<?php echo $BASE_URL;?>/images/logo.png" alt=""></a>
                            <p class="m-0 copy-text">©2019 Direo. Made with <span class="la la-heart-o"></span> by <a href="">Aazztech</a></p>
                            <ul class="list-unstyled lng-list">
                                <li><a href="">English</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- ends: .footer-bottom -->
    </footer><!-- ends: .footer -->
    <!-- inject:js-->
    <script src="<?php echo $BASE_URL;?>/js/jquery/jquery-1.12.3.js"></script>
    <script src="<?php echo $BASE_URL;?>/js/bootstrap/popper.js"></script>
    <script src="<?php echo $BASE_URL;?>/js/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo $BASE_URL;?>/js/jquery-ui.min.js"></script>
    <script src="<?php echo $BASE_URL;?>/js/jquery.barrating.min.js"></script>
    <script src="<?php echo $BASE_URL;?>/js/jquery.counterup.min.js"></script>
    <script src="<?php echo $BASE_URL;?>/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo $BASE_URL;?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo $BASE_URL;?>/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo $BASE_URL;?>/js/masonry.pkgd.min.js"></script>
    <script src="<?php echo $BASE_URL;?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo $BASE_URL;?>/js/select2.full.min.js"></script>
    <script src="<?php echo $BASE_URL;?>/js/slick.min.js"></script>
    <script src="<?php echo $BASE_URL;?>/js/main.js"></script>
    <!-- endinject-->
</body>

</html>