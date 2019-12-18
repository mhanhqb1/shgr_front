<div class="mainmenu-wrapper">
    <div class="menu-area menu1 menu--light">
        <div class="top-menu-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-fullwidth">
                            <div class="logo-wrapper order-lg-0 order-sm-1">
                                <div class="logo logo-top">
                                    <a href="<?php echo $BASE_URL;?>"><img src="<?php echo $BASE_URL; ?>/images/logo-white.png" alt="logo image" class="img-fluid"></a>
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
                                                    <a href="<?php echo $BASE_URL;?>">Home</a>
                                                </li>
                                                <?php if(!empty($_settings['cates'])): ?>
                                                <?php foreach ($_settings['cates'] as $cate): ?>
                                                <li>
                                                    <a href="<?php echo $BASE_URL;?>/danh-muc/<?php echo $cate['slug'];?>" ><?php echo $cate['name'];?></a>
                                                </li>
                                                <?php endforeach; endif;?>
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