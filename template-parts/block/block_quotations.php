<?php
/*
Block Name: Quotation Lists
Block Description: Quote Lists
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: HGYB
*/
$sectionclass = 'quotes_grid ';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 
/* --------------------------------------------------------------------------- */
include(dirname(__DIR__).'/partials/______partials_global.php');

$quotecards = '';

if( have_rows('quote_cards') ):
	while( have_rows('quote_cards') ) : the_row();
		$text = ! empty( get_sub_field('quote_text') ) ? '<p>'.get_sub_field('quote_text').'</p>' : '';
		$textby = ! empty( get_sub_field('quote_by') ) ? get_sub_field('quote_by') : '';
		$textcomp = ! empty( get_sub_field('quote_company') ) ? '<span>'.get_sub_field('quote_company').'</span>' : '';
		

		$quotecards .= '		<article class="quotesblock">
			  <div class="quotemark"></div>
			  <hr class="top">
			  '.$text.'
			  <hr class="bottom" />
			  <p class="qtby">'.$textby.' '.$textcomp.'</p>
		  </article>';

	// End loop.
	endwhile;

endif;




/* --------------------------------------------------------------------------- */
echo '<section '.$anchor.' class="'.$blockclass .'" '.$styleoutput .' '.$animation.'>
	<div class="wcp-columns">
	 	<div class="wcp-column full">
		 	'.s9_textfield('text_detail', $postid = '', $tag = '', $className = '',$emptyText = '').'
			<div class="quotation_'.s9_textfield('number_of_columns', $postid = '', $tag = '', $className = '',$emptyText = 3).'">	'.$quotecards.'</div>
		 </div>
	</div>
</section>';
?>
