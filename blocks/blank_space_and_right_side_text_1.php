<div class="<?php echo $field['acf_fc_layout'];?>_block">
    <div class="desktop">
        <div class="fixed_background" style="background-image:url(<?php echo $field['background_image']['url'];?>);"></div>
        <div class="container">
            <div class="row">
                <div class="col col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5"></div>
                <div class="col col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7 right_side_text_col">  
                    <?php echo $field['headline_and_subheadline']; ?>
                    <?php echo $field['text_below_headline']; ?>
                    <?php echo !empty($field['image_below_text']['url'])? '<img class="image_below_text" src="'.$field['image_below_text']['url'].'" alt="'.$field['image_below_text']['alt'].'" />' : '';?>
                </div>
            </div>  
        </div>
    </div>
    <div class="mobile">
        <div class="container" style="background-image:url(<?php 
            if(!empty($field['mobile_background_image']['url'])){
                echo $field['mobile_background_image']['url'];
            }else{
                echo $field['background_image']['url'];
            }
        ?>);">
            <div class="row">
                <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 right_side_text_col">  
                    <?php echo $field['headline_and_subheadline']; ?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 right_side_text_col">
                    <?php echo $field['text_below_headline']; ?>
                    <?php echo !empty($field['image_below_text']['url'])? '<img class="image_below_text" src="'.$field['image_below_text']['url'].'" alt="'.$field['image_below_text']['alt'].'" />' : '';?>
                </div>
            </div>
        </div>
    </div>
</div>