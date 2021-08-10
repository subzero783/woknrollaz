<?php 
    if(!empty($field['add_todays_menu_boolean']) && $field['add_todays_menu_boolean'] === true)
    {
        $todays_menu = get_field('todays_menu', 'options');

        $menu_items = $todays_menu['menu_items'];
?>
<div id="<?php echo $field['menu_id']; ?>" class="<?php echo $field['acf_fc_layout'];?>_block" style="background-image:url(<?php echo $todays_menu['background_image']['url'];?>);">
        <div class="container">
            <div class="row">
                <img class="image_above_menu" src="<?php echo $todays_menu['image_above_menu']['url'];?>" alt="<?php echo $todays_menu['image_above_menu']['alt'];?>" />
                <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <?php if(!empty($todays_menu['title']))
                        {
                    ?>  
                            <h2><?php echo $todays_menu['title']; ?></h2>
                    <?php 
                        }
                        if(!empty($todays_menu['subtitle']))
                        {
                    ?>
                            <p><?php echo $todays_menu['subtitle']; ?></p>
                    <?php
                        }
                    ?>
                </div>
            </div>
            <div class="row">
                

                <div class="foreground_image_and_image_below_foreground_image">
                    <img class="foreground_image lazyload" src="<?php echo $todays_menu['foreground_image']['url'];?>" alt="<?php echo $todays_menu['foreground_image']['alt'];?>" />
                    <img class="image_below_foreground_image lazyload" src="<?php echo $todays_menu['image_below_foreground_image']['url'];?>" alt="<?php echo $todays_menu['image_below_foreground_image']['alt'];?>" />
                </div>

                <div class="col col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                    <div>
                        <h3><?php echo $todays_menu['menu_items_title']; ?></h3>
                        <?php 
                            $menu_items_content = '';

                            $menu_item_format = '
                                <li class="menu_item">
                                    %s
                                    <div>
                                        <div>
                                            <h5 class="menu_item_title">%s</h5>
                                            %s
                                        </div>
                                        <p>%s</p>
                                    </div>
                                </li>
                            ';

                            foreach($menu_items as $menu_item)
                            {
                                $menu_items_content .= sprintf(
                                    $menu_item_format,
                                    !empty($menu_item['menu_item_image']['url']) ? '<img class="lazyload" src="'.$menu_item['menu_item_image']['url'].'" alt="'.$menu_item['menu_item_image']['alt'].'" />' : '',
                                    $menu_item['menu_item_title'],
                                    !empty($menu_item['price'])? '<div class="menu_item_dotted_line"></div><h5 class="price">'.$menu_item['price'].'</h5>' : '',
                                    $menu_item['menu_item_description']
                                );
                            }

                        ?>
                        <ul class="menu_items"> 
                            <?php 
                                echo $menu_items_content;
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="image_below_menu_centered">
                <?php if(!empty($field)){ ?>                    
                    <img src="<?php echo $todays_menu['image_below_menu_centered']['url']; ?>" alt="<?php echo $todays_menu['image_below_menu_centered']['alt']; ?>" />
                <?php  } ?>
            </div>
        </div>
</div>
<?php 
    }
?>