<?php
/*
Block Name: Page Header Block
Block Description: Page Header Block
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: HGYB
*/
$sectionclass = 'headerblock';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/HeroHeader.png" alt="Title Field">';
		return;
} 
include(dirname(__DIR__).'/partials/______partials_global.php');
 
echo '<section '.$anchor.' class="'.$blockclass .'" '.$styleoutput.'>
	<div class="wcp-columns">
		 <div class="wcp-column full">
			<h1>'.s9_textfield('main_title_white', $postid = '', $tag = '', $className = '',$emptyText = '').s9_textfield('main_title_yellow', $postid = '', $tag = 'span', $className = '',$emptyText = '').'</h1>'.s9_textfield('strapline', $postid = '', $tag = 'p', $className = 'strapline',$emptyText = '').'
			<div class="hr"></div>
			'.s9_textfield('introduction_text', $postid = '', $tag = 'p', $className = '',$emptyText = '').s9_linkfield($fieldname='header_link', $postid = '', $tag = 'div', $className = '', $contclassname = 'linkbox').'
		 </div>
	</div>
</section>';
?>
