<?php

$textandimageoutput = '<div class="wcp-columns '.s9_textfield('column_alignment', $postid = '', $tag = '', $className = '',$emptyText = 'textside').'">
		<div class="wcp-column textside">'.s9_textfield('text_detail', $postid = '', $tag = '', $className = '',$emptyText = '').'</div>
	 <div class="wcp-column imageside">'.s9_imagefield($fieldname='block_image', $id = '', $classname = '').'</div>
</div>';

?>