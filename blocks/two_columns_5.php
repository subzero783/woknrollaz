<div class="<?php echo $field['acf_fc_layout'].'_block'; ?>" 
    <?php echo !empty($field['background_image']) ? 'style="background-image:url('.$field['background_image']['url'].');"' : '';?>
>   
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text_side">
                <div><?php echo $field['text']; ?></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 form_side">
                <?php echo !empty($field['form_shortcode'])? do_shortcode($field['form_shortcode']) : ''; ?>
            </div>
        </div>
    </div>
</div>