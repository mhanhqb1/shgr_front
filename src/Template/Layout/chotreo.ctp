<?php
$pageTitle = !empty($pageTitle) ? $pageTitle : '';
?>
<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo $pageTitle;?></title>
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,600,700" rel="stylesheet">
        <!-- inject:css-->
        <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/css/bootstrap/bootstrap.css">
        <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/css/brands.css">
        <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/css/fontawesome.min.css">
        <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/css/jquery-ui.css">
        <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/css/jquery.mCustomScrollbar.css">
        <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/css/line-awesome.min.css">
        <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/css/magnific-popup.css">
        <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/css/select2.min.css">
        <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/css/slick.css">
        <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/css/style.css">
        <!-- endinject -->
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $BASE_URL; ?>/images/fevicon.png">
        <script type="text/javascript">
            var __atsmarttag = {
                pub_id: '4666880670937288602'
            };
            (function () {
                var script = document.createElement('script');
                script.src = '//static.accesstrade.vn/js/atsmarttag.min.js?v=1.1.0';
                script.type = 'text/javascript';
                script.async = true;
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
            })();
        </script>
    </head>

    <body>
        <section class="<?php echo ($controller == 'home') ? 'intro-wrapper' : 'header-breadcrumb';?> bgimage overlay overlay--dark">
            <?php echo $this->element('main_menu'); ?>
            <?php if ($controller == 'home'):?>
                <?php echo $this->element('homepage/search_area'); ?>
            <?php else:?>
                <div class="bg_image_holder"><img src="<?php echo $BASE_URL; ?>/images/breadcrumb1.jpg" alt=""></div>
                <div class="breadcrumb-wrapper content_above">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h1 class="page-title"><?php echo $pageTitle;?></h1>
<!--                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">All Listings</li>
                                    </ol>
                                </nav>-->
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif;?>
        </section><!-- ends: .intro-wrapper -->

        <?php echo $this->fetch('content'); ?>

        <?php echo $this->element('footer'); ?>
        
        <script type="text/javascript">
            var BASE_URL = '<?php echo $BASE_URL; ?>';
            var controller = '<?php echo $controller; ?>';
            var action = '<?php echo $action; ?>';
            var currentUrl = '<?php echo $current_url; ?>';
            var referer = '<?php echo $referer; ?>';
            var _csrfToken = '<?php echo $this->request->getParam('_csrfToken'); ?>';
        </script>

        <!-- inject:js-->
        <script src="<?php echo $BASE_URL; ?>/js/jquery/jquery-1.12.3.js"></script>
        <script src="<?php echo $BASE_URL; ?>/js/bootstrap/popper.js"></script>
        <script src="<?php echo $BASE_URL; ?>/js/bootstrap/bootstrap.min.js"></script>
        <script src="<?php echo $BASE_URL; ?>/js/jquery-ui.min.js"></script>
        <script src="<?php echo $BASE_URL; ?>/js/jquery.barrating.min.js"></script>
        <script src="<?php echo $BASE_URL; ?>/js/jquery.counterup.min.js"></script>
        <script src="<?php echo $BASE_URL; ?>/js/jquery.magnific-popup.min.js"></script>
        <script src="<?php echo $BASE_URL; ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="<?php echo $BASE_URL; ?>/js/jquery.waypoints.min.js"></script>
        <script src="<?php echo $BASE_URL; ?>/js/masonry.pkgd.min.js"></script>
        <script src="<?php echo $BASE_URL; ?>/js/owl.carousel.min.js"></script>
        <script src="<?php echo $BASE_URL; ?>/js/select2.full.min.js"></script>
        <script src="<?php echo $BASE_URL; ?>/js/slick.min.js"></script>
        <script src="<?php echo $BASE_URL; ?>/js/main.js"></script>
        <!-- endinject-->
    </body>

</html>