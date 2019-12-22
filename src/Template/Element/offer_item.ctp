<div class="atbd_single_listing atbd_listing_list">
    <article class="atbd_single_listing_wrapper">
        <figure class="atbd_listing_thumbnail_area">
            <div class="atbd_listing_image">
                <a href="<?php echo $url;?>">
                    <img src="<?php echo $image;?>" alt="<?php echo $name;?>">
                </a>
            </div><!-- ends: .atbd_listing_image -->
            <div class="atbd_thumbnail_overlay_content">
                <ul class="atbd_upper_badge">
                    <li><span class="atbd_badge atbd_badge_featured">Featured</span></li>
                </ul><!-- ends .atbd_upper_badge -->
            </div><!-- ends: .atbd_thumbnail_overlay_content -->
        </figure><!-- ends: .atbd_listing_thumbnail_area -->
        <div class="atbd_listing_info">
            <div class="atbd_content_upper">
                <h4 class="atbd_listing_title">
                    <a href="<?php echo $url;?>"><?php echo $name;?></a>
                </h4>
                <div class="atbd_listing_meta">
                    <span class="atbd_meta atbd_listing_rating"><?php echo $start_date;?></span>
                    <span class="atbd_meta atbd_listing_price"><?php echo $end_date;?></span>
                </div><!-- End atbd listing meta -->
                <div class="atbd_listing_data_list">
                    <?php echo $detail;?>
                </div><!-- End atbd listing meta -->
            </div><!-- end .atbd_content_upper -->
        </div><!-- ends: .atbd_listing_info -->
    </article><!-- atbd_single_listing_wrapper -->
</div>