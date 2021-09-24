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
            
                <div class="hero_1_block parallax-window" data-parallax="scroll" data-image-src="%s">
                    <span>
                        <h1>%s</h1>
                    </span>
                </div>
                <div class="single-event-title-container">
                    <h2>Event Gallery</h2>
                </div>
                
                <div class="container masonry-grid-container">
                    <div class="masonry-grid">
                        %s
                    </div>
                </div>

                <div class="slick-slider-container">
                    <div class="slick-first-container">

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
                    <div class="slide-image">
                        <div class="close-and-download-container">
                            <a class="download-image-button" href="'.$event_image['image']['url'].'" download title="Download Image"><i class="fas fa-download"></i></a>
                            <a href="javascript:;" class="modal-close" title="Close Slider">
                                <i class="fas fa-window-close"></i>
                            </a>
                        </div>
                        <div class="image-container">
                            <img href="'.$event_image['image']['url'].'" src="'.$event_image['image']['url'].'" alt="'.$event_image['image']['alt'].'" />
                        </div>
                    </div>
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

                get_field('header_background_image')['url'],

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