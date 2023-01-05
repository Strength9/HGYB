<?php
/*
Block Name: CB Text and Image
Block Description:  Text and Image
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: HGYB_BYO
*/

/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 

 include(dirname(__DIR__).'/partials/_textandimage.php');
$columnalign = s9_textfield('column_alignment', $postid = '', $tag = '', $className = '',$emptyText = 'textside');

echo $textandimageoutput;
?>