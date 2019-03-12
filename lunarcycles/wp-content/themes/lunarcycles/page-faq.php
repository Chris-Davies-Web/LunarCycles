<?php
    /*
        Template Name: FAQ Page
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
					<div class="clearfix">

					<!-- Services section loop -->
					<?php $loop = new WP_Query( array('post_type' => 'faq', 
					'orderby' => 'post_id',
					'order' => 'ASC' )); ?>
					<?php while( $loop->have_posts()) : $loop->the_post();?>
					<div class="faq">
					<div class="question"><?php the_title(); ?> </div>
							<div id="chevron"></div>
							<div class="answer">
								<?php the_field('faq_answer'); ?>
							</div>
						</div>
						<?php endwhile ?>

					</div>
				</section>

			</div><!-- content -->

		</div><!-- primary -->
	</div><!-- container -->

	<?php get_footer(); ?>