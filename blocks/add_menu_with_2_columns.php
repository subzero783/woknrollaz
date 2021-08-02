<?php 

if(!empty($field['add_menu_with_2_columns_boolean']) && $field['add_menu_with_2_columns_boolean'] === true)
{
    $columns_2_menu = get_field('2_column_menus_block', 'options');

    $menus_1 = $columns_2_menu['menus_1'];
    $menus_2 = $columns_2_menu['menus_2'];

    $menu_item_format = '
        <div class="menu_item">
            <div class="content_1">
                %s
                <div class="content_2">
                    <div>
                        <h5 class="menu_item_title">%s %s</h5>
                        %s
                    </div>
                    %s
                </div>            
            </div>
            %s
        </div>
    ';

    $menu_item_content = '';

?>

<div class="<?php echo $field['acf_fc_layout'];?>_block">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                <?php 
                    echo '<div class="menus_content">';
                    foreach($menus_1 as $menu_content)
                    {
                        echo '<div class="menu">';
                            echo '<h3>'.$menu_content['menu_title_1'].'</h3>';
                        foreach($menu_content['menu_items_1'] as $menu_item)
                        {
                            $menu_item_content .= sprintf(
                                $menu_item_format,
                                !empty($menu_item['menu_item_image']['url'])? '<img class="lazyload" src="'.$menu_item['menu_item_image']['url'].'" alt="'.$menu_item['menu_item_image']['alt'].'" />' : '',
                                !empty($menu_item['menu_item_title'])? $menu_item['menu_item_title'] : '',
                                $menu_item['add_logo'] === true ? get_site_food_logo() : '',
                                !empty($menu_item['menu_item_description'])? '<p class="menu_item_description">'.$menu_item['menu_item_description'].'</p>' : '',
                                !empty($menu_item['menu_item_price'])? '<h5 class="menu_item_price">'.$menu_item['menu_item_price'].'</h5>' : '',
                                !empty($menu_item['prices_bottom'])? '<p class="prices_bottom">'.$menu_item['prices_bottom'].'</p>' : ''
                            );
                        }
                            echo $menu_item_content;
                            $menu_item_content = '';
                        echo '</div>';
                    }
                    echo '</div>';
                
                ?>
            </div>
            <div class="col col-12 col-sm-12 col-md-1 col-lg-1 col-xl-1"></div>
            <div class="col col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
            <?php
                echo '<div class="menus_content">';
                foreach($menus_2 as $menu_content)
                {
                    echo '<div class="menu">';
                        echo '<h3>'.$menu_content['menu_title_2'].'</h3>';
                    foreach($menu_content['menu_items_2'] as $menu_item)
                    {
                        $menu_item_content .= sprintf(
                            $menu_item_format,
                            !empty($menu_item['menu_item_image']['url'])? '<img class="lazyload" src="'.$menu_item['menu_item_image']['url'].'" alt="'.$menu_item['menu_item_image']['alt'].'" />' : '',
                            !empty($menu_item['menu_item_title'])? $menu_item['menu_item_title'] : '',
                            $menu_item['add_logo'] === true ? get_site_food_logo() : '',
                            !empty($menu_item['menu_item_description'])? '<p class="menu_item_description">'.$menu_item['menu_item_description'].'</p>' : '',
                            !empty($menu_item['menu_item_price'])? '<h5 class="menu_item_price">'.$menu_item['menu_item_price'].'</h5>' : '',
                            !empty($menu_item['prices_bottom'])? '<p class="prices_bottom">'.$menu_item['prices_bottom'].'</p>' : ''
                        );
                    }
                        echo $menu_item_content;
                        $menu_item_content = '';
                    echo '</div>';
                }
                echo '</div>';
            ?>
            </div>
        </div>
    </div>
</div>
<?php 

}

?>