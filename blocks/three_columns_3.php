<div class="<?php echo $field['acf_fc_layout']; ?>_block">
    <div class="row">
        <div class="col"
            <?php echo !empty($field['bg_image_1'])? ' style="background-image:url('.$field['bg_image_1']['url'].');"' : '';?>
        >
            <?php echo !empty($field['text_1'])? '<div class="text">'.$field['text_1'].'</div>' : ''; ?>
        </div>
        <div class="col"
            <?php echo !empty($field['bg_image_2'])? ' style="background-image:url('.$field['bg_image_2']['url'].');"' : '';?>
        >
            <?php echo !empty($field['text_2'])? '<div class="text">'.$field['text_2'].'</div>' : ''; ?>
        </div>
        <div class="col"
            <?php echo !empty($field['bg_image_3'])? ' style="background-image:url('.$field['bg_image_3']['url'].');"' : '';?>
        >
            <?php echo !empty($field['text_3'])? '<div class="text">'.$field['text_3'].'</div>' : ''; ?>
        </div>
    </div>
</div>