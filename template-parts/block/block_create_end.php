<?php
/*
Block Name: Custom Blocking End
Block Description: Custom Blocking End
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
echo '</section>';
?>
