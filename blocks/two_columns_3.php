<div class="<?php echo $field['acf_fc_layout'].'_block'; ?>">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
                <?php echo !empty($field['right_image']['url'])? '<img src="'.$field['right_image']['url'].'" alt="'.$field['right_image']['alt'].'" />' : '';?>
            </div>
            <div class="col col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <?php echo !empty($field['left_text'])? $field['left_text'] : ''; ?>
            </div>
        </div>
    </div>
</div>