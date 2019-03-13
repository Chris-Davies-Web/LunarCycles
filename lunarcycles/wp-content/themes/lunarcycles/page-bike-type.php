<?php
    /*
        Template Name: Bike Type Page
	*/
	
	get_header();
	$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID) );
?>

<?php echo $thumbnail_url ?>

	<!-- FEATURE IMAGE
	================================================== -->
	<?php if(has_post_thumbnail()) { // Check for feautre image?>
	<section class="feature-image" style="background: url('<?php echo $thumbnail_url ?>') no-repeat; background-size: cover; background-position: center;">
		<h1><?php the_title(); ?></h1>
	</section>
	<?php } else { // fallback image?>
	<section class="feature-image feature-image-default">
		<h1><?php the_title(); ?></h1>
	</section>
	<?php } ?> 

	<!-- MAIN CONTENT
	================================================== -->
	<div class="container">
		<div class="row" id="primary">

			<div id="content" class="col-sm-12">

				<section class="main-content">
				<?php echo get_field('details_of_bike'); ?>
				</section>

			</div><!-- content -->

		</div><!-- primary -->
	</div><!-- container -->

	<?php get_footer(); ?>