<?php
/*
Block Name: Custom Blocking Start
Block Description: Custom Blocking Start
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: HGYB_BYO
*/
$sectionclass = 'custom_block';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 
/* --------------------------------------------------------------------------- */
include('______partials_global.php');

/* --------------------------------------------------------------------------- */
echo '<section '.$anchor.' class="'.$blockclass .'" '.$styleoutput.'>';