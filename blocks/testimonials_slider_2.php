<div class="<?php echo $field['acf_fc_layout']; ?>_block"> 
    <div class="row">
        <div class="column_1 col col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <?php             

                $slide_format = '
                    <img class="testimonial_slide" src="%s" alt="%s"/>
                ';

                $slider_content = '<div class="testimonials_slider_2">';

                foreach($field['slider_images'] as $slide_image){
                    $slider_content .= sprintf(
                        $slide_format, 
                        !empty($slide_image['image']['url'])? $slide_image['image']['url'] : '',
                        !empty($slide_image['image']['alt'])? $slide_image['image']['alt'] : ''
                    );
                }
                
                $slider_content .= '</div>';
                echo $slider_content;
            ?>
        </div>
        <div class="column_2 col col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <?php echo !empty($field['text'])? $field['text'] : ''; ?>
        </div>
    </div>
</div>