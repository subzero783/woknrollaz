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
                    <div class="masonry-grid row">
                        %s
                    </div>
                </div>

                <div class="slick-slider-container">
                    %s
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        ...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
            
            ';

            $event_single_masonry_guide = '
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 grid-item">
                    <img data-toggle="modal" data-target="#exampleModalLong" src="%s" alt="%s" />
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
?>
        

        
<?php 
        endwhile; 
    endif; 
?>
</main>
<?php 

get_footer(); 

?>