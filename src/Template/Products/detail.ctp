<section class="directory_listiing_detail_area single_area section-bg section-padding-strict">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="atbd_content_module atbd_listing_details">
                    <div class="atbd_content_module__tittle_area">
                        <div class="atbd_area_title">
                            <h4><span class="la la-file-text-o"></span>Lịch sử giá</h4>
                        </div>
                    </div>
                    <div class="atbdb_content_module_contents">
                        <?php if (!empty($data['history_price_ts'])): ?>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
                        <canvas id="chartjs-0" width="100%"></canvas>
                        <?php
                        $data['history_price'][] = $data['price'] * 1000;
                        $priceDates = array();
                        foreach ($data['history_price_ts'] as $v) {
                            $priceDates[] = date('Y-m-d', $v/1000);
                        }
                        $priceDates[] = date('Y-m-d', time());
                        ?>
                        <script> 
                            new Chart(document.getElementById("chartjs-0"), {
                                "type": "line",
                                "data": {
                                    "labels": ["<?php echo implode('","', $priceDates);?>"],
                                    "datasets": [{
                                        "label": '<?php echo $data['name'];?>',
                                        "data": [<?php echo implode(',', $data['history_price']);?>],
                                        "fill": true,
                                        "borderColor": "rgb(75, 192, 192)",
                                        "lineTension": 0.1
                                    }]
                                },
                                "options": {}
                            }); 
                        </script>
                        <?php else: ?>
                        <p>Xin lỗi, hiện chưa có lịch sử giá của sản phẩm này.</p>
                        <?php endif;?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget atbd_widget widget-card">
                    <div class="atbd_widget_title">
                        <h4><span class="la la-user"></span>Thông tin sản phẩm</h4>
                    </div><!-- ends: .atbd_widget_title -->
                    <div class="widget-body atbd_author_info_widget">
                        <div class="atbd_avatar_wrapper">
                            <div class="atbd_review_avatar">
                                <img src="<?php echo $data['image']; ?>" width="60px" alt="<?php echo $data['name']; ?>">
                            </div>
                            <div class="atbd_name_time">
                                <h3><?php echo $data['price']; ?></h3>
                                <span class="review_time">Cập nhật 1 ngày trước</span>
                            </div>
                        </div><!-- ends: .atbd_avatar_wrapper -->
                        <div class="atbd_widget_contact_info">
                            <ul>
                                <li>
                                    <span class="la la-table"></span>
                                    <span class="atbd_info"><?php echo $data['name']; ?></span>
                                </li>
                                <li>
                                    <span class="la la-map-marker"></span>
                                    <span class="atbd_info"><?php echo $data['source_type_name']; ?></span>
                                </li>
                                <li>
                                    <span class="la la-globe"></span>
                                    <a href="" class="atbd_info"><?php echo $data['source_type_name']; ?></a>
                                </li>
                            </ul>
                        </div><!-- ends: .atbd_widget_contact_info -->
                        <div class="atbd_social_wrap">
                            <p><a href=""><span class="fab fa-facebook-f"></span></a></p>
                            <p><a href=""><span class="fab fa-twitter"></span></a></p>
                            <p><a href=""><span class="fab fa-google-plus-g"></span></a></p>
                            <p><a href=""><span class="fab fa-linkedin-in"></span></a></p>
                            <p><a href=""><span class="fab fa-dribbble"></span></a></p>
                        </div><!-- ends: .atbd_social_wrap -->
                        <a href="<?php echo $data['source_url']; ?>" class="btn btn-outline-primary btn-block">Mua ngay</a>
                    </div><!-- ends: .widget-body -->
                </div>
            </div>
        </div>
    </div>
</section>