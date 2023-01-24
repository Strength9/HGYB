
<?php 

$footerlogo = s9_imagefield($fieldname='logo_footer', $id = 'options', $classname = '');


$foot_sitecontactemail = s9_emaillink($fieldname = 'email_address', $postid = 'options', $titletext ='Email the team', $extratext = 'e: ',$className = '',$emptyText = '');

$foot_sitecontactphone = s9_emaillink($fieldname = 'telephone_number', $postid = 'options', $titletext ='Email the team', $extratext = 't: ',$className = '',$emptyText = '');
?>




<footer>
	
	<section class="maincontent">
		  		<div class="bussdetails">
			  		<?php echo $footerlogo; ?>
					  <p>Helping small to medium size
						<span>businesses step up to the next level</span></p>
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
			  		</ul>
		  		</div>

	</section>
	<div class="copyrightstrip">
		<div><p>Copyright 2022. All rights reserved</p></div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>

