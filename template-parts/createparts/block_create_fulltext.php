<?php
/*
Block Name: Create Full Text
Block Description:  Full Text
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: HGYB_BYO
*/
$sectionclass = 'cblock';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 

echo '<div class="wcp-columns">
 <div class="wcp-column full">
     '.s9_textfield('text_detail', $postid = '', $tag = '', $className = '',$emptyText = '').'
       </div>
 </div>';
?>
