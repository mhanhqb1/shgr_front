<div class="atbd_single_listing ">
    <article class="atbd_single_listing_wrapper">
        <figure class="atbd_listing_thumbnail_area">
            <div class="atbd_listing_image">
                <a href="">
                    <img src="<?php echo $image;?>" alt="<?php echo $name;?>">
                </a>
            </div><!-- ends: .atbd_listing_image -->
            <div class="atbd_author atbd_author--thumb">
                <a href="">
                    <img src="<?php echo $BASE_URL; ?>/images/author-thumb2.jpg" alt="Author Image">
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
                    <a href=""><?php echo $name;?></a>
                </h4>
                <div class="atbd_listing_meta">
                    <span class="atbd_meta atbd_listing_price"><?php echo $price;?></span>
                    <a href="<?php echo $source_url;?>" target="_blank" class="atbd_meta atbd_badge_open">Mua ngay</a>
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
                        <a href="<?php echo $BASE_URL;?>/danh-muc/<?php echo $cate['slug'];?>"><span class="la <?php echo $cate['icon'];?>"></span><?php echo $cate['name'];?></a>
                    </div>
                </div>
                <ul class="atbd_content_right">
                    <li class="atbd_count"><span class="la la-eye"></span>900+</li>
                </ul>
            </div><!-- end .atbd_listing_bottom_content -->
        </div><!-- ends: .atbd_listing_info -->
    </article><!-- atbd_single_listing_wrapper -->
</div>