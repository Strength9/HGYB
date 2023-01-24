<?php
/*
Block Name: CB Courses Grid
Block Description: CB Courses Grid
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: HGYB_BYO
*/
 
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 
$rand = random_str(10);


global $post;
// used to store the result
$pages = array();

// What to select
$args = array(
  'post_type' => 'courses',
  
  'posts_per_page' => -1,
  'meta_key'			=> 'module_number',
  'orderby'			=> '‘meta_value_num’',
  'order'				=> 'ASC',
);
$the_query = new WP_Query( $args );

while ( $the_query->have_posts() ) {
  $the_query->the_post();
  $courses[] = $post;
}
wp_reset_postdata();


$result = $courses;
//print_r($result);
 $tableRes = '';
foreach ($result as $resultlist) {
  
  $strtosplit  = $resultlist->post_title;
  $pieces = explode(" ", $strtosplit);
 
 if (strlen($pieces[0]) > 5) {
  $title = $pieces[0].'<span data-text="'.implode(' ',array_slice(explode(" ",  $strtosplit),1)).'&nbsp;"></span>';
} else {
  $title = $pieces[0].' '.$pieces[1].'<span data-text="'.implode(' ',array_slice(explode(" ",  $strtosplit),2)).'&nbsp;"></span>';
}
 $module = ! empty( get_field('module_number',$resultlist->ID) ) ? 'Module '.get_field('module_number',$resultlist->ID) : 'Module';
  $backgroundimage  = ! empty( get_the_post_thumbnail_url($resultlist->ID, 'full') ) ? 'style="background-image:url('.get_the_post_thumbnail_url($resultlist->ID, 'full').');"' : '';
  $tableRes .= ' <div '.$backgroundimage.'>
      <a href="'.esc_attr( esc_url( get_page_link($resultlist->ID ) ) ).'" title="'.$resultlist->post_title.'"><div class="title">'.$title.'<br>'.$module .'</div><div class="overlayexpand"></div></a>
    </div>';
}

echo '<div class="wcp-columns">
         <div class="wcp-column full">
            <div class="linkgrid">
              '.$tableRes.'
            </div>
         </div>
 </div>';
?>
