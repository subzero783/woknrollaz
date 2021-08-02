<div class="<?php echo $field['acf_fc_layout']; ?>_block">
    <div class="container">
        <div class="row">
            <div class="col col-12 co-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h2><?php echo $field['title'];?></h2>
                <p><?php echo $field['subtitle'];?></p>
            </div>
            <div class="col col-12 co-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="image_and_price">
                    <img class="lazyload" src="<?php echo $field['image_1']['url']; ?>" alt="<?php echo $field['image_1']['alt']; ?>" />
                    <span><?php echo $field['price_1']; ?></span>
                </div>
                <h5 class="title_1"><?php echo $field['title_1']; ?></h5>
                <p class="subtitle_1"><?php echo $field['subtitle_1']; ?></p>
            </div>
            <div class="col col-12 co-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="image_and_price">
                    <img class="lazyload" src="<?php echo $field['image_2']['url']; ?>" alt="<?php echo $field['image_2']['alt']; ?>" />
                    <span><?php echo $field['price_2']; ?></span>
                </div>
                <h5 class="title_2"><?php echo $field['title_2']; ?></h5>
                <p class="subtitle_2"><?php echo $field['subtitle_2']; ?></p>
            </div>
            <div class="col col-12 co-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="image_and_price">
                    <img class="lazyload" src="<?php echo $field['image_3']['url']; ?>" alt="<?php echo $field['image_3']['alt']; ?>" />
                    <span><?php echo $field['price_3']; ?></span>
                </div>
                <h5 class="title_3"><?php echo $field['title_3']; ?></h5>
                <p class="subtitle_3"><?php echo $field['subtitle_3']; ?></p>
            </div>
        </div>
    </div>
</div>