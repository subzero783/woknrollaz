<div class="<?php echo $field['acf_fc_layout'];?>_block">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="headline">
                    <?php echo !empty($field['headline'])? '<h3>'.$field['headline'].'</h3>' : ''; ?>
                </div>
                <div class="video_section">
                    <?php echo $field['video_html']; ?>
                </div>
            </div>
        </div>
    </div>
</div>