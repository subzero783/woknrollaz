
<div class="<?php echo $field['acf_fc_layout'].'_block'; ?> parallax-window" data-parallax="scroll" data-image-src="<?php echo $field['background_image']['url'];?>">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 center">
                <div class="title text-shadow-1"><?php echo $field['title']; ?></div>
                <?php if(!empty($field['image_1a']['url'])){ ?>
                    <img class="lazyload image_1" src="<?php echo $field['image_1a']['url']; ?>" alt="<?php echo $field['image_1a']['alt']; ?>" />
                <?php } ?>
                <div class="subtitle text-shadow-1"><?php echo $field['subtitle']; ?></div>
            </div>
        </div>
    </div>
</div>