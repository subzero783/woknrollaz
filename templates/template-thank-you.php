
<?php 

/*
* Template Name: Thank You
*/

get_header(); ?>
<main id="content-page-not-found">
    <div class="events-list-header" <?php echo !empty(get_field('events_page_header_background_image', 'options')['url'])? 'style="background-image:url('.get_field('events_page_header_background_image', 'options')['url'].');"' :'';?>>
        <?php echo !empty(get_field('events_page_header_background_image', 'options'))? '<span><h2>Thank You for Subscribing!</h2></span>' : '';?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h1>VIPs are the first to know about special offers and rockstar appearances!</h1>
                <?php //get_search_form(); ?>
                <a class="button_1" href="<?php echo get_home_url(); ?>">
                    <span></span>
                    <span>Back to Homepage</span>
                </a>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>