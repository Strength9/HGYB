<?php
/*
Block Name: CB Icon Card Grid
Block Description: Icon Card Grid
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: HGYB_BYO
*/

/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 

include(dirname(__DIR__).'/partials/_iconcardgrid.php');

echo '<div class="wcp-columns"><div class="wcp-column iconcards_grid full">'.s9_textfield('text_detail', $postid = '', $tag = '', $className = '',$emptyText = '').$icongridoutput.'</div> </div>';
?>