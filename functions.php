<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION


/**
* 
*/
// 
// libs
require('includes/acf.extensions.php');     // php extensions for acf (options pages, manually defined fields, other stuff?)
require('classes/class.NavWalker.php');     // wordpress built in nav
// require('classes/class.wp_bootstrap_navwalker.php');
require('classes/class.NavHandler.php');    // handler for creating theme headers

// Add excerpt field for pages
// Adding excerpt for page
add_post_type_support( 'page', 'excerpt' );

add_theme_support( 'custom-logo' );

function get_social_icons()
{
    $company_info = get_field('company_info', 'options');

    $content_social_icons = '';
    // if we have social media icons
    if (!empty($company_info['social_media'])) {
        $content_social_icons .= '<ul class="site__social-media">';
        $format_social_icons = '
			<li>
				<a href="%s" title="Social icon button" target="_blank">
					%s
				</a>
			</li>
		';
        foreach ($company_info['social_media'] as $social_icon) {
            $url = $social_icon['url'];
            
            $icon_html = $social_icon['icon'];
            
            if (!empty($url)) {
                $content_social_icons .= sprintf(
                    $format_social_icons,
                    $url,
                    $icon_html
                );
            }
        }
        $content_social_icons .= '</ul>';
    }
    return $content_social_icons;
}

function get_site_food_logo()
{
    // look for a 'custom logo'
    $content_logo = '';
    // if we have a custom logo

    $sitename = json_encode(get_bloginfo('name'));

    $logo_id =  get_field('logo_image', 'options')['id'];
    $logo_alt =  get_field('logo_image', 'options')['alt'];
    $logo_size = 'full';
    $logo_src = wp_get_attachment_image_src($logo_id, $logo_size);
    $logo_srcset = wp_get_attachment_image_srcset($logo_id);
    $format_logo = '
        <img class="food_logo" src="%s" srcset="%s" alt="%s">
    ';
    $content_logo .= sprintf(
        $format_logo,
        $logo_src,
        $logo_srcset, 
        $logo_alt
    );
    return $content_logo;
}



function get_site_logo()
{
    $content_logo = '';

    $logo_id =  get_field('logo_image', 'options')['id'];
    $logo_alt =  get_field('logo_image', 'options')['alt'];
    $logo_size = 'full';
    $logo_src = wp_get_attachment_image_src($logo_id, $logo_size);
    $logo_srcset = wp_get_attachment_image_srcset($logo_id);
    

    $format_logo = '
        <a class="site__custom_logo" href="%s" title="Logo button">
            <img src="%s" srcset="%s" alt="%s">
        </a>
    ';
    $content_logo .= sprintf(
        $format_logo,
        get_home_url(),
        $logo_src,
        $logo_srcset,
        $logo_alt
    );
    return $content_logo;
}

/**
 * Returns the SITE NAV
 *
 * @param string $pre
 * @return void
 */
function get_site_nav($pre = 'navlinks')
{
    // create an unwrapped site nav
    $site__nav = wp_nav_menu(array(
        'menu' => 'nav__header', 
        'container' => '', 
        'items_wrap' => '<ul class="nav-menu navlinks">%3$s</ul>', 
        'walker' => new NavWalker, 
        'echo' => false
    ));
    return $site__nav;
}
// function get_site_nav($pre = 'navlinks')
// {
//     // create an unwrapped site nav
//     $site__nav = wp_nav_menu(array(
//         'menu' => 'top_menu', 
//         'depth' => 2, 
//         'container' => false, 
//         'menu_class' => 'nav',
//         'walker' => new wp_bootstrap_navwalker(),
//         'echo' => false
//     ));
//     return $site__nav;
// }

function get_site_nav_mobile($pre = 'navlinks')
{
    $site__nav = wp_nav_menu(array(
        'menu' => 'nav__header', 
        'container' => '', 
        'items_wrap' => '<ul class="navbar-nav mr-auto">%3$s</ul>', 
        'walker' => new NavWalker, 
        'echo' => false
    ));
    return $site__nav;
}
// function get_site_nav_mobile($pre = 'navlinks')
// {
//     $site__nav = wp_nav_menu(array(
//         'menu' => 'top_menu', 
//         'depth' => 2, 
//         'container' => false, 
//         'menu_class' => 'nav',
//         'walker' => new wp_bootstrap_navwalker(),
//         'echo' => false
//     ));
//     return $site__nav;
// }


