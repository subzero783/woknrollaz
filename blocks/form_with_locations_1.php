
<div class="<?php echo $field['acf_fc_layout']; ?>_block">
    <div class="row">
        <div class="column_2 col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="container">
            <?php 

            if( !empty( $field['locations'] ) ){
                
                $locations_content = '<ul class="locations">';
        
                $location_format = '
                    <li class="location">
                        <h5 class="location_title">%s</h5>
                        <div class="address_text">%s</div>
                        <h5 class="hours_title">%s</h5>
                        <div class="hours_text">%s</div>
                    </li>
                ';
        
                foreach($field['locations'] as $theLocation){
                    $locations_content .= sprintf(
                        $location_format,
                        !empty($theLocation['location_title'])? $theLocation['location_title'] : '',
                        !empty($theLocation['address_text'])? $theLocation['address_text'] : '',
                        !empty($theLocation['hours_title'])? $theLocation['hours_title'] : '',
                        !empty($theLocation['hours_text'])? $theLocation['hours_text'] : ''
                    );
                }
        
                $locations_content .= '</ul>';
        
                echo $locations_content;
            }
        
            ?>

            </div>
        </div>
        <div class="column_1 col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="background-image:url(<?php echo $field['background_image']['url'];?>);" >
            <div class="container">
                <?php echo !empty($field['title'])? '<h3>'.$field['title'].'</h3>' : ''; ?>
                <?php echo !empty($field['form_shortcode'])? do_shortcode($field['form_shortcode']) : ''; ?>
            </div>
        </div>
    </div>
</div>

