<?php
/*
Block Name: Services Table
Block Description: Services Table
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: HGYB
*/
$sectionclass = 'servicestable';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 
/* --------------------------------------------------------------------------- */
include('______partials_global.php');

/* --------------------------------------------------------------------------- */
echo '<section '.$anchor.' class="'.$blockclass .'">
	<div class="wcp-columns">
	 	<div class="wcp-column full">
		 
		 <h1>Services Grid</h1>
		 	<div class="icon_gridlist">
			   <div class="icon_arealist">
				 <div class="areatext">
				   <h3>Area Heading</h3>
				   <ul>
					 <li>Google AdWords (pay-per-click)</li>
					 <li>Website SEO</li>
					 <li>Images and video for online promotion </li>
					 <li>Online display advertising</li>
					 <li>Web development</li>
				   </ul>
				 </div>
				 <div class="iconarea">
				   <img src="https://assets.codepen.io/320472/blue2.svg" alt="" />
				 </div>
			   </div>
			   <div class="icon_arealist">
				 <div class="areatext">
				   <h3>Area Heading</h3>
				   <ul>
					 <li>Google AdWords (pay-per-click)</li>
					 <li>Website SEO</li>
					 <li>Images and video for online promotion </li>
					 <li>Online display advertising</li>
					 <li>Web development</li>
					 <li>On-page and off-page optimisation</li>
					 <li>Customer relations </li>
					 <li>Customer relationship management systems</li>
					 <li>Customer loyalty programmes</li>
					 <li>Website user experience</li>
				   </ul>
				 </div>
				 <div class="iconarea">
				   <img src="https://assets.codepen.io/320472/blue2.svg" alt="" />
				 </div>
			   </div>
			   <div class="icon_arealist">
				 <div class="areatext">
				   <h3>Area Heading</h3>
				   <ul>
					 <li>Google AdWords (pay-per-click)</li>
					 <li>Website SEO</li>
					 <li>Images and video for online promotion </li>
					 <li>Online display advertising</li>
					 <li>Web development</li>
					 <li>On-page and off-page optimisation</li>
					 <li>Customer relations </li>
					 <li>Customer relationship management systems</li>
					 <li>Customer loyalty programmes</li>
					 <li>Website user experience</li>
				   </ul>
				 </div>
				 <div class="iconarea">
				   <img src="https://assets.codepen.io/320472/blue2.svg" alt="" />
				 </div>
			   </div>
			   <div class="icon_arealist">
				 <div class="areatext">
				   <h3>Area Heading</h3>
				   <ul>
					 <li>Google AdWords (pay-per-click)</li>
					 <li>Website SEO</li>
					 <li>Images and video for online promotion </li>
					 <li>Online display advertising</li>
					 <li>Web development</li>
				   </ul>
				 </div>
				 <div class="iconarea">
				   <img src="https://assets.codepen.io/320472/blue2.svg" alt="" />
				 </div>
			   </div>
			   <div class="icon_arealist">
				 <div class="areatext">
				   <h3>Area Heading</h3>
				   <ul>
					 <li>Google AdWords (pay-per-click)</li>
					 <li>Website SEO</li>
					 <li>Images and video for online promotion </li>
					 <li>Online display advertising</li>
					 <li>Web development</li>
					 <li>On-page and off-page optimisation</li>
					 <li>Customer relations </li>
					 <li>Customer relationship management systems</li>
					 <li>Customer loyalty programmes</li>
					 <li>Website user experience</li>
				   </ul>
				 </div>
				 <div class="iconarea">
				   <img src="https://assets.codepen.io/320472/blue2.svg" alt="" />
				 </div>
			   </div>
			   <div class="icon_arealist">
				 <div class="areatext">
				   <h3>Area Heading</h3>
				   <ul>
					 <li>Google AdWords (pay-per-click)</li>
					 <li>Website SEO</li>
					 <li>Images and video for online promotion </li>
					 <li>Online display advertising</li>
					 <li>Web development</li>
				   </ul>
				 </div>
				 <div class="iconarea">
				   <img src="https://assets.codepen.io/320472/blue2.svg" alt="" />
				 </div>
			   </div>
			 
			 </div>
		 
		 </div>
	 		
	</div>
</section>';
?>
