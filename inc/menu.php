header_ctoa_show_button

<?php

$butt = s9_textfield($fieldname = 'header_ctoa_show_button', $postid = 'options', $tag = '', $className = '',$emptyText = '');

?>


<header>
	<nav class="navigation-menu">
		
	  	<input type="checkbox" id="menu-toggle" />
	  	<?php wp_nav_menu( array(  'menu' => 'MainMenu','container'  => '', 'container_class' => '', 'container_id'    => '',   'depth' => 3 , 'items_wrap' => ' <ul class="main-navigation">
		  <div class="logo"><a href="#">Home</a></div> <li>'.$butt.'</li>
		  %3$s		  
		 		<label aria-label="Open navigation menu" for="menu-toggle">
		   		<div class="hamburger" tabindex="1">
				 		<div class="line"></div>
				 		<div class="line"></div>
				 		<div class="line"></div>
			 		</div>
				</label>
			</ul>' ) );?>  
	</nav>
</header>
