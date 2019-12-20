<footer class="footer-three footer-grey p-top-95">
    <div class="footer-top p-bottom-25">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-sm-6">
                    <div class="widget widget_pages">
                        <h2 class="widget-title">Website</h2>
                        <ul class="list-unstyled">
                            <li class="page-item"><a href="">Giới thiệu</a></li>
                            <li class="page-item"><a href="">Liên hệ</a></li>
                            <li class="page-item"><a href="">Hỗ trợ</a></li>
                            <li class="page-item"><a href="">Quyền riêng tư</a></li>
                            <li class="page-item"><a href="">Điều khoản</a></li>
                        </ul>
                    </div>
                </div><!-- ends: .col-lg-3 -->
                <div class="col-lg-3 d-flex justify-content-lg-center  col-sm-6">
                    <div class="widget widget_pages">
                        <h2 class="widget-title">Danh mục sản phẩm</h2>
                        <ul class="list-unstyled">
                            <?php if (!empty($_settings['cates'])): ?>
                                <?php foreach ($_settings['cates'] as $cate): ?>
                                    <li class="page-item">
                                        <a href="<?php echo $BASE_URL; ?>/danh-muc/<?php echo $cate['slug']; ?>" ><?php echo $cate['name']; ?></a>
                                    </li>
                            <?php endforeach; endif; ?>
                        </ul>
                    </div>
                </div><!-- ends: .col-lg-3 -->
                <div class="col-lg-3 col-sm-6">
                    <div class="widget widget_social">
                        <h2 class="widget-title">Liên hệ</h2>
                        <ul class="list-unstyled social-list">
                            <?php if (!empty($_settings['social'])): ?>
                                <?php foreach ($_settings['social'] as $s): ?>
                                    <li>
                                        <a href="<?php echo $s['url'];?>" ><span class="<?php echo $s['class'];?>"><i class="fab <?php echo $s['icon'];?>"></i></span> <?php echo $s['name'];?></a>
                                    </li>
                            <?php endforeach; endif; ?>
                        </ul>
                    </div><!-- ends: .widget -->
                </div><!-- ends: .col-lg-3 -->
                <div class="col-lg-4 col-sm-6">
                    <div class="widget widget_text">
                        <h2 class="widget-title">Ứng dụng ChoTreo.Com</h2>
                        <div class="textwidget">
                            <p>Tải ứng dụng ChoTreo ngay hôm nay để yên tâm khi mua sắm online.</p>
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
                        <a href="" class="footer-logo"><img src="<?php echo $BASE_URL; ?>/images/logo.png" alt=""></a>
                        <p class="m-0 copy-text">©2019 ChoTreo.Com. Made with <span class="la la-heart-o"></span> by <a href="https://hoanganholine.com">HoangAnhOnline.Com</a></p>
                        <ul class="list-unstyled lng-list">
                            <li><a href="">Tiếng Việt</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- ends: .footer-bottom -->
</footer><!-- ends: .footer -->