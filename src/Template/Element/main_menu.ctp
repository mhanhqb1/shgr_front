<div class="mainmenu-wrapper">
    <div class="menu-area menu1 menu--light">
        <div class="top-menu-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-fullwidth">
                            <div class="logo-wrapper order-lg-0 order-sm-1">
                                <div class="logo logo-top">
                                    <a href="<?php echo $BASE_URL; ?>"><img src="<?php echo $BASE_URL; ?>/images/logo-white.png" alt="logo image" class="img-fluid"></a>
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
                                                    <a href="<?php echo $BASE_URL; ?>">Trang chủ</a>
                                                </li>
                                                <li class="dropdown has_dropdown">
                                                    <a href="#" class="dropdown-toggle" id="drop1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danh mục sản phẩm</a>
                                                    <ul class="dropdown-menu" aria-labelledby="drop1">
                                                        <?php if (!empty($_settings['cates'])): ?>
                                                            <?php foreach ($_settings['cates'] as $cate): ?>
                                                                <li>
                                                                    <a href="<?php echo $BASE_URL; ?>/danh-muc/<?php echo $cate['slug']; ?>" ><?php echo $cate['name']; ?></a>
                                                                </li>
                                                        <?php endforeach; endif; ?>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $BASE_URL; ?>">Flash Sale</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $BASE_URL; ?>/khuyen-mai">Khuyến mãi</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $BASE_URL; ?>">Sản phẩm hot</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $BASE_URL; ?>">Mã giảm giá</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.navbar-collapse -->
                                    </nav>
                                </div>
                            </div>
                            <div class="menu-right order-lg-2 order-sm-2">
                                <div class="search-wrapper">
                                    <div class="nav_right_module search_module">
                                        <span class="icon-left" id="basic-addon9"><i class="la la-search"></i></span>
                                        <div class="search_area">
                                            <form action="<?php echo $BASE_URL;?>/tim-kiem" method="GET" style="margin-block-end: 0;">
                                                <div class="input-group input-group-light">
                                                    <input type="text" name="s" class="form-control search_field top-search-field" placeholder="Nhập tên hoặc link sản phẩm bạn cần tìm?" autocomplete="off">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- ends: .menu-right -->
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