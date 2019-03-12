<?php
    /*
        Template Name: Services Page
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
					<div class="service-row clearfix">

					<!-- Services section loop -->
					<?php $loop = new WP_Query( array('post_type' => 'services', 
					'orderby' => 'post_id',
					'order' => 'ASC' )); ?>
					<?php while( $loop->have_posts()) : $loop->the_post();?>
						<div class="service <?php the_field('accordion_open'); ?>">
							<div class="title"><?php the_title(); ?> <span class="price"><?php the_field('service_price'); ?></span></div>
							<div id="chevron"></div>
							<div class="service-content">
								<?php the_field('service_description'); ?>
							</div>
						</div>
						<?php endwhile ?>
					</div>
				</section>

			</div><!-- content -->

		</div><!-- primary -->
	</div><!-- container -->

	<?php get_footer(); ?>