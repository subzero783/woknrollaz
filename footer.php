<?php
	$footer_info = get_field('footer', 'options');
    $company_info = get_field('company_info', 'options');

    function footer_column_content( $titles_and_text, $extra_content=null){

        $column_content = '<ul class="titles_and_text">';

        $column_title_and_text_guide = '
            <li>
                %s
                <div>%s</div>
            </li>
        ';

        $column_titles_and_text_content = '';

        foreach($titles_and_text as $item){
            $column_content .= sprintf(
                $column_title_and_text_guide, 
                !empty($item['title'])? '<h5>'.$item['title'].'</h5>' : '',
                $item['text']
            );
        }

        $column_content .= '</ul>';

        echo $column_content;
    }
?>

<div id="footer_1" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="col col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                <?php 
                    if(!empty($footer_info['column_1_titles_and_text'])){
                        footer_column_content($footer_info['column_1_titles_and_text']);
                    }
                    echo (!empty($footer_info['add_social_icons_1']) && $footer_info['add_social_icons_1'] == true)? get_social_icons() : '';
                    echo (!empty($footer_info['add_shortcode_1']) && $footer_info['add_shortcode_1'] == true)? '<div class="form_container_1">'.do_shortcode($footer_info['shortcode_1']).'</div>' : '';
                ?>
			</div>
			<div class="col col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                <?php
                    if(!empty($footer_info['column_2_titles_and_text'])){
                        footer_column_content($footer_info['column_2_titles_and_text']);
                    }
                    echo (!empty($footer_info['add_social_icons_2']) && $footer_info['add_social_icons_2'] == true)? get_social_icons() : '';
                    echo (!empty($footer_info['add_shortcode_2']) && $footer_info['add_shortcode_2'] == true)? '<div class="form_container_1">'.do_shortcode($footer_info['shortcode_2']).'</div>' : '';
                ?>
			</div>
			<div class="col col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                <?php
                    if(!empty($footer_info['column_3_titles_and_text'])){
                        footer_column_content($footer_info['column_3_titles_and_text']);
                    }
                    echo (!empty($footer_info['add_social_icons_3']) && $footer_info['add_social_icons_3'] == true)? get_social_icons() : '';
                    echo (!empty($footer_info['add_shortcode_3']) && $footer_info['add_shortcode_3'] == true)? '<div class="form_container_1">'.do_shortcode($footer_info['shortcode_3']).'</div>' : '';
                ?>
			</div>
			<div class="col col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                <?php 
                    if(!empty($footer_info['column_4_titles_and_text'])){
                        footer_column_content($footer_info['column_4_titles_and_text']);
                    }
                    echo (!empty($footer_info['add_social_icons_4']) && $footer_info['add_social_icons_4'] == true)? get_social_icons() : '';
                    echo (!empty($footer_info['add_shortcode_4']) && $footer_info['add_shortcode_4'] == true)? '<div class="form_container_1">'.do_shortcode($footer_info['shortcode_4']).'</div>' : '';
                ?>
			</div>
		</div>

	</div>
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <?php if(!empty($company_info['rights_reserved_text']))
                        {
                    ?>
                            <p><?php echo date("Y") . $company_info['rights_reserved_text']; ?></p>
                    <?php 
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
	<?php wp_footer(); ?>
</body>
</html>
