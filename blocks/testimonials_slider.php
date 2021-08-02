<div class="<?php echo $field['acf_fc_layout']; ?>_block"> 
    <div class="column_1">
        <?php echo !empty($field['shortcode'])? do_shortcode($field['shortcode']) : ''; ?>
    </div>
    <div class="column_2">
        <?php echo !empty($field['text'])? $field['text'] : ''; ?>
    </div>
</div>