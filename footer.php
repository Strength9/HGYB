
<?php 

$footerlogo = s9_imagefield($fieldname='logo_footer', $id = 'options', $classname = '');


$sitecontactemail = s9_emaillink($fieldname = 'email_address', $postid = 'options', $titletext ='Email the team', $extratext = 'e: ',$className = '',$emptyText = '');

$sitecontactphone = s9_emaillink($fieldname = 'telephone_number', $postid = 'options', $titletext ='Email the team', $extratext = 't: ',$className = '',$emptyText = '');
?>




<footer>
	
	<section class="maincontent">
		  		<div class="bussdetails">
			  		<?php echo $footerlogo; ?>
		  		</div>
		  		<div class="menu1">
			  			<ul>
				  			<li class="title"><span>About Us</span></li>
				  			<li><a href="#" title="">Experience</a></li>
							<li><a href="#" title="">Services</a></li>
							<li><a href="#" title=""> Courses</a></li>
							<li><a href="#" title="">Blog</a></li>
							<li><a href="#" title=""> Download Brochure</a></li>
							<li><a href="#" title="">Contact Us</a></li>
			  		</ul>
		  		</div>
		  		<div class="menu2">
			  			<ul>
							<li class="title"><span>Privacy</span></li>
							<li><a href="#" title="">Experience</a></li>
							<li><a href="#" title="">Services</a></li>
						</ul>
		  		</div>
		  		<div class="contactdetails">
			  		<ul>
				  		<li class="title"><span>Contact Info</span></li>
				  		<li><?php echo $sitecontactemail;?></li>
				  		<li><?php echo $sitecontactphone;?></li>
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

