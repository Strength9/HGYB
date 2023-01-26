<?php
/*
Block Name: FAQS
Block Description: FAQS
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: HGYB
*/
$sectionclass = 'faqs';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/HeroHeader.png" alt="Title Field">';
		return;
} 

/*
faq_block

block_title
faq_list
	faq_title
	faq
*/





$faqcards = '';
	
if( have_rows('faq_block') ):
	
	$blocklinks = '';
		// Loop through rows.
		while( have_rows('faq_block') ) : the_row();
	
			
			// Load sub field value.
			$block_title = ! empty( get_sub_field('block_title') ) ? get_sub_field('block_title') : '';
			$block_anch = strtolower(preg_replace('/[^a-zA-Z0-9-_\.]/','', $block_title));
			
			$blocklinks .= '<li><a href="#'.$block_anch.'" title="'.$block_title .'">'.$block_title .'</a></li>';
			
			$faqcards .= '<h3 id="'.$block_anch.'">'.$block_title.'</h3> <div class="accordion" >';
			
			$faqs = '';
			$SF = ! empty( get_sub_field('faq_list') ) ? get_sub_field('faq_list') : '';
			
			if( have_rows('faq_list') ):
			
			// Loop through rows.
			while( have_rows('faq_list') ) : the_row();
			$button = ! empty( get_sub_field('faq_title') ) ? get_sub_field('faq_title') : '';
			$faqcontent = ! empty( get_sub_field('faq') ) ? get_sub_field('faq') : '';
			
				$faqs .= '<div class="accordion-item">
			  		<button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">'.$button.'</span><span class="icon" aria-hidden="true"></span></button>
			  		<div class="accordion-content">
						'.$faqcontent.'
			  		</div>
				</div>';
			endwhile;
			endif;	
			
			
	$faqcards .= $faqs.'</div>';
	
		// End loop.
		endwhile;
	
	endif;
	
	


include(dirname(__DIR__).'/partials/______partials_global.php');
 echo '	
		  
			 
<section '.$anchor.' class="'.$blockclass .'" '.$styleoutput.' '.$animation.'>
	<div class="wcp-columns">
	<div class="wcp-column full">
	'.s9_textfield('intro_title', $postid = '', $tag = 'h2', $className = '',$emptyText = '').
	s9_textfield('intro_text', $postid = '', $tag = '', $className = '',$emptyText = '').'
		  <ul class="jumplist">'.$blocklinks.'</ul>
	</div>
	 	<div class="wcp-column full">		
			  '.$faqcards.'
		</div>
	</div>
</section>

<script>
const items = document.querySelectorAll(".accordion button");

function toggleAccordion() {
  const itemToggle = this.getAttribute("aria-expanded");
  
  for (i = 0; i < items.length; i++) {
	items[i].setAttribute("aria-expanded", "false");
  }
  
  if (itemToggle == "false") {
	this.setAttribute("aria-expanded", "true");
  }
}

items.forEach(item => item.addEventListener("click", toggleAccordion));
</script>
';
?>

