<?php

$testimonial_section_image = get_field('testimonial_image');
$testimonial_section_title = get_field('testimonial_title');

?>
<!-- TESTIMONIALS
	================================================== -->
	<section id="testimonials">
		<div class="container">

			<div class="section-header">
			<?php if(!empty($testimonial_section_image)): ?>
				<img src="<?php echo $testimonial_section_image['url']; ?>" alt="<?php echo $testimonial_section_image['alt']; ?>" title="<?php echo $testimonial_section_image['title']; ?>">
			<?php endif; ?>
			<?php if(empty($testimonial_section_image)): ?>
				<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-pad.png" alt="Pad and pencil" title="Pad and pencil">
			<?php endif; ?>
				<h2><?php echo $testimonial_section_title; ?></h2>
			</div><!-- section-header -->

			<!-- Testimonial section loop -->
			<?php $loop = new WP_Query( array('post_type' => 'testimonial', 
			'orderby' => 'post_id',
			'order' => 'ASC' )); ?>

			<?php while( $loop->have_posts()) : $loop->the_post();?>
				<div class="col-sm-12 col-md-6 col-lg-6 testimonial">
					<p><?php the_field('testimonial'); ?></p>
					<p class="author"><?php the_field('author'); ?></p>
				</div>
			<?php endwhile ?>

		</div><!-- container -->
	</section><!-- testimonials -->