<?php get_header(); ?>
<main id="content-page-not-found">
    <div class="events-list-header" <?php echo !empty(get_field('events_page_header_background_image', 'options')['url'])? 'style="background-image:url('.get_field('events_page_header_background_image', 'options')['url'].');"' :'';?>>
        <?php echo !empty(get_field('events_page_header_background_image', 'options'))? '<span><h2>404 - Page Not Found</h2></span>' : '';?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h1>THE PAGE YOU ARE LOOKING FOR IS NOT FOUND</h1>
                <p>The page you are looking for does not exist. It may have been moved, or removed altogether. Perhaps you can return back to the site's homepage and see if you can find what you are looking for.</p>
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