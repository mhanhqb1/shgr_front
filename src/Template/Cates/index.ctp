<section class="all-listing-wrapper section-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="atbd_generic_header">
                    <div class="atbd_generic_header_title">
                        <!--<h4>Sản phẩm</h4>-->
                        <p>Tổng sản phẩm: <?php echo $total; ?></p>
                    </div><!-- ends: .atbd_generic_header_title -->
                    <div class="atbd_listing_action_btn btn-toolbar align-items-center" role="toolbar">
                        <!-- Views dropdown -->
                        <div class="view-mode">
                            <a class="action-btn" href="#"><span class="la la-th-large"></span></a>
                            <a class="action-btn active" href="#"><span class="la la-list"></span></a>
                        </div>
                        <!-- Orderby dropdown -->
                        <div class="dropdown">
                            <a class="action-btn dropdown-toggle" href="" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sort by <span class="caret"></span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                <a class="dropdown-item" href="">A to Z ( title )</a>
                                <a class="dropdown-item" href="">Z to A ( title )</a>
                                <a class="dropdown-item active" href="">Latest listings</a>
                                <a class="dropdown-item" href="">Oldest listings</a>
                                <a class="dropdown-item" href="">Popular listings</a>
                                <a class="dropdown-item" href="">Price ( low to high )</a>
                                <a class="dropdown-item" href="">Price ( high to low )</a>
                                <a class="dropdown-item" href="">Random listings</a>
                            </div>
                        </div>
                    </div><!-- ends: .atbd_listing_action_btn -->
                </div><!-- ends: .atbd_generic_header -->
            </div><!-- ends: .col-lg-12 -->
            <div class="col-lg-12 listing-items">
                <div class="row">
                    <?php if (!empty($data)): ?>
                        <?php foreach ($data as $p): ?>
                            <div class="col-lg-3 col-sm-4 col-xs-6">
                                <?php echo $this->element('product_item', $p); ?>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <?php echo $this->Paginate->render($total, $limit); ?>
<!--                        <nav class="navigation pagination d-flex justify-content-end" role="navigation">
                            <div class="nav-links">
                                <a class="prev page-numbers" href=""><span class="la la-long-arrow-left"></span></a>
                                <a class="page-numbers" href="">1</a>
                                <span aria-current="page" class="page-numbers current">2</span>
                                <a class="page-numbers" href="">3</a>
                                <a class="next page-numbers" href=""><span class="la la-long-arrow-right"></span></a>
                            </div>
                        </nav>-->
                    </div>
                </div>
            </div><!-- ends: .listing-items -->
        </div>
    </div>
</section><!-- ends: .all-listing-wrapper -->