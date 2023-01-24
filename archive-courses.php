<?php 
get_header();
do_action('xray_after_body');
?>
<main>


<?php 


global $post;
// used to store the result
$pages = array();

// What to select
$args = array(
  'post_type' => 'courses',
  
  'posts_per_page' => -1,
  'meta_key'			=> 'module_number',
  'orderby'			=> '‘meta_value_num’',
  'order'				=> 'ASC',
);
$the_query = new WP_Query( $args );

while ( $the_query->have_posts() ) {
  $the_query->the_post();
  $courses[] = $post;
}
wp_reset_postdata();


$result = $courses;
//print_r($result);
 $tableRes = '';
foreach ($result as $resultlist) {
  
  $strtosplit  = $resultlist->post_title;
  $pieces = explode(" ", $strtosplit);
 
 if (strlen($pieces[0]) > 4) {
  $title = $pieces[0].'<span data-text="'.implode(' ',array_slice(explode(" ",  $strtosplit),1)).'&nbsp;"></span>';
} else {
  $title = $pieces[0].' '.$pieces[1].'<span data-text="'.implode(' ',array_slice(explode(" ",  $strtosplit),2)).'&nbsp;"></span>';
}
 $module = ! empty( get_field('module_number',$resultlist->ID) ) ? 'Module '.get_field('module_number',$resultlist->ID) : 'Module';
  $backgroundimage  = ! empty( get_the_post_thumbnail_url($resultlist->ID, 'full') ) ? 'style="background-image:url('.get_the_post_thumbnail_url($resultlist->ID, 'full').');"' : '';
  $tableRes .= ' <div '.$backgroundimage.'>
	  <a href="'.esc_attr( esc_url( get_page_link($resultlist->ID ) ) ).'" title="'.$resultlist->post_title.'"><div class="title">'.$title.'<br>'.$module .'</div><div class="overlayexpand"></div></a>
	</div>';
}
?>


	<section class="headerintro_inner" style=" background-image:url(/wp-content/uploads/2023/01/Courses-1-scaled.webp);">
					<div class="wcp-columns">2
						 <div class="wcp-column full">
							 <h1>Take a<span>Course</span></h1>
							 <ul class="breadcrumb">
								<li><a href="<?php echo get_home_url();?>">Home » </a></li>
							 	<li>Courses</li>
						 	</ul>
						 </div>
					</div>
				</section>
					
				<section class="custom_block standard hgybwhite aos-init aos-animate" data-aos="fade-up">
				

				<div class="wcp-columns">
						 <div class="wcp-column full">
							 <?php echo s9_textfield('courses_introduction', $postid = 'options', $tag = '', $className = '',$emptyText = '');?>
							<div class="linkgrid extraspace">
							  <?php echo $tableRes;?>
							</div>
							<?php echo s9_textfield('courses_end_text', $postid = 'options', $tag = '', $className = '',$emptyText = '');?>
						 </div>
				 </div>
				
				</section>	
					

</main>
<?php get_footer();  ?>