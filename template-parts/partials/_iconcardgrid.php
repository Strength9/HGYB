<?php
$iconcards = '';

if( have_rows('icon_cards') ):

	// Loop through rows.
	while( have_rows('icon_cards') ) : the_row();

		
		// Load sub field value.
		$title = ! empty( get_sub_field('card_header') ) ? '<h2>'.get_sub_field('card_header').'</h2>' : '';
		$text = ! empty( get_sub_field('card_text') ) ? '<p>'.get_sub_field('card_text').'</p>' : '';
		$iconwidth = ! empty( get_sub_field('card_image_icon_bg_width') ) ? get_sub_field('card_image_icon_bg_width') : '400';
		$icon = ! empty( get_sub_field('card_icon') ) ? '<span class="imgblocker" style="width:'.$iconwidth.'px;"></span><img src="'.get_sub_field('card_icon').'" alt="" />' : '';
		
		
		
		$link = get_sub_field('card_link');
		if( $link ): 
			$buttonclass = 'button'; $link_url = $link['url']; $link_title = $link['title']; $link_target = $link['target'] ? $link['target'] : '_self';
			$linkoutput = '<a class="'.$buttonclass.'" href="'.esc_url( $link_url ).'" target="'.esc_attr( $link_target ).'">'.esc_html( $link_title ).'</a>';
		else : $linkoutput = ''; endif; 

		$iconcards .= '<article class="hgyb_iconcardbox">
		'.$icon.'
		  '.$title.$text.$linkoutput.'
		</article>';

	// End loop.
	endwhile;

endif;

$icongridoutput = '<div class="icongrid_'.s9_textfield('number_of_columns', $postid = '', $tag = '', $className = '',$emptyText = 3).'">	'.$iconcards.'</div>';
?>