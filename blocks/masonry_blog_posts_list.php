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

    ?>
    <div class="container masonry-grid-container">
        <div class="masonry-grid">
        <?php 
            if( $result->have_posts() ):
                while( $result->have_posts() ) : $result->the_post();

                    $grid_item_format = '

                        <div class="grid-item">
                            <a href="%s" target="_self" class="grid-item-link single-event-link">
                                <div class="featured-image-container">%s</div>
                                <div class="date-container">%s</div>
                                <div class="title-container">%s</div>
                            </a>
                        </div>

                    ';

                    $featured_image = !empty( get_the_post_thumbnail() )? get_the_post_thumbnail() : '';

                    $post_date = '<h4>'.get_the_date('m/d/Y').'</h4>';
                    
                    $post_title = '<h3>'.get_the_title().'</h3>';

                    $grid_item_content = sprintf(
                        $grid_item_format, 

                        get_permalink(),

                        $featured_image,

                        $post_date, 

                        $post_title
                    );

                    echo $grid_item_content;

                endwhile;
            else:
                _e('Sorry, no posts matched your criteria.', 'textdomain');
            endif;
        ?>
        </div>
    <div>
</div>