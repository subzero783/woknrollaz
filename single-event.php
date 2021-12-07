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

            $event_single_image_masonry_guide = '
                <div class="grid-item">
                    <a href="javascript:;" class="image-modal-button">
                        <img class="image-slide" src="%s" alt="%s" />
                    </a>
                </div>
            ';

            $event_single_video_masonry_guide = '
                <div class="grid-item">
                    <a href="javascript:;" class="video-modal-button">
                        <video class="grid-item-video">
                            <source src="%s" type="video/mp4">
                            <source src="%s" type="video/mov" />
                        </video>
                    </a>
                </div>
            ';

            $event_slider = '
                <div class="single-event-slick-slider">
            ';

            // <img href="'.$event['image']['url'].'" src="'.$event['image']['url'].'" alt="'.$event['image']['alt'].'" />
            $event_image_single_slide_guide = '
                <img href="%s" src="%s" alt="%s" />
            ';

            $event_video_single_slide_guide = '
                <video class="single-slide-video" playsinline controls>
                    <source src="%s" type="video/mp4">
                    <source src="%s" type="video/mov" />
                </video>
            ';

            $event_masonry = null;

            foreach(get_field('event_images') as $event){

                if($event['image_or_video']){

                    $event_masonry .= sprintf(
    
                        $event_single_image_masonry_guide, 
    
                        $event['image']['url'], 
    
                        $event['image']['alt']
    
                    );

                    $event_single_slide_content = sprintf(
                        $event_image_single_slide_guide, 
                        $event['image']['url'],
                        $event['image']['url'],
                        $event['image']['alt']
                    );

                    $event_slider .= '
                        <div class="slide-image-or-video">
                            <div class="close-and-download-container">
                                <a class="download-image-button" href="'.$event['image']['url'].'" download title="Download Image"><i class="fas fa-download"></i></a>
                                <a href="javascript:;" class="modal-close" title="Close Slider">
                                    <i class="fas fa-window-close"></i>
                                </a>
                            </div>
                            <div class="image-and-video-container">
                                '.$event_single_slide_content.'
                            </div>
                        </div>
                    ';

                }else{
                    $event_masonry .= sprintf(
                        $event_single_video_masonry_guide,
                        $event['video_mp4'], 
                        $event['video_mov']
                    );

                    $event_single_slide_content = sprintf(
                        $event_video_single_slide_guide, 
                        $event['video_mp4'],
                        $event['video_mov']
                    );

                    $event_slider .= '
                    <div class="slide-image-or-video">
                        <div class="close-and-download-container">
                            <a class="download-image-button" href="'.$event['video_mp4'].'" download title="Download Video"><i class="fas fa-download"></i></a>
                            <a href="javascript:;" class="modal-close" title="Close Slider">
                                <i class="fas fa-window-close"></i>
                            </a>
                        </div>
                        <div class="image-and-video-container">
                            '.$event_single_slide_content.'
                        </div>
                    </div>
                ';
                }
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