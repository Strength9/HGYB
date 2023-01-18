<?php
/* 
Block Name: Services Table
Block Description: Services Table
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: HGYB
*/
$sectionclass = 'servicestable';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 
/* --------------------------------------------------------------------------- */
include(dirname(__DIR__).'/partials/______partials_global.php');

include(dirname(__DIR__).'/partials/_servicestable.php');
 
echo '<section '.$anchor.' class="'.$blockclass .'" '.$animation.'>
	'.$servicesoutput.'
</section>';
?>
