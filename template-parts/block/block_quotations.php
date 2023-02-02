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



$manual_entry = s9_textfield('manual_entry', $postid = '', $tag = '', $className = '',$emptyText = '');
$quotecards = '';
if ($manual_entry === 'Yes') {

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

} else {
	
	$args = array(
		'post_type' => 'post_testimonial',
		'post_status' => 'publish',
		'posts_per_page' => -1, 
		'orderby' => 'title', 
		'order' => 'ASC', 
	);
	$testimonialposts = new WP_Query($args);
	
	   if($testimonialposts->have_posts()) :
		  while($testimonialposts->have_posts()) :
			 $testimonialposts->the_post();
			 $post_id = get_the_ID();
			 $text = ! empty( get_field('testimonial_content',$post_id) ) ? '<p>'.get_field('testimonial_content',$post_id).'</p>' : '';
			 $textby = ! empty( get_field('testimonial_by',$post_id) ) ? get_field('testimonial_by',$post_id) : '';
			 $textcomp = ! empty( get_field('testimonial_from_company',$post_id ) ) ? '<span>'.get_field('testimonial_from_company',$post_id).'</span>' : '';
			 
			 $quotecards .= '		<div><article class="quotesblock">
				   <div class="quotemark"></div>
				   <hr class="top">
				   <div class="content">'.$text.'</div>
				   <hr class="bottom" />
				   <p class="qtby">'.$textby.' '.$textcomp.'</p>
			   </article></div>';

		  endwhile;
	   endif;

	
}

$blocktitle = 'quotation_'.s9_textfield('number_of_columns', $postid = '', $tag = '', $className = '',$emptyText = 3);



/* --------------------------------------------------------------------------- */
echo '<section '.$anchor.' class="'.$blockclass .'" '.$styleoutput .' '.$animation.'>
	<div class="wcp-columns">
	 	<div class="wcp-column full">
		 	'.s9_textfield('text_detail', $postid = '', $tag = '', $className = '',$emptyText = '').'
			<div class="'.$blocktitle.'">	'.$quotecards.'</div>
		 </div>
	</div>
</section>

<script>
jQuery(".'.$blocktitle.'").slick({
	autoplay: true,

  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
	  dots: false,
arrows: false,
		speed: 5000,
	  responsive: [
	
		{
		  breakpoint: 920,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 1
		  }
		},
		{
		  breakpoint: 650,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		  }
		}
	  ]
});
</script>';
?>
