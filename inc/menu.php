<?php

$topbutt = s9_textfield($fieldname = 'header_ctoa_show_button', $postid = 'options', $tag = '', $className = '',$emptyText = '');



if ($topbutt === 'yes') {
	$topctoa = s9_linkfield($fieldname = 'header_ctoa_button_information', $postid = 'options', $tag = 'div', $className = 'navctoa', $contclassname = 'calltoaction');
} else {
	$topctoa = '';
};
?>


<header>
	<nav class="navigation-menu">
		
	  	<input type="checkbox" id="menu-toggle" />
	  	<?php wp_nav_menu( array(  'menu' => 'MainMenu','container'  => '', 'container_class' => '', 'container_id'    => '',   'depth' => 3 , 'items_wrap' => '
			<div class="logo"><a href="#">Home</a></div>
			'.$topctoa.'
			<label class="menuaction" aria-label="Open navigation menu" for="menu-toggle">
			 	<div class="hamburger" tabindex="1">
				   	<div class="line"></div>
				   	<div class="line"></div>
				   	<div class="line"></div>
			   	</div>
		  </label>
		  <ul class="main-navigation"> %3$s </ul>' ) );?>  
	</nav>
</header>
