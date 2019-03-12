<?php 
	
$contact_info = get_field('contact_information');
$contact_title = get_field('opening_hours_and_contact_title');
$opening_times = get_field('opening_hours');
?>

<!-- OPENING HOURS
	================================================== -->
	<section id="opening-hours">
		<div class="container">
			<div class="section-header">
				<i class="far fa-clock"></i>
				<h2><?php echo $contact_title; ?></h2>
			</div><!-- section-header -->

			<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-6">
                     <?php echo $contact_info; ?>
				</div>

				<div class="col-sm-12 col-md-6 col-lg-6">
                <?php echo $opening_times; ?>
				</div>

			</div><!-- end col -->
		</div><!-- row -->

		</div><!-- container -->
	</section><!-- opening hours -->