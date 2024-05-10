<div class="karyawp-bb-imagecarousel">

    <?php
    $photos         = isset($settings->photos)&&$settings->photos?$settings->photos:[];
    $photo_size     = isset($settings->photo_size)&&$settings->photo_size?$settings->photo_size:'medium';
    $click_action   = isset($settings->click_action)&&$settings->click_action?$settings->click_action:'lightbox';
    ?>

    <?php if($photos): ?>
        <div class="kybb-imagecarousel">
        <?php foreach( $photos as $i => $photo): ?>
            <div class="kybb-ic-item">
                <?php
                $img = wp_get_attachment_image_url($photo,$photo_size);
                ?>
                <img src="<?php echo $img;?>" alt="Photo <?php echo $i;?>" loading="lazy">
            </div>
        <?php endforeach; ?>
        </div>
    <?php endif; ?>

</div>