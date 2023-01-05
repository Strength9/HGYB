<?php
/*
Block Name: Icon Cards
Block Description: Icon Cards
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: HGYB
*/
$sectionclass = 'iconcards_grid';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 

include(dirname(__DIR__).'/partials/______partials_global.php');
include(dirname(__DIR__).'/partials/_iconcardgrid.php');
 




echo '<section '.$anchor.' class="'.$blockclass .'" '.$styleoutput .'>
			<div class="wcp-columns">
		 		<div class="wcp-column full">
		 			'.s9_textfield('text_detail', $postid = '', $tag = '', $className = '',$emptyText = '').$icongridoutput.'
		 		</div> 
			</div>
</section>';
?>
