<?php
/* 
Block Name: Services Table
Block Description: Services Table
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: HGYB
*/
$sectionclass = 'servicestable';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 
/* --------------------------------------------------------------------------- */
include(dirname(__DIR__).'/partials/______partials_global.php');


/*
table_icon


list_text

*/
$services_table = '';
$services = '';
if( have_rows('services_table') ):

	// Loop through rows.
	while( have_rows('services_table') ) : the_row();

		
		// Load sub field value.
		$title = ! empty( get_sub_field('table_title') ) ? '<h3>'.get_sub_field('table_title').'</h3>' : '';
		$listitem = '';
		if( have_rows('table_list') ):
			
			while( have_rows('table_list') ) : the_row();
		
			$listitem .= ! empty( get_sub_field('list_text') ) ? '<li>'.get_sub_field('list_text').'</li>' : '';
		
			endwhile;
		
		endif;
		
		$image = get_sub_field('table_icon');
		if( $image ):
			$imageclass = '';
			$url = $image['url'];
			$alt = $image['alt'];
		
			$mimage = '<img src="'.esc_url($url).'"  alt="'.esc_attr($alt).'" />';
		else :
			$mimage = '';
		endif;
		
		
$services .= '<div class="icon_arealist">
	 <div class="areatext">
	   '.$title.'
	   <ul>'.$listitem.'</ul>
	 </div>
	 <div class="iconarea">
	 '.$mimage.'
	 </div>
   </div>';

	// End loop.
	endwhile;

endif;

$servicesoutput = '<div class="icon_gridlist">'.$services.'</div>';
 
echo '<section '.$anchor.' class="'.$blockclass .'" '.$animation.'>
	<div class="wcp-columns">
	 	<div class="wcp-column full">
		 '.s9_textfield('text_detail', $postid = '', $tag = '', $className = '',$emptyText = '').$servicesoutput.'
		</div>
	</div>
</section>';
?>
