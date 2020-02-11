<section class="all-listing-wrapper section-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="atbd_generic_header">
                    <div class="atbd_generic_header_title">
                        <!--<h4>Sản phẩm</h4>-->
                        <p>Tổng sản phẩm: <?php echo $total; ?></p>
                    </div><!-- ends: .atbd_generic_header_title -->
                    <?php echo $this->element('toolbar', array(
                        'type' => $type
                    ));?>
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
                    <?php else: ?>
                    <div class="col-lg-12">
                        <p>Không có sản phẩm nào</p>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <?php echo $this->Paginate->render($total, $limit); ?>
                    </div>
                </div>
            </div><!-- ends: .listing-items -->
        </div>
    </div>
</section><!-- ends: .all-listing-wrapper -->