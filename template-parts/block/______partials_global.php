<?php 

$blockclass = $sectionclass;
$anchor = $background_colour= $styleaddition = $styleoutput ='';
if( !empty( $block['anchor'] ) ) $anchor = ' id="' . sanitize_title( $block['anchor'] ) . '"';
if( !empty( $block['className'] ) ) $blockclass .= ' '.sanitize_title( $block['className'] );

$background_colour = s9_textfield($fieldname = 'background_colour', $postid = '', $tag = '', $className = '',$emptyText = '');

if ($background_colour != '') {
	$styleaddition .= ' background-color:'.$background_colour.';';
};

if ($styleaddition  != '') {
	$styleoutput = 'style="'.$styleaddition.'"';
}

?>
