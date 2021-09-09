<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:image" content="<?php echo wp_get_attachment_image_src(get_field('logo_image', 'options')['id'], 'full')[0]; ?>" />
    <meta property="og:title" content="<?php wp_title('|',true,'right'); ?><?php bloginfo('name'); ?>" />
    <meta property="og:site_name" content="<?php echo get_bloginfo('name'); ?>" />
    <meta property="og:url" content="<?php global $wp; echo home_url(add_query_arg(array(), $wp->request)); ?>" />
    <meta property="og:description" content="<?php echo wp_strip_all_tags(get_the_excerpt(), false); ?>" />
    <meta property="og:type" content="article" />
    <?php
    // wp_enqueue_scripts runs on the wp_head hook which is called by wp_head()
    wp_head();
    ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<?php
    // include_once(get_template_directory() . '/parts/popups/popup.loader.php');
    $header = get_field('header','options');
    $header_sticky_default = (array_key_exists( 'use_sticky_navigation_as_top_navigation', $header)) ? $header['use_sticky_navigation_as_top_navigation'] : '';
?>
    <div id="desktop-and-mobile-header" <?php echo ($header_sticky_default === true) ? 'class="sticky_nav_appear"' : ''; ?>>
    <?php
        include('parts/nav.desktop.php');
        include('parts/nav.mobile.php');
    ?>
    </div>
<?php
    /**
     *  Clean Up 
    */
    unset($body_classes);
?>
