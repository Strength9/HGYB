<?php
$headermain_logo = s9_imagefield($fieldname='logos', $id = 'options', $classname = 'main_logo');
$headmobmenu_logo = s9_imagefield($fieldname='logo_footer', $id = 'options', $classname = 'mob_logo');
$head_sitecontactemail = s9_emaillink($fieldname = 'email_address', $postid = 'options', $titletext ='Email the team', $extratext = '',$className = '',$emptyText = '');

$head_sitecontactphone = s9_emaillink($fieldname = 'telephone_number', $postid = 'options', $titletext ='Email the team', $extratext = '',$className = '',$emptyText = '');



$topbutt = s9_textfield($fieldname = 'header_ctoa_show_button', $postid = 'options', $tag = '', $className = '',$emptyText = '');

if ($topbutt === 'yes') {
	$topctoa = s9_linkfield($fieldname = 'header_ctoa_button_information', $postid = 'options', $tag = 'div', $className = 'navctoa', $contclassname = 'calltoaction');
} else {
	$topctoa = '';
};


?>

<input type="checkbox" id="menu-toggle" />
<header>
	<div class="detailbar">
		<ul class="dbar">
			<li>t:&nbsp;&nbsp;<?php echo $head_sitecontactphone;?></li>
			<li>e:&nbsp;&nbsp;<?php echo $head_sitecontactemail;?></li>
		</ul>
	</div>
	<nav class="navigation-menu">
		
	  	
	  	<?php wp_nav_menu( array(  'menu' => 'MainMenu','container'  => '', 'container_class' => '', 'container_id'    => '',   'depth' => 3 , 'items_wrap' => '
			
			<div class="logo"><a href="'.get_home_url().'">'.$headermain_logo.$headmobmenu_logo.'</a></div>
			'.$topctoa.'
			<label class="menuaction" aria-label="Open navigation menu" for="menu-toggle">
			 	<div class="hamburger" tabindex="1" onClick="showDialog()">
				   	<div class="line"></div>
				   	<div class="line"></div>
				   	<div class="line"></div>
			   	</div>
		  </label>
		  
		  <ul class="main-navigation"> %3$s </ul>' ) );?>  
	</nav>
</header>