<div class="<?php echo $field['acf_fc_layout'].'_block'; ?>">
    <?php 
        
        $args = array(
            'post_type'=> 'post',
            'orderby'    => 'ID',
            'post_status' => 'publish',
            'order'    => 'DESC',
            'posts_per_page' => -1, // this will retrive all the post that is published 
            'category__in' => $field['category_of_blog_posts']
        );
        
        $result = new WP_Query( $args );

        print_r($result);

    ?>
</div>