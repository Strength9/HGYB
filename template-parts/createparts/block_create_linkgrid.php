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


$selectioID = s9_textfield('select_grid_pages', $postid = '', $tag = '', $className = '',$emptyText = '');

$result = get_child_pages_by_parent_title($selectioID,-1);
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
 
  
  $backgroundimage  = ! empty( get_the_post_thumbnail_url($resultlist->ID, 'full') ) ? 'style="background-image:url('.get_the_post_thumbnail_url($resultlist->ID, 'full').');"' : '';
  $tableRes .= ' <div '.$backgroundimage.'>
      <a href="'.esc_attr( esc_url( get_page_link($resultlist->ID ) ) ).'" title="'.$resultlist->post_title.'"><div class="title">'.$title.'</div><div class="overlayexpand"></div></a>
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
