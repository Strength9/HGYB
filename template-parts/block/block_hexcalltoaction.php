<?php
/*
Block Name: Hex Call to Action
Block Description: Hex Call to Action
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: HGYB
*/
$sectionclass = 'hexcalltoaction';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 
/* --------------------------------------------------------------------------- */
include(dirname(__DIR__).'/______partials_global.php');

/* --------------------------------------------------------------------------- */
echo '<section '.$anchor.' class="'.$blockclass .'" style="background-image:url(/wp-content/themes/HGYB/assets/test/header_test.gif);">
	<div class="wcp-columns">
		 <div class="wcp-column full">
		
		 <p>To find out more, please click below to arrange an initial telephone appointment</p>
		 <div class="linkarea"><a href="#" class="calltoaction trigger" title="Call to Action">Book a Call</a></div>
		 </div>
	</div>
	

	<div class="modal-wrapper">
	  	<div class="modal">
				<div class="head">
		  		<a class="btn-close trigger" href="javascript:;"></a>
				</div>
				<div class="content">
				<p>Complete the form and a member of the team will get in touch.</p>
				'.do_shortcode( '[wpforms id="99"]' ).'
				</div>
	  	</div>
		  
	</div>
</section>


<script>
jQuery( document ).ready(function() {
  jQuery(".trigger").click(function() {
	 jQuery(".modal-wrapper").toggleClass("open");
	 return false;
  });
});
</script>';
?>
