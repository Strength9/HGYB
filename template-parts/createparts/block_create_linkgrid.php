<?php
/*
Block Name: CB Link Grid
Block Description: CB Link Grid
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


$result = get_child_pages_by_parent_title(13,-1);
//print_r($result);
 $tableRes = '';
foreach ($result as $resultlist) {
  $tableRes .= ' <div title="Test">
      <a href="'.esc_attr( esc_url( get_page_link($resultlist->ID ) ) ).'" title="'.$resultlist->post_title.'">'.$resultlist->post_title.'</a>
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
