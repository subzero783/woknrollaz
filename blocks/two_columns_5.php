<div class="<?php echo $field['acf_fc_layout'].'_block'; ?>">
    <div class="row">
        <div class="col col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <?php echo !empty($field['form_shortcode'])? do_shortcode($field['form_shortcode']) : ''; ?>
        </div>
        <div class="col col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <div><?php echo $field['text']; ?></div>
        </div>
    </div>
</div>