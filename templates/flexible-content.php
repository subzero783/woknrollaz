<?php 
/*
* Template Name: Flexible Content
*/
  $fields = get_fields( get_the_ID() );
  get_header();
?>
<main>

<?php 
  if( !empty($fields['blocks']) ){
    foreach ($fields['blocks'] as $field) {
      $path = get_stylesheet_directory() . '/blocks/' . $field['acf_fc_layout'] . '.php';
      // include the block
      if( file_exists($path) ){
        include($path);
      }
    }
  }
?>

</main>
<?php 
  get_footer(); 
?>