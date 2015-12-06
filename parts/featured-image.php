<?php
	// If a feature image is set, get the id, so it can be injected as a css background property
	if ( has_post_thumbnail( $post->ID ) ) :
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
		$image = $image[0];
		$title = get_the_title();
		?>

	<header id="featured-hero" role="banner" style="background-image: url('<?php echo $image ?>')">
		<div class="small-12 columns single-title zero"><?php echo $title ?></div>
	</header>';
	<?php endif; ?>

