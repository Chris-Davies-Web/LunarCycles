<?php
/**
 * Template Name: Home Page
 */

// Advanced Custom Fields




get_header();
?>

<?php get_template_part( 'template-parts/content', 'hero' ); ?>
	

<?php get_template_part( 'template-parts/content', 'howWeWork' ); ?>


<?php get_template_part( 'template-parts/content', 'openingHours' ); ?>

	
<?php get_template_part( 'template-parts/content', 'testimonials' ); ?>


<?php
get_footer();
?>