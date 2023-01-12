<?
function get_child_pages_by_parent_title($pageId,$limit = -1)
{
	// needed to use $post
	global $post;
	// used to store the result
	$pages = array();

	// What to select
	$args = array(
		'post_type' => 'page',
		'post_parent' => $pageId,
		'posts_per_page' => $limit
	);
	$the_query = new WP_Query( $args );

	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		$pages[] = $post;
	}
	wp_reset_postdata();
	return $pages;
}
?>