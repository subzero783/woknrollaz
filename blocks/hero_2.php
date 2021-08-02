
<div class="<?php echo $field['acf_fc_layout'].'_block'; ?>">
    
    <?php if( $field['slider_shortcode_or_slider_images'] === true ){ 
        
        echo do_shortcode( $field['slider_shortcode'] );
        
    }else{ ?>
        <div class="hero_2_slider">
            
            <?php foreach($field['slider_images'] as $slide_image){ ?>
                <div class="background-image-slide" style="background-image:url(<?php echo $slide_image['slider_image']['url'];?>);"></div>
            <?php } ?>
            
        <!-- <?php //foreach($field['slider_images'] as $slide_image){ ?>
            <img class="image-slide" src="<?php //echo $slide_image['slider_image']['url'];?>"  />
            <?php //}?> -->
            
        </div>

    <?php } ?>

    <span>
        <?php 
            if(!empty($field['centered_image']['url']))
            {
        ?> 
                <img class="lazyload" src="<?php echo $field['centered_image']['url'];?>" alt="<?php echo $field['centered_image']['alt'];?>" />';
        <?php
            }
        ?>
        <div class="hero_2_box">
            <?php echo !empty($field['title']) ? '<h1>'.$field['title'].'</h1>' : '';?>
            <?php echo !empty($field['subtitle']) ? '<h2>'.$field['subtitle'].'</h2>' : '';?>
        </div>
        <div class="hero_2_buttons">
            <?php 
                if(!empty($field['button_left_side']['url']))
                {
            ?>
                    <a href="<?php echo $field['button_left_side']['url']; ?>" target="<?php echo $field['button_left_side']['target']; ?>" class="button_left_side button_1"><span></span><span><?php echo $field['button_left_side']['title']; ?></span></a>
            <?php  
                }
            ?>
            <?php 
                if(!empty($field['button_right_side']['url']))
                {
            ?>
                    <a href="<?php echo $field['button_right_side']['url']; ?>" target="<?php echo $field['button_right_side']['target']; ?>" class="button_right_side button_1"><span></span><span><?php echo $field['button_right_side']['title']; ?></span></a>
            <?php  
                }
            ?>
            </div>
    </span>
</div>

