<?php
/*
Block Name: CB Services Table
Block Description: CB Services Table
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: HGYB_BYO
*/

/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 

include(dirname(__DIR__).'/partials/_servicestable.php');

echo '<div class="wcp-columns">
	  <div class="wcp-column full"><div class="icon_gridlist">'.$services.'</div>
	 </div>
 </div>'
?>