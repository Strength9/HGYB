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
include('______partials_global.php');

/* --------------------------------------------------------------------------- */
echo '<section '.$anchor.' class="'.$blockclass .'" style="background-image:url(/wp-content/themes/HGYB/assets/test/header_test.gif);">
	<div class="wcp-columns">
		 <div class="wcp-column full">
		 <h1>CONTACT <span>US</span></h1>
		 </div>
	</div>
</section>';
?>
