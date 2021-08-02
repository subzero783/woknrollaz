<div class="<?php echo $field['acf_fc_layout'].'_block';?>">
    <div class="container">
        <div class="row">
            <div class="col col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <?php echo !empty($field['link_1']['url'])? '<a href="'.$field['link_1']['url'].'" target="'.$field['link_1']['target'].'">': ''; ?>
                    <img class="lazyload" src="<?php echo $field['image_1']['url']?>" alt="<?php echo $field['image_1']['alt']?>" />
                    <h4><span class="span-text-1 color-text-1d1d1d"><?php echo $field['text_1'];?></span></h4>
                <?php echo !empty($field['link_1']['url'])? '</a>' : '';?>
            </div>
            <div class="col col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <?php echo !empty($field['link_2']['url'])? '<a href="'.$field['link_2']['url'].'" target="'.$field['link_2']['target'].'">': ''; ?>
                    <img class="lazyload" src="<?php echo $field['image_2']['url']?>" alt="<?php echo $field['image_2']['alt']?>" />
                    <h4><span class="span-text-1 color-text-1d1d1d"><?php echo $field['text_2'];?></span></h4>
                <?php echo !empty($field['link_2']['url'])? '</a>' : '';?>
            </div>
            <div class="col col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <?php echo !empty($field['link_3']['url'])? '<a href="'.$field['link_3']['url'].'" target="'.$field['link_3']['target'].'">': ''; ?>
                    <img class="lazyload" src="<?php echo $field['image_3']['url']?>" alt="<?php echo $field['image_3']['alt']?>" />
                    <h4><span class="span-text-1 color-text-1d1d1d"><?php echo $field['text_3'];?></span></h4>
                <?php echo !empty($field['link_3']['url'])? '</a>' : '';?>
            </div>
        </div>
    </div>
</div>