<?php

add_action( 'genesis_before_content' , 'featured_image_header');

function featured_image_header() {
	if ( !is_home() && has_post_thumbnail()) { $imgID = get_post_thumbnail_id($post->ID);
	$featuredImage = wp_get_attachment_image_src($imgID, 'full' );
	$imgURL = $featuredImage[0]; ?>
	<div class="featured-page-image" style="background: url(<?php echo $imgURL ?>);"></div>
	<?php }
	} 
	
	