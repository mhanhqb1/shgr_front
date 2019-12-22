<div class="atbd_listing_action_btn btn-toolbar align-items-center" role="toolbar">
    <div class="view-mode">
        <a class="action-btn" href="#"><span class="la la-th-large"></span></a>
        <a class="action-btn active" href="#"><span class="la la-list"></span></a>
    </div>
    <div class="dropdown">
        <a class="action-btn dropdown-toggle" href="javascript::void(0)" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nguồn <span class="caret"></span></a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
            <?php if (!empty($_settings['source_types'])): ?>
                <?php foreach ($_settings['source_types'] as $st): ?>
                    <a class="dropdown-item <?php echo $type == $st['code'] ? 'active' : ''; ?>" href="<?php echo $_url . '?type=' . $st['code']; ?>"><?php echo $st['name']; ?></a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>