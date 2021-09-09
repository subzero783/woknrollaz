<?php $header = get_field('header','options'); ?>
<div class="<?php echo $field['acf_fc_layout']; ?>_block <?php echo (array_key_exists( 'use_sticky_navigation_as_top_navigation', $header)) ? 'sticky_nav_appear' : ''; ?>">
    <div class="balloons">
        <?php 
            $balloon_guide = '
                <div class="balloon" style="--x: %s; --h: %s; --s: %s; --d: %s; --delay: %s;">
                    <div class="balloon__handle"></div>
                </div>
            ';

            for($i = 0; $i < 100; $i++){

                $random_x = round(mt_rand(1, 100));
                $random_h = round(mt_rand(4, 336));
                $random_s = round(mt_rand(15, 50));
                $random_d = round(mt_rand(1, 10));
                $random_delay = round(mt_rand(0, 10));

                $balloon_content = sprintf(
                    $balloon_guide, 
                    $random_x,
                    $random_h,
                    $random_s,
                    $random_d, 
                    $random_delay
                );

                echo $balloon_content;
            }
        ?>
    </div>
    <div class="box-from-side">
        <img class="banner-image" src="<?php echo !empty($field['background_image']['url'])? $field['background_image']['url'] : ''; ?>" alt="<?php echo !empty($field['background_image']['alt'])? $field['background_image']['alt'] : ''; ?>" />
        <img class="banner-image mobile-banner-image" src="<?php echo !empty($field['mobile_background_image']['url'])? $field['mobile_background_image']['url'] : ''; ?>" alt="<?php echo !empty($field['mobile_background_image']['alt'])? $field['mobile_background_image']['alt'] : ''; ?>" />
        
        <?php echo !empty($field['animal_image']['url'])? '<img class="banner-gif" src="'. $field['animal_image']['url'] .'" alt="'.$field['animal_image']['alt'].'" />' : '' ?>
        <?php if(!empty($field['button']['url'])){ ?>
            <a href="<?php echo $field['button']['url']; ?>" target="<?php echo $field['button']['target']; ?>" class="button button_1"><span></span><span><?php echo $field['button']['title']; ?></span></a>
        <?php } ?>
    </div>
</div>