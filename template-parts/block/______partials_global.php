<?php 

$blockclass = $sectionclass;
$anchor = $background_colour= $styleaddition = $styleoutput ='';
if( !empty( $block['anchor'] ) ) $anchor = ' id="' . sanitize_title( $block['anchor'] ) . '"';
if( !empty( $block['className'] ) ) $blockclass .= ' '.sanitize_title( $block['className'] );

$background_colour = s9_textfield($fieldname = 'background_colour', $postid = '', $tag = '', $className = '',$emptyText = '');

$section_spacing = s9_textfield($fieldname = 'section_spacing', $postid = '', $tag = '', $className = '',$emptyText = '');

if ($section_spacing != '') {
	$blockclass .= ' '.sanitize_title($section_spacing);
};


if ($background_colour != '') {
	$blockclass .= ' '.sanitize_title($background_colour);
};

$background_image = s9_textfield('background_image', $postid = '', $tag = '', $className = '',$emptyText = '');

if ($background_image != '') {
	$styleaddition .= ' background-image:url('.$background_image.');';
};

if ($styleaddition  != '') {
	$styleoutput = 'style="'.$styleaddition.'"';
}

?>
 