<div class="<?php echo $field['acf_fc_layout'].'_block'; ?>">
    <div class="row">
        <div class="col col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <div><?php echo $field['text']; ?></div>
            <a href="<?php echo $field['button']['url']; ?>" target="<?php echo $field['button']['target']; ?>" class="button_1 float_right mt-4"><span></span><span><?php echo $field['button']['title']; ?></span></a>
        </div>
        <div class="col col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <?php echo !empty($field['slider_shortcode'])? do_shortcode($field['slider_shortcode']) : ''; ?>
        </div>
    </div>      
    <!-- <div class="container">
    </div> -->
</div>