<?php
/*
Block Name: Contact Page Form
Block Description: Contact Page Form
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: HGYB
*/
$sectionclass = 'contactform';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/HeroHeader.png" alt="Title Field">';
		return;
} 
$sitecontactemail = s9_emaillink($fieldname = 'email_address', $postid = 'options', $titletext ='Email the team', $extratext = 'e: ',$className = '',$emptyText = '');

$sitecontactphone = s9_emaillink($fieldname = 'telephone_number', $postid = 'options', $titletext ='Email the team', $extratext = 't: ',$className = '',$emptyText = '');
include(dirname(__DIR__).'/partials/______partials_global.php');
 
echo '<section '.$anchor.' class="'.$blockclass .'" '.$styleoutput.'>
<div class="wcp-columns">
	 <div class="wcp-column full">
	 <h1>Let’s Talk</h1>
	 <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
		<h4>What are you Looking For</h4>
	 </div>
</div>
	<div class="wcp-columns contactblock">
		 <div class="wcp-column bullets">
			<ul class="bulletboxes">
				<li>
					<div>“Are you looking to setup <span>a new Business?”</span></div>
				</li>
				<li><div>“Are you looking to setup <span>a new Business?”</span></div></li>
				<li><div>'.$sitecontactemail.'<br>'.$sitecontactphone.'</span></div></li>
			</ul>	
		 </div>
		 <div class="wcp-column ctform">
			 '.do_shortcode('[wpforms id="301"]').'
		  </div>
	</div>
</section>';
?>

