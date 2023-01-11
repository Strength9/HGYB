<?php
/*
Block Name: Hex Call to Action
Block Description: Call to action with Pop Up Form
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
include(dirname(__DIR__).'/partials/______partials_global.php');

$ctoa = random_str(10);

echo '<section '.$anchor.' class="'.$blockclass .'" style="background-image:url(/wp-content/themes/HGYB/assets/test/header_test.gif);" '.$animation.'>
	<div class="wcp-columns">
		 <div class="wcp-column full">
		 '.s9_textfield('textmessage', $postid = '', $tag = 'p', $className = '',$emptyText = '').'
		 <div class="linkarea"><a href="javascript:;" class="calltoaction trigger_'.$ctoa.'" title="'.s9_textfield('button_text', $postid = '', $tag = '', $className = '',$emptyText = 'Book a Call').'">'.s9_textfield('button_text', $postid = '', $tag = '', $className = '',$emptyText = 'Book a Call').'</a></div>
		 </div>
	</div>
	

	<div id="mw_'.$ctoa.'" class="modal-wrapper">
	  	<div class="modal">
				<div class="head">
		  		<a class="btn-close trigger_'.$ctoa.'" href="javascript:;"></a>
				</div>
				<div class="content">
				'.s9_textfield('pop_up_text', $postid = '', $tag = 'p', $className = '',$emptyText = '').do_shortcode( '[wpforms id="99"]' ).'
				</div>
	  	</div>
		  
	</div>
</section>


<script>
jQuery( document ).ready(function() {
  jQuery(".trigger_'.$ctoa.'").click(function() {
	 jQuery("#mw_'.$ctoa.'").toggleClass("open");
	 return false;
  });
});
</script>';
?>
