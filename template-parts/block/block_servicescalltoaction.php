<?php
/*
Block Name: Services Call to Action
Block Description: Services Call to Action
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: HGYB
*/
$sectionclass = 'servicesctoa';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/servicescalltoaction.png" alt="Title Field">';
		return;
} 
/* --------------------------------------------------------------------------- */
include(dirname(__DIR__).'/partials/______partials_global.php');


/* --------------------------------------------------------------------------- */
echo '<section '.$anchor.' class="'.$blockclass .'" '.$animation.'>
	<div class="wcp-columns">
		 <div class="wcp-column full">
		 '.s9_textfield('text_detail', $postid = '', $tag = '', $className = '',$emptyText = '').
		 do_shortcode( '[wpforms id="90"]' ).'</div>
	</div>
</section>';


?>





