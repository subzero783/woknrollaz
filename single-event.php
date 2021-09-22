<?php 
/**
 * Template Name: Blog Post Event Category
 * Template Post Type: post
 */

get_header(); 

?>
<main id="single-event-content">
<?php   
    if ( have_posts() ) :   
        while ( have_posts() ) :  the_post(); 

            $single_event_guide = '
            
                <div class="hero_1_block parallax-window" data-parallax="scroll" data-image-src="'.get_site_url().'/wp-content/uploads/new-slider-image-02.jpg">
                    <span>
                        <h1>%s</h1>
                    </span>
                </div>
                <div class="single-event-title-container">
                    <h2>Event Gallery</h2>
                </div>
                
                <div class="container">
                    <div class="masonry-grid">
                        %s
                    </div>
                </div>

                <div class="slick-slider-container">
                    <div class="slick-first-container">
                        <a href="javascript:;" class="modal-close">
                            <span>&times;</span>
                        </a>
                        %s
                    </div>
                </div>
            
            ';

            $event_single_masonry_guide = '
                <div class="grid-item">
                    <a href="javascript:;" class="modal-button">
                        <img src="%s" alt="%s" />
                    </a>
                </div>
            ';

            $event_slider = '
                <div class="single-event-images-slick-slider">
            ';

            $event_masonry = null;

            foreach(get_field('event_images') as $event_image){

                $event_slider .= '
                    <img class="slide-image" src="'.$event_image['image']['url'].'" alt="'.$event_image['image']['alt'].'" />
                ';

                $event_masonry .= sprintf(

                    $event_single_masonry_guide, 

                    $event_image['image']['url'], 

                    $event_image['image']['alt']

                );
            }

            $event_slider .= '
                </div>
            ';

            $single_event_content = sprintf(

                $single_event_guide, 

                get_the_title(),

                $event_masonry,
                
                $event_slider,
            );

            echo $single_event_content;
        endwhile; 
    endif; 
?>
</main>
<?php 

get_footer(); 

?>