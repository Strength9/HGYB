<?php
/*
Block Name: Inner Page Header Block
Block Description: Inner Page Header Block
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: HGYB
*/
$sectionclass = 'headerintro_inner';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 
/* --------------------------------------------------------------------------- */
include(dirname(__DIR__).'/partials/______partials_global.php');

/* --------------------------------------------------------------------------- */
echo '<section '.$anchor.' class="'.$blockclass .'" '.$styleoutput.'>
	<div class="wcp-columns">
		 <div class="wcp-column full">
		 	<h1>'.s9_textfield('main_title_white', $postid = '', $tag = '', $className = '',$emptyText = '').s9_textfield('main_title_yellow', $postid = '', $tag = 'span', $className = '',$emptyText = '').'</h1>
		 </div>
	</div>
</section>';
?>
 