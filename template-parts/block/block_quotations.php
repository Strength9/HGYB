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
include(dirname(__DIR__).'/______partials_global.php');

/* --------------------------------------------------------------------------- */
echo '<section '.$anchor.' class="'.$blockclass .'" '.$styleoutput .'>
	<div class="wcp-columns">
	 	<div class="wcp-column full">
		
		<h1>What People Say</h1>
	<div class="quotation">	
		<article>
			
			  <div class="quotemark"></div>
			  <hr class="top">
			  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo nulla odio culpa minus. Eius tempore nulla animi esse possimus deserunt, veritatis, officia hic, accusamus vero cupiditate ratione id! Eos, illum. </p>
			  <hr class="bottom" />
			  <p class="qtby">Quote By <span>Quote Company</span></p>
		
		  </article>
		<article>
			
			  <div class="quotemark"></div>
			  <hr class="top">
			  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo nulla odio culpa minus. Eius tempore nulla animi esse possimus deserunt, veritatis, officia hic, accusamus vero cupiditate ratione id! Eos, illum. </p>
			  <hr class="bottom" />
			  <p class="qtby">Quote By <span>Quote Company</span></p>
	
		  </article>
			  <article>
				 
					<div class="quotemark"></div>
					<hr class="top">
					<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo nulla odio culpa minus. Eius tempore nulla animi esse possimus deserunt, veritatis, officia hic, accusamus vero cupiditate ratione id! Eos, illum. </p>
					<hr class="bottom" />
					<p class="qtby">Quote By <span>Quote Company</span></p>
				 
				</article>
			  
	 		</div>
		 </div>
	 	
	</div>
</section>';
?>
