<?php
/*
Block Name: CB Customer Journey
Block Description: Customer Journey
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: HGYB_BYO
*/

/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 
$circles = random_str(10);

//select_circle_svg


echo '<div class="wcp-columns">
 <div class="wcp-column full">';
 
 if (!empty( get_field('select_circle_svg') && get_field('select_circle_svg') === 'mk' )) {
      include(dirname(__DIR__).'/circles/_marketing.php');  
} elseif (!empty( get_field('select_circle_svg') && get_field('select_circle_svg') === 'fn' )) {
  include(dirname(__DIR__).'/circles/_financialplanning.php');  
} elseif (!empty( get_field('select_circle_svg') && get_field('select_circle_svg') === 'sg' )) {
    include(dirname(__DIR__).'/circles/_salesgrowth.php');  
  } else {
   echo '<strong>Select a cirlce journey</strong>';
};

echo '</div>
 </div>
 
 <script>
 jQuery(document).ready(function () {
     function sleep_'.$circles.'(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
     }
 
      async function circles_'.$circles.'(identity) {
             var i = 1;
             while (i < 7) { jQuery("#large .circ"+i).fadeIn(1000); await sleep_'.$circles.'(500); jQuery("#large .textcirc"+i).fadeIn(500); await sleep_'.$circles.'(1000); jQuery("#large .line"+i).fadeIn(500); await sleep_'.$circles.'(1000); i++; 
             console.log(i);
          }
      }
      
      async function circles_small_'.$circles.'(identity) {
             var i = 1;
             while (i < 7) { jQuery("#small .circ"+i).fadeIn(1000); await sleep_'.$circles.'(500); jQuery("#small .textcirc"+i).fadeIn(500); await sleep_'.$circles.'(1000); jQuery("#small .line"+i).fadeIn(500); await sleep_'.$circles.'(1000); i++; 
             console.log(i);
          }
      }
  
   circles_'.$circles.'();
   
   circles_small_'.$circles.'();
 });
</script>';
?>
