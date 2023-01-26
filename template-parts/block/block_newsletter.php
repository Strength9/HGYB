<?php
/*
Block Name: Newsletter
Block Description: Newsletter
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: HGYB
*/
$sectionclass = 'newsletterctoa';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/servicescalltoaction.png" alt="Title Field">';
		return;
} 
/* --------------------------------------------------------------------------- */
include(dirname(__DIR__).'/partials/______partials_global.php');



$backgroundimg = s9_textfield('global_newsletter_strip_image', $postid = 'options', $tag = '', $className = '',$emptyText = '');

/* --------------------------------------------------------------------------- */
echo '<section '.$anchor.' class="'.$blockclass .'" style="background-image:url('.$backgroundimg.');" '.$animation.'>
	<div class="wcp-columns">
		 <div class="wcp-column full">'.do_shortcode( '[wpforms id="988"]' ).'</div>
	</div>
</section>';
?>





