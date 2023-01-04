<?php
/*
Block Name: Create Text and Image
Block Description:  Text and Image
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: HGYB_BYO
*/
$sectionclass = 'cblock';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 

echo '<div class="wcp-columns">
 <div class="wcp-column">
	 '.s9_textfield('text_detail', $postid = '', $tag = '', $className = '',$emptyText = '').'
	  </div>
 <div class="wcp-column">
 <p>Lorem ipsum dolor amet mustache knausgaard +1, blue bottle waistcoat tbh semiotics artisan synth stumptown gastropub cornhole celiac swag. Brunch raclette vexillologist post-ironic glossier ennui XOXO mlkshk godard pour-over blog tumblr humblebrag. Blue bottle put a bird on it twee prism biodiesel brooklyn. Blue bottle ennui tbh succulents.</p>
 </div>
 </div>';
?>