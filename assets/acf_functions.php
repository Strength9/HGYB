<?php

// Return text field / date etc
function s9_textid($fieldname, $postid = '', $emptyText = '') {
	
	$textid = ! empty( get_field($fieldname, $postid) ) ? get_field($fieldname, $postid) : $emptyText;
	
	return $textid;
};

// Return text field / date etc
function s9_textfield($fieldname, $postid = '', $tag = '', $className = '',$emptyText = '') {
	$sttag = $edtag = $class = '';
	
	if ($className != '') { $class =' class= "'.$className.'"'; }
	
	if ($tag != '') { $sttag = '<'.$tag.$class.'>'; $edtag = '</'.$tag.'>'; }
	
	$textdata = ! empty( get_field($fieldname, $postid) ) ? $sttag.get_field($fieldname, $postid).$edtag : $emptyText;
	
	return $textdata;
};

// Return Image
function s9_imagefield($fieldname, $postid = '',  $className = '') {
	$class = '';
	
	if ($className != '') { $class =' class= "'.$className.'"'; }
	
	$image = get_field($fieldname, $postid);
	if( $image ):
		$url = $image['url'];
		$alt = $image['alt'];
		$imageoutput = '<img src="'.esc_url($url).'"'.$class.' alt="'.esc_attr($alt).'" />';
	else :
		$imageoutput = '';
	endif;
	
	return $imageoutput;
};

// Return Link
function s9_linkfield($fieldname, $postid = '', $tag = '', $className = '') {
	$sttag = $edtag = $class = '';
	
	if ($className != '') { $class =' class= "'.$className.'"'; }
	
	if ($tag != '') { $sttag = '<'.$tag.$class.'>'; $edtag = '</'.$tag.'>'; }
	

	$link = get_field($fieldname, $postid);
	if( $link ): 
		$link_url = $link['url'];
		$link_title = $link['title'];
		$link_target = $link['target'] ? $link['target'] : '_self';
	
		$linkoutput = $sttag.'<a class="'.$className.'" href="'.esc_url( $link_url ).'" target="'.esc_attr( $link_target ).'">'.esc_html( $link_title ).'</a>'.$edtag;
	else :
		$linkoutput = '';
	endif; 


	
	return $linkoutput;
};

// Return background image from URL
function s9_style_backgroundimage_URL($fieldname, $postid = '') {

	$styledata = ! empty( get_field($fieldname, $postid) ) ? 'style="background-image: url('.get_field($fieldname, $postid).');"' : $emptyText;
	
	return $styledata;
};

// Return background image from Array
function s9_style_backgroundimage_Array($fieldname, $postid = '') {

	$image = get_field($fieldname, $postid);
	if( $image ): $imageoutput = 'style="background-image: url('.$image['url'].');"'; else : $imageoutput = ''; endif;
	
	return $imageoutput;
};


function s9_emaillink($fieldname = '', $postid = '', $titletext ='', $extratext = '',$className = '',$emptyText = '') {

$textdata = ! empty( get_field($fieldname, $postid) ) ? get_field($fieldname, $postid) : $emptyText;
if ($extratext != '') { $extra = $extratext.' '; } else { $extra = ''; };
	if ($titletext != '') { $title =' title= "'.$titletext.'"'; };
	if ($className != '') { $class =' class= "'.$className.'"'; };
	
	return '<a href="mailto:'.$textdata .'"'.$titletext.'>'.$extra.$textdata.'</a>';
}
function s9_telink($fieldname = '', $postid = '', $titletext ='', $extratext = '',$className = '',$emptyText = '') {
	
	$textdata = ! empty( get_field($fieldname, $postid) ) ? get_field($fieldname, $postid) : $emptyText;
	
	if ($extratext != '') { $extra = $extratext.' '; } else { $extra = ''; };
	if ($titletext != '') { $title =' title= "'.$titletext.'"'; };
	if ($className != '') { $class =' class= "'.$className.'"'; };
	
	return '<a href="tel:'.$textdata.'"'.$titletext.'>'.$extra.$textdata.'</a>';
}

function s9_weblink($webaddress, $titletext ='',$className = '') {
	if ($webaddress !='') {
		if ($titletext != '') { $title =' title= "'.$titletext.'"'; };
		if ($className != '') { $class =' class= "'.$className.'"'; };
	
		return '<a href="'.$webaddress.'"'.$titletext.'>'.$webaddress.'</a>';
	} else {
		return '';
	};
}
?>