add_action( 'wp_enqueue_scripts', 'blankslate_load_scripts' );
function blankslate_load_scripts()
{
    // wp_enqueue_style('blankslate-style', get_stylesheet_directory_uri());
    wp_enqueue_style('blankslate-style', get_stylesheet_directory_uri().'/style.css');
    
    wp_enqueue_style('custom-styles', get_stylesheet_directory_uri() . gustavo_get_cachebusted_css());

    wp_enqueue_style('animations-css', get_stylesheet_directory_uri() . '/assets/css/animations-5.css?r='.rand(10,1000) );
    
    wp_enqueue_script('custom-scripts', get_stylesheet_directory_uri() . '/assets/dist/js/scripts.min.js?r='.rand(10,1000), array('jquery'), '3.6.0', true);
}

/* 2.3 GET CACHE-BUSTED CSS FILE
/––––––––––––––––––––––––––––––*/
// get the url to the busted css-file, or the default css-file if working locally (on the TLD `.vm`)
// the busted css file is generated by `gulp cachebust` and is located through dist/rev-manifest.json
function gustavo_get_cachebusted_css()
{
    // $current_tld = substr(strrchr(get_bloginfo('url'),"."),1);
    // if ($current_tld == 'vm') :
    //     $css_src = '/assets/dist/css/style.min.css';
    // else :
    //     $css_manifest_url = get_stylesheet_directory_uri() . '/assets/dist/css/rev-manifest.json';
    //     $css_manifest_content = json_decode(file_get_contents($css_manifest_url), true);
    //     $css_src = '/assets/dist/css/'.$css_manifest_content['style.min.css'];
        $css_src = '/assets/dist/css/style.min.css?r='.rand(10,1000);
    // endif;
    return $css_src;
}

// function gustavo_get_cachebusted_css()
// {
//     $css_src = '/assets/dist/css/style.min.css';
//     return $css_src;
// }

// Prepend a meaningful comment so you instantly know what the code below does.
// add_action('wp_footer', 'my_custom_footer_code');
function my_custom_footer_code()
{
    ?>
        <script id="__bs_script__">//<![CDATA[
            document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.26.7'><\/script>".replace("HOST", location.hostname));
        //]]></script>
    <?php
};

add_action('wp_head', 'google_tag_manager');
function google_tag_manager(){
?>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-201764272-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-201764272-1');
        </script>
<?php
}

// Admin side CSS
add_action('admin_head', 'my_custom_admin_css');
function my_custom_admin_css() {
?>
  <style>
      div[data-name^='column_4_temporary_disabled_group']{
          display: none;
      }
  </style>
<?php
}

// Remove Wordpress site users from sitemap.xml
add_filter( 'wp_sitemaps_add_provider', function ($provider, $name) {
    return ( $name == 'users' ) ? false : $provider;
  }, 10, 2);

// REMOVE BEFORE PUSHING TO LIVE SITE
// add_action( 'rest_api_init', function (){
//    register_rest_field(
//           'page',
//           'content',
//           array(
//                  'get_callback'    => 'htr_do_shortcodes',
//                  'update_callback' => null,
//                  'schema'          => null,
//           )
//        );
// });
// add_action('rest_api_init', function(){
//     register_rest_field(
//         'page',
//         'custom_fields',
//         array(
//             'get_callback' => 'get_post_meta_for_api',
//             'update_callback' => null,
//             'schema' => null
//         )
//     );
// });


// function get_post_meta_for_api( $object ) {
//     $post_id = $object['id'];

//     return get_post_meta( $post_id );
// }

// function htr_do_shortcodes( $object, $field_name, $request ){
//     WPBMap::addAllMappedShortcodes();
//     global $post;
//     $post = get_post ($object['id']);
//     $output['rendered'] = apply_filters( 'the_content', $post->post_content );
//     return $output;
// }

// add_filter('acf/settings/remove_wp_meta_box', '__return_false');