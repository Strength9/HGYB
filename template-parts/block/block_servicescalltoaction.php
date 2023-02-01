<?php
/*
Block Name: Services Call to Action
Block Description: Services Call to Action
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: HGYB
*/
$sectionclass = 'servicesctoa';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/servicescalltoaction.png" alt="Title Field">';
		return;
} 
/* --------------------------------------------------------------------------- */
include(dirname(__DIR__).'/partials/______partials_global.php');


/* --------------------------------------------------------------------------- */
echo '<section '.$anchor.' class="'.$blockclass .'" '.$animation.'>
	<div class="wcp-columns">
		 <div class="wcp-column full">
		 '.s9_textfield('text_detail', $postid = '', $tag = '', $className = '',$emptyText = '').
		 do_shortcode( '[wpforms id="90"]' ).'</div>
	</div>
</section>

<script>
jQuery(\'select\').each(function(){
	var jQuerythis = jQuery(this), numberOfOptions = jQuery(this).children(\'option\').length;
  
	jQuery(this).addClass(\'select-hidden\'); 
	jQuery(this).wrap(\'<div class="select"></div>\');
	jQuery(this).after(\'<div class="select-styled"></div>\');

	var $styledSelect = jQuery(this).next(\'div.select-styled\');
	$styledSelect.text(jQuery(this).children(\'option\').eq(0).text());
  
	var $list = jQuery(\'<ul />\', {
		\'class\': \'select-options\'
	}).insertAfter($styledSelect);
  
	for (var i = 0; i < numberOfOptions; i++) {
		jQuery(\'<li />\', {
			text: jQuery(this).children(\'option\').eq(i).text(),
			rel: jQuery(this).children(\'option\').eq(i).val()
		}).appendTo($list);
		//if (jQuery(this).children(\'option\').eq(i).is(\':selected\')){
		//  jQuery(\'li[rel="\' + jQuery(this).children(\'option\').eq(i).val() + \'"]\').addClass(\'is-selected\')
		//}
	}
  
	var $listItems = $list.children(\'li\');
  
	$styledSelect.click(function(e) {
		e.stopPropagation();
		jQuery(\'div.select-styled.active\').not(this).each(function(){
			jQuery(this).removeClass(\'active\').next(\'ul.select-options\').hide();
		});
		jQuery(this).toggleClass(\'active\').next(\'ul.select-options\').toggle();
	});
  
	$listItems.click(function(e) {
		e.stopPropagation();
		$styledSelect.text(jQuery(this).text()).removeClass(\'active\');
		jQuery(this).val(jQuery(this).attr(\'rel\'));
		$list.hide();
		//console.log(jQuery(this).val());
	});
  
	jQuery(document).click(function() {
		$styledSelect.removeClass(\'active\');
		$list.hide();
	});

});
</script>
';


?>





