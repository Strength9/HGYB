<?php
/*
Block Name: Icon Cards
Block Description: Icon Cards
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: HGYB
*/
$sectionclass = 'iconcards_grid';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 
/* --------------------------------------------------------------------------- */
include('______partials_global.php');

/* --------------------------------------------------------------------------- */
echo '<section '.$anchor.' class="'.$blockclass .'" '.$styleoutput .'>
	<div class="wcp-columns">
		 <div class="wcp-column full">
		
		<h1>What People Say</h1>
	<div class="icongrid">	
		<article class="hgyb_box">
		<span class="imgblocker" style="width:105px"></span>
		  <img src="/wp-content/themes/HGYB/assets/img/svg/rocket.svg" alt="" />
		  
		  <h2>Business Setup</h2>
		  <p>Sales Growth Assistance throughout the business setup process to create the financial and business structure to help lead you to success. Sales Growth Assistance throughout the business setup process to create the financial and business structure to help lead you to success.</p>
		
		  <a href="#" class="button">Read More</a>
		</article>
		
		<article class="hgyb_box">
		  <img src="/wp-content/themes/HGYB/assets/img/svg/rocket.svg" alt="" />
		  <span class="imgblocker" style="width:105px"></span>
		  <h2>Business Setup</h2>
		  <p>Sales Growth Assistance throughout the business setup process to create the financial and business structure to help lead you to success. Sales Growth Assistance throughout the business setup process to create the financial and business structure to help lead you to success.</p>
		
		  <a href="#" class="button">Read More</a>
		</article>
		
		<article class="hgyb_box">
		  <img src="/wp-content/themes/HGYB/assets/img/svg/rocket.svg" alt="" />
		  <span class="imgblocker" style="width:105px"></span>
		  <h2>Business Setup</h2>
		  <p>Sales Growth Assistance throughout the business setup process to create the financial and business structure to help lead you to success. Sales Growth Assistance throughout the business setup process to create the financial and business structure to help lead you to success.</p>
		
		  <a href="#" class="button">Read More</a>
		</article>
		
		<article class="hgyb_box">
		  <img src="/wp-content/themes/HGYB/assets/img/svg/rocket.svg" alt="" />
		  <span class="imgblocker" style="width:105px"></span>
		  <h2>Business Setup</h2>
		  <p>Sales Growth Assistance throughout the business setup process to create the financial and business structure to help lead you to success. Sales Growth Assistance throughout the business setup process to create the financial and business structure to help lead you to success.</p>
		
		  <a href="#" class="button">Read More</a>
		</article>
		
		<article class="hgyb_box">
		  <img src="/wp-content/themes/HGYB/assets/img/svg/rocket.svg" alt="" />
		  <span class="imgblocker" style="width:105px"></span>
		  <h2>Business Setup</h2>
		  <p>Sales Growth Assistance throughout the business setup process to create the financial and business structure to help lead you to success. Sales Growth Assistance throughout the business setup process to create the financial and business structure to help lead you to success.</p>
		
		  <a href="#" class="button">Read More</a>
		</article>
		
		<article class="hgyb_box">
		  <img src="/wp-content/themes/HGYB/assets/img/svg/rocket.svg" alt="" />
		  <span class="imgblocker" style="width:105px"></span>
		  <h2>Business Setup</h2>
		  <p>Sales Growth Assistance throughout the business setup process to create the financial and business structure to help lead you to success. Sales Growth Assistance throughout the business setup process to create the financial and business structure to help lead you to success.</p>
		
		  <a href="#" class="button">Read More</a>
		</article>
			  
			 </div>
		 </div>
		 
	</div>
</section>';
?>
