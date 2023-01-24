<?php 
get_header();
do_action('xray_after_body');
?>
<main>

<?php if ( have_posts() ) :  ?>

				<?php while ( have_posts() ) : the_post(); ?>
	<section class="headerintro_inner" style=" background-image:url(/wp-content/uploads/2023/01/Courses-1-scaled.webp);">
					<div class="wcp-columns">
						 <div class="wcp-column full">
							 <h1><?php echo the_title();?> <span>Courses</span></h1>
							 <ul class="breadcrumb">
								<li><a href="<?php echo get_home_url();?>">Home » </a></li>
							 	<li><a href="http://hgyb.local/courses/">Courses »</a></li>
							 	<li><?php echo the_title();?></li>
						 	</ul>
						 </div>
					</div>
				</section>
					<section class="textblock standard hgybwhite aos-init aos-animate" data-aos="none">
						<div class="wcp-columns">
							 <div class="wcp-column full">
							 <h1><?php echo the_title();?></h1>
							 
							 <?php echo s9_textfield('short_description', $postid = '', $tag = '', $className = '',$emptyText = '');?>
					
							 
							 </div>
						</div>
					</section>
							<?php the_content(); ?>
							
						

				<?php endwhile;  ?>
				
			<?php endif;  ?>
</main>
<?php get_footer();  ?>
