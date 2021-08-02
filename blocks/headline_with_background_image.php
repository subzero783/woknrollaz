<div class="<?php echo $field['acf_fc_layout'];?>_block">
    <div class="fixed_background" style="background-image:url(<?php echo $field['background_image']['url'];?>);"></div>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <?php echo !empty($field['headline'])? '<h2 class="headline">'.$field['headline'].'</h2>' : ''; ?>
                <?php echo !empty($field['sub_headline'])? '<h4 class="span-text-1 sub_headline">'.$field['sub_headline'].'</h4>' : ''; ?>
            </div>
        </div>  
    </div>
</div>