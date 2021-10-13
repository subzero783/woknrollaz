<?php 
/**
 *      NavHandler Class
 */

class NavHandler
{
    // Public Vars
    public $header_one = '';
    public $header_two = '';
    public $header_three = '';
    public $header_four = '';
    public $header_five = '';
    public $header_six = '';
    public $header_seven = '';
    public $header_eight = '';
    public $header_nine = '';
    public $header_ten = '';

    // Constructor
    function __construct(){
        $this->_init();
    }

    // Initialize
    function _init(){
        
        // get header field group
        $header = get_field('header','options');
        
        // look for a 'custom logo'
        $content_logo = '';
        // if we have a custom logo

        $logo_id =  get_field('logo_image', 'options')['id'];
        $logo_alt =  get_field('logo_image', 'options')['alt'];
        $logo_size = 'full';
        $logo_src = wp_get_attachment_image_src($logo_id, $logo_size);
        $logo_srcset = wp_get_attachment_image_srcset($logo_id);
        $format_logo = '
            <a class="header-logo" href="%s" title="Logo button">
                <img src="%s" srcset="%s" alt="%s" />
            </a>
        ';
        $content_logo .= sprintf(
            $format_logo
            ,get_home_url()
            ,$logo_src[0]
            ,$logo_srcset
            ,$logo_alt
        );

        $hamburger_icon = '<a class="site__bars" href="javascript:;" title="3 Line menu icon button"><span></span><span></span><span></span></a>';
        
        $company_address_br = 'Full Address with Break';
        $company_address = 'Full Address';
        $phone_number_1_text = get_field('company_info', 'options')['telephone_1_text'];
        $phone_number_1 = get_field('company_info', 'options')['telephone_1'];
        $phone_number_2_text = get_field('company_info', 'options')['telephone_2_text'];
        $phone_number_2 = get_field('company_info', 'options')['telephone_2'];
        $company_email = 'Email';
        
        $header_phone_1 = '';
        $format_phone_1 = '
            <a id="header_phone_1" href="tel:%s">
                <div class="phone_text"><span><span>%s</span><span><i class="fas fa-phone-alt"></i> %s</span></span></div>
            </a>
        ';

        $header_phone_1 = sprintf(
            $format_phone_1,
            $phone_number_1,
            !empty($phone_number_1)? $phone_number_1_text : '',
            $phone_number_1
        );

        $header_phone_2 = '';
        $format_phone_2 = '
            <a id="header_phone_2" href="tel:%s">
                <div class="phone_text"><span><span>%s</span><span><i class="fas fa-phone-alt"></i> %s</span></span></div>
            </a>
        ';

        $header_phone_2 = sprintf(
            $format_phone_2,
            $phone_number_2,
            !empty($phone_number_2)? $phone_number_2_text : '',
            $phone_number_2
        );

        
        
        /**
         * 
         * Start Header Style 1
         * 
         */


        $format_header = '
            <header class="header" id="ag_header_one">
                <div>
                    <div>
                        %s
                    </div>
                    <div class="logo">
                        %s
                    </div>
                    <div>
                        %s
                        %s
                    </div>
                </div>
                <nav class="ag_header_one_first_nav">
                    %s
                </nav>
                <nav class="sticky_nav">
                    %s
                    %s
                </nav>
            </header>
        ';
        $this->header_one = sprintf( 
            $format_header,
            // $header['use_sticky_navigation_as_top_navigation'] === true ? 'sticky_nav_appear' : '',
            get_social_icons(),
            $content_logo,
            $header_phone_1,
            $header_phone_2,
            get_site_nav(),
            $content_logo,
            get_site_nav()
        );
        /**
         * 
         * End Header Style 1
         * 
         */

         

    }
}
?>