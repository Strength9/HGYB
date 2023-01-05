<?php
/*
Block Name: CB Iframe
Block Description: Drop Iframe embed in
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: HGYB_BYO
*/

/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 



echo '<div class="wcp-columns"><div class="wcp-column full">'.s9_textfield('iframe_code', $postid = '', $tag = 'div', $className = 'video-container',$emptyText = '').'

</div></div>';

?>