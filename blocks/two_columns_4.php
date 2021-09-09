<div class="<?php echo $field['acf_fc_layout'].'_block'; ?>">
    <div class="row <?php echo ($field['image_on_left_or_right_side'])? 'image_on_left_side' : 'image_on_right_side' ?>">
        <div class="col col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <?php
            
            $column_1_guide = '
                <div>%s</div>
                %s
            ';

            $column_1_content = sprintf(
                $column_1_guide,

                !empty($field['text'])? $field['text'] : '',

                !empty($field['button']['url'])? '
                    <a class="learn_more_link button_1 mt-4" href="'.$field['button']['url'].'" target="'.$field['button']['target'].'">
                        <span></span>
                        <span>'.$field['button']['title'] .'</span>
                    </a>
                ' : ''
            );

            echo $column_1_content;
            
            ?>
        </div>
        <div class="col col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <?php
            
            $column_2_guide = '
                <img src="%s" alt="%s" />
            ';

            $column_2_content = sprintf(
                $column_2_guide,
                !empty($field['image']['url'])? $field['image']['url'] : '',
                !empty($field['image']['url'])? $field['image']['alt'] : ''
            );

            echo $column_2_content;

            ?>
        </div>
    </div>      
</div>