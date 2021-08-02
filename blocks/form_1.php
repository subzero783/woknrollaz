
<div class="<?php echo $field['acf_fc_layout']; ?>_block">
    <div class="row">
        <div class="column_1 col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="background-image:url(<?php echo $field['background_image']['url'];?>);" >
            <div class="container">
                <?php echo !empty($field['title'])? '<h3>'.$field['title'].'</h3>' : ''; ?>
                <?php echo !empty($field['form_shortcode'])? do_shortcode($field['form_shortcode']) : ''; ?>
            </div>
        </div>
    </div>
</div>

