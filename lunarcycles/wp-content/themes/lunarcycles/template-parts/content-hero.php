<!-- HERO
    ================================================== -->
    <?php if (has_post_thumbnail( $post->ID ) ): ?>
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
        <section id="hero" data-type="background" data-speed="5" style="background: url('<?php echo $image[0]; ?>') 50% 0 no-repeat fixed; background-size: cover;">
        <?php endif; ?>
        <?php if (!has_post_thumbnail( $post->ID ) ): ?>
        <section id="hero" data-type="background" data-speed="5">
    <?php endif; ?>
	
		<article>
			<div class="container clearfix">
				<div class="row">


					<div class="col-sm-12 hero-text">
						<h1><?php bloginfo('name') ?></h1>
						<p><?php bloginfo('description') ?></p>
					</div>

				</div><!-- row -->
			</div><!-- container -->
		</article>
	</section>
