<?php
/*
Block Name: Text Block
Block Description: Text Block
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: HGYB
*/
$sectionclass = 'textblock';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 
/* --------------------------------------------------------------------------- */
include(dirname(__DIR__).'/partials/______partials_global.php');
 
s9_textfield('text_detail', $postid = '', $tag = '', $className = '',$emptyText = '');
/* --------------------------------------------------------------------------- */
echo '<section '.$anchor.' class="'.$blockclass .'" '.$animation.'>
	<div class="wcp-columns">
		 <div class="wcp-column full">
		 '.s9_textfield('text_detail', $postid = '', $tag = '', $className = '',$emptyText = '').'
		 
		 </div>
	</div>
</section>';
?>