<?php 
    $company_info = get_field('company_info','options');


    $site__iconlink_phone = ''; 
    if( !empty($phone_number_1) ){
        $site__iconlink_phone .= '
            <a href="tel:'.$phone_number_1.'" title="" class="site__iconlink site__iconlink-phone">'.$phone_number_1.'</a>
        ';
    }

    // look for a 'custom logo'
    $content_logo = '';
    // if we have a custom logo
    $logo_id =  get_field('logo_image', 'options')['id'];
    $logo_alt =  get_field('logo_image', 'options')['alt'];
    $logo_size = 'full';
    $logo_src = wp_get_attachment_image_src($logo_id, $logo_size);
    $logo_srcset = wp_get_attachment_image_srcset($logo_id, $logo_size);
    $format_logo = '<img src="%s" srcset="%s" alt="%s" />';
    $content_logo .= sprintf(
        $format_logo
        ,$logo_src[0]
        ,$logo_srcset
        ,get_bloginfo('sitename')
    );

    $hamburger_icon = '<a href="javascript:;" title="3 Line menu icon button"><span></span><span></span><span></span></a>';
    
    $field_social_icons = $company_info['social_media'];
    $content_social_icons = '';
    if( !empty($field_social_icons) ){
        $content_social_icons = '<ul>';
        $format_social_icons = '
            <li>
                <a href="%s" title="Social icon button">
                    %s
                </a>
            </li>
        ';
        foreach( $field_social_icons as $social_icon ){
            $url = $social_icon['url'] ;
            $fa = $social_icon['icon'];
            $custom_png_url = '';
            // we have a preconfigured URL
            if( strpos($url, 'booksy') ){
                $custom_png_url = get_template_directory_uri() . '/library/img/social_icons/booksy.png';
            }
            if( strpos($url, 'groupon') ){
                $custom_png_url = get_template_directory_uri() . '/library/img/social_icons/groupon.png';
            }
            if( strpos($url, 'pinterest') ){
                $custom_png_url = get_template_directory_uri() . '/library/img/social_icons/pinterest.png';
            }
            if( !empty($custom_png_url) ){
                $icon_url = $custom_png_url;
            } else {
                // we have img
                if( !empty($img) ){
                    $icon_url = $img;
                }
                // img is empty, we have fa
                else if( !empty($fa) ){
                    $icon_url = '';
                    $fa_icon = '<i class="fab '.$fa.'"></i>';
                }
                // img and fa are empty
                // something went wrong...
                else {
                    $icon_url = '';
                }
            }
            if( !empty($url) ){
                $content_social_icons .= sprintf(
                    $format_social_icons
                    ,$url
                    ,( !empty($icon_url) ) ? '<img src="'.$icon_url.'">' : $fa_icon
                );
            } 
        }
        $content_social_icons .= '</ul>';
    }

    $format_nav_mobile = ' 
        <nav class="navbar navbar-mobile navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a href="javascript:;" class="navbar-toggler">
                    <div></div>
                    <div></div>
                    <div></div>
                </a>
                <a class="navbar-brand" href="%s">%s</a>
                <div class="navbar-collapse" id="navbarText">
                    %s
                    %s
                </div>
            </div>
        </nav>
    ';
    
    $content_nav_mobile = sprintf(
        $format_nav_mobile,
        get_home_url(),
        $content_logo,
        get_site_nav_mobile(),
        get_social_icons()
    );



    echo $content_nav_mobile;    
 ?>