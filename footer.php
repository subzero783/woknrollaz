<?php
	$footer_info = get_field('footer', 'options');
    $company_info = get_field('company_info', 'options');
?>

<div id="footer_1" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="col col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                <?php
                    if(!empty($footer_info['title_1']))
                    {
                ?>          
                        <h5><?php echo $footer_info['title_1']; ?></h5>
                <?php 
                    }
                    if(!empty($footer_info['text_1']))
                    {
                ?>          
                        <p><?php echo $footer_info['text_1']; ?></p>
                <?php  
                    }
                    echo get_social_icons();
                ?>
			</div>
			<div class="col col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                <?php
                    if(!empty($footer_info['title_2']))
                    {
                ?>          
                        <h5><?php echo $footer_info['title_2']; ?></h5>
                <?php 
                    }
                    if(!empty($footer_info['text_2']))
                    {
                ?>          
                        <p><?php echo $footer_info['text_2']; ?></p>
                <?php 
                    }
                ?>
			</div>
			<div class="col col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
            <?php
                if(!empty($footer_info['title_3']))
                    {
                ?>          
                        <h5><?php echo $footer_info['title_3']; ?></h5>
                <?php 
                    }
                    if(!empty($footer_info['text_3']))
                    {
                ?>          
                        <p><?php echo $footer_info['text_3']; ?></p>
                <?php 
                    }
                ?>
			</div>
			<!-- <div class="col col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
			
			</div> -->
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
                <!-- <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
    
                </div>
                <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                </div> -->
            </div>
        </div>
    </div>
</div>
	<?php wp_footer(); ?>
</body>
</html>
