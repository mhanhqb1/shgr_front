<section class="categories-cards section-padding-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Danh mục sản phẩm</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php if(!empty($_settings['cates'])): ?>
            <?php foreach ($_settings['cates'] as $cate): ?>
                <div class="col-lg-4 col-sm-6">
                    <div class="category-single category--img">
                        <figure class="category--img4">
                            <img src="<?php echo $BASE_URL; ?>/images/<?php echo $cate['image'];?>" alt="">
                            <figcaption class="overlay-bg">
                                <a href="" class="cat-box">
                                    <div>
                                        <div class="icon">
                                            <span class="la <?php echo $cate['icon'];?>"></span>
                                        </div>
                                        <h4 class="cat-name"><?php echo $cate['name'];?></h4>
                                        <span class="badge badge-pill badge-success">500.000+ sản phẩm</span>
                                    </div>
                                </a>
                            </figcaption>
                        </figure>
                    </div><!-- ends: .category-single -->
                </div><!-- ends: .col -->
            <?php endforeach; ?>
            <?php endif;?>
        </div>
    </div>
</section><!-- ends: .categories-cards -->
<section class="listing-cards section-bg section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Sản phẩm <span>nổi bật</span></h2>
                    <p>Danh sách các sản phẩm được yêu thích</p>
                </div>
            </div>
            <div class="listing-cards-wrapper col-lg-12">
                <div class="row">
                    <?php if (!empty($data['products'])):?>
                    <?php foreach ($data['products'] as $p): ?>
                    <div class="col-lg-3 col-sm-4 col-xs-6">
                        <?php echo $this->element('product_item', $p);?>
                    </div>
                    <?php endforeach; ?>
                    <?php endif;?>
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
                    <h2>Tính năng nổi bật</h2>
                    <p>Tại sao nên sử dụng <span>ChoTreo.Com</span> khi mua hàng online</p>
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
                                <div class="icon"><span class="circle-primary"><i class="la la-line-chart"></i></span></div>
                                <div class="list-content">
                                    <h4>Yên tâm mua sắm</h4>
                                    <p>Tìm nơi bán rẻ, cảnh báo giá hớ, ... ngay trong lúc shopping</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon"><span class="circle-secondary"><i class="la la-check-circle"></i></span></div>
                                <div class="list-content">
                                    <h4>Theo dõi sản phẩm</h4>
                                    <p>Theo dõi sản phẩm bạn yêu thích, thông báo khi sản phẩm giảm giá.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon"><span class="circle-success"><i class="la la-money"></i></span></div>
                                <div class="list-content">
                                    <h4>Tiết kiệm chi phí</h4>
                                    <p>Tìm thông tin khuyến mãi, mã giảm giá cho các sản phẩm.</p>
                                </div>
                            </li>
                        </ul><!-- ends: .feature-list-wrapper -->
<!--                        <ul class="action-btns list-unstyled">
                            <li><a href="" class="btn btn-success">See our Pricing</a></li>
                            <li><a href="" class="btn btn-primary">Submit Listings</a></li>
                        </ul>-->
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
                <?php foreach ($data['reviews'] as $r): ?>
                <div class="carousel-single">
                    <div class="author-thumb">
                        <img src="<?php echo $r['image'];?>" alt="Đánh giá ChoTreo" class="rounded-circle">
                    </div>
                    <div class="author-info">
                        <h4><?php echo $r['name'];?></h4>
                        <span><?php echo $r['note'];?></span>
                    </div>
                    <p class="author-comment"><?php echo $r['message'];?></p>
                </div><!-- ends: .carousel-single -->
                <?php endforeach; ?>
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