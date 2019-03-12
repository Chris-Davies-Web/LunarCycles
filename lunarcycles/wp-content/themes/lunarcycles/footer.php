<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lunar_Cycles
 */

?>


	<!-- FOOTER
	================================================== -->
	<footer>
		<div class="container">
			<div class="col-sm-9">
				<nav>
					<ul class="list-unstyled list-inline">
						<li><i class="fab fa-twitter"></i><a href="https://twitter.com/lunarcycles_">Twitter</a></li>
						<li><i class="fab fa-facebook-square"></i></i><a href="https://www.facebook.com/LunarCyclesWorkshop">Facebook</a></li>
					</ul>
				</nav>
			</div><!-- end col -->
			<div class="col-sm-3">
				<p class="pull-right">&copy; Lunar Cycles 2019</p>
			</div><!-- end col -->
		</div><!-- container -->
	</footer>

	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-2.1.1.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>

	<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

	<script type="text/javascript" src="//use.typekit.net/gla7wnd.js"></script>
	<script type="text/javascript">try { Typekit.load(); } catch (e) { }</script>

<?php wp_footer(); ?>

</body>
</html>
