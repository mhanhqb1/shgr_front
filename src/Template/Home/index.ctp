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
                        <img src="<?php echo $BASE_URL; ?>/images/cat1.jpg" alt="">
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
                        <img src="<?php echo $BASE_URL; ?>/images/cat2.jpg" alt="">
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
                        <img src="<?php echo $BASE_URL; ?>/images/cat3.jpg" alt="">
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
                        <img src="<?php echo $BASE_URL; ?>/images/cat4.jpg" alt="">
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
                        <img src="<?php echo $BASE_URL; ?>/images/cat5.jpg" alt="">
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
                        <img src="<?php echo $BASE_URL; ?>/images/cat6.jpg" alt="">
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
                    <?php for ($i = 0; $i < 24; $i++): ?>
                    <div class="col-lg-3 col-sm-4 col-xs-6">
                        <?php echo $this->element('product_item');?>
                    </div>
                    <?php endfor;?>
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
                        <img src="<?php echo $BASE_URL; ?>/images/svg/illustration-1.svg" alt="" class="svg">
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
                    <p>Thông tin khuyến mãi mới nhất, cập nhật liên tục 24/24.</p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="cat-places-wrapper">
                    <div class="category-place-single">
                        <figure>
                            <a href=""><img src="<?php echo $BASE_URL; ?>/images/place1.jpg" alt=""></a>
                            <figcaption>
                                <h3>London, UK</h3>
                                <p>68 Listings</p>
                            </figcaption>
                        </figure>
                    </div><!-- ends: .category-place-single -->
                    <div class="category-place-single">
                        <figure>
                            <a href=""><img src="<?php echo $BASE_URL; ?>/images/place2.png" alt=""></a>
                            <figcaption>
                                <h3>New York</h3>
                                <p>68 Listings</p>
                            </figcaption>
                        </figure>
                    </div><!-- ends: .category-place-single -->
                    <div class="category-place-single">
                        <figure>
                            <a href=""><img src="<?php echo $BASE_URL; ?>/images/place3.png" alt=""></a>
                            <figcaption>
                                <h3>Sydney</h3>
                                <p>68 Listings</p>
                            </figcaption>
                        </figure>
                    </div><!-- ends: .category-place-single -->
                    <div class="category-place-single">
                        <figure>
                            <a href=""><img src="<?php echo $BASE_URL; ?>/images/place4.png" alt=""></a>
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
                    <h2>Đánh giá</h2>
                    <p>Người dùng nói về website ChoTreo.Com</p>
                </div>
            </div><!-- ends: .col-lg-12 -->
            <div class="testimonial-carousel owl-carousel">
                <div class="carousel-single">
                    <div class="author-thumb">
                        <img src="<?php echo $BASE_URL; ?>/images/tthumb1.jpg" alt="" class="rounded-circle">
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
                        <img src="<?php echo $BASE_URL; ?>/images/tthumb1.jpg" alt="" class="rounded-circle">
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
                        <img src="<?php echo $BASE_URL; ?>/images/tthumb1.jpg" alt="" class="rounded-circle">
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
                        <img src="<?php echo $BASE_URL; ?>/images/shopee-logo.png" alt="">
                    </div>
                    <div class="carousel-single">
                        <img src="<?php echo $BASE_URL; ?>/images/tiki-logo.png" alt="">
                    </div>
                    <div class="carousel-single">
                        <img src="<?php echo $BASE_URL; ?>/images/sendo-logo.png" alt="">
                    </div>
                    <div class="carousel-single">
                        <img src="<?php echo $BASE_URL; ?>/images/lazada-logo.png" alt="">
                    </div>
                    <div class="carousel-single">
                        <img src="<?php echo $BASE_URL; ?>/images/adayroi-logo.png" alt="">
                    </div>
                    <div class="carousel-single">
                        <img src="<?php echo $BASE_URL; ?>/images/fptshop-logo.png" alt="">
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
                <p>Đăng ký để nhận được thông tin khuyến mãi mới nhất. Đừng lo lắng, chúng tôi sẽ không gửi thư rác!</p>
                <form action="/" class="subscribe-form m-top-40">
                    <div class="form-group">
                        <span class="la la-envelope-o"></span>
                        <input type="text" placeholder="Nhập email của bạn" required>
                    </div>
                    <button class="btn btn-gradient btn-gradient-one">Đăng ký</button>
                </form>
            </div>
        </div>
    </div>
</section><!-- ends: .subscribe-wrapper -->