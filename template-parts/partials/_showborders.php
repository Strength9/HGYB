<?php

$showcolBorder = s9_textfield('showcolBorder', $postid = '', $tag = '', $className = '',$emptyText = '');
$showsectionBorder = '';
if ($showcolBorder != 'noshowborder') {
	$showsectionBorder.= ' '.$showcolBorder;
};

?>