
<?php 

$footerlogo = s9_imagefield($fieldname='logo_footer', $id = 'options', $classname = '');


$foot_sitecontactemail = s9_emaillink($fieldname = 'email_address', $postid = 'options', $titletext ='Email the team', $extratext = 'e: ',$className = '',$emptyText = '');

$foot_sitecontactphone = s9_telink($fieldname = 'telephone_number', $postid = 'options', $titletext ='Email the team', $extratext = 't: ',$className = '',$emptyText = '');


$footfacebook = s9_socialicon('facebook_link', $postid = 'options', $fontawesome = 'fa-brands fa-square-facebook', $titletext = 'Find Us On Facebook',$emptyText = '', '');

$twitter_link = s9_socialicon('twitter_link', $postid = 'options', $fontawesome = 'fa-brands fa-square-twitter', $titletext = 'Find Us On Twitter',$emptyText = '', '');

$instagram_link = s9_socialicon('instagram_link', $postid = 'options', $fontawesome = 'fa-brands fa-square-instagram', $titletext = 'Find Us On Insta',$emptyText = '', '');

$inkedin_link = s9_socialicon('linkedin_link', $postid = 'options', $fontawesome = 'fa-brands fa-linkedin', $titletext = 'Find Us On Linked In',$emptyText = '', '');


if (strlen($footfacebook.$twitter_link.$instagram_link.$inkedin_link) > 0) {
	$socialmedialinks = '<li class="socials">'.$footfacebook.$twitter_link.$instagram_link.$inkedin_link.'</li>';
} else { $socialmedialinks = '';};



$businessdevlogo = s9_imagefield($fieldname='business_details_logo', $id = 'options', $classname = '');
if (strlen($businessdevlogo) > 0) {
$bdlink = get_field('business_details_link', 'options');
if( $bdlink ): 
	$buttonclass = 'bark';
	$link_url = $bdlink['url'];
	$link_title = $bdlink['title'];
	$link_target = $bdlink['target'] ? $bdlink['target'] : '_self';

	$business_details_link = '<li class="barklogo"><a class="'.$buttonclass.'" href="'.esc_url( $link_url ).'" target="'.esc_attr( $link_target ).'">'.$businessdevlogo.'</a></li>';
else :
	$business_details_link = '';
endif; 
} else {
	$business_details_link = '';
};



$bdtext = get_field('download_brochure_text', 'options');
if( $bdtext): 
	$buttonclass = 'bark';
	$link_url = $bdtext['url'];
	$link_title = $bdtext['title'];
	$link_target = $bdtext['target'] ? $bdtext['target'] : '_self';

	$business_brochure = '<div class="brochure"><a href="'.esc_url( $link_url ).'" target="'.esc_attr( $link_target ).'" download>'.$link_title.'</a></div>';
else :
	$business_brochure = '';
endif; 


?>




<footer>
	
	<section class="maincontent">
		  		<div class="bussdetails">
			  		<a href="<?php echo get_home_url();?>"><?php echo $footerlogo; ?></a>
					  <p>Helping small to medium size
						<span>businesses step up to the next level</span></p>
						<?php echo $business_brochure;?>
						
		  		</div>
		  		<div class="menu1">
					  <?php wp_nav_menu( array(  'menu' => 'FooterQuickLinks','container'  => 'li', 'container_class' => '', 'container_id'    => '',   'depth' => 1, 'items_wrap' => '<ul ><li class="title"><span>Quick Links</span></li>%3$s</ul>' ) );?>
					</div>
		  		<div class="menu2">
					<?php wp_nav_menu( array(  'menu' => 'FooterLegal','container'  => 'li', 'container_class' => '', 'container_id'    => '',   'depth' => 1, 'items_wrap' => '<ul ><li class="title"><span>Legal</span></li>%3$s</ul>' ) );?>
		  		</div>
		  		<div class="contactdetails">
			  		<ul>
				  		<li class="title"><span>Contact Info</span></li>
				  		<li><?php echo $foot_sitecontactemail;?></li>
				  		<li><?php echo $foot_sitecontactphone;?></li>
						  <?php echo $socialmedialinks;?>
						  <?php echo $business_details_link;?>
			  		</ul>
		  		</div>

	</section>
	<div class="copyrightstrip">
		<div><p>Copyright 2022. All rights reserved</p></div>
	</div>
</footer>

<?php include_once("inc/newsletter_popup.php");?>
<?php wp_footer(); ?>



</body>
</html>

