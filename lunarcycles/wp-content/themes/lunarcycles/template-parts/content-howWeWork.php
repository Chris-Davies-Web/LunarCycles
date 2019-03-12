    <?php 
        
$how_we_work_title = get_field( 'how_we_work_section_title');
$how_we_work = array(get_field('how_we_work_1'),get_field('how_we_work_2'), get_field('how_we_work_3'), get_field('how_we_work_4'));
    ?>
    <!-- HOW WE WORK SECTION
	================================================== -->
	<section id="how-we-work">
		<div class="container">
			<h2><?php echo $how_we_work_title ?></h2>
			<div class="row">
            <?php foreach ($how_we_work as $key=>$value): ?>
				<div class="col-sm-12 col-md-6 col-lg-3">
                <?php foreach ($how_we_work[$key] as $index=>$val): ?>
                    <?php echo $how_we_work[$key][$index]; ?>
                    <p class="lead"><?php echo $how_we_work[$key][$index + 1]; ?></p>
                    
                <?php endforeach; ?>
                    </div><!-- end col -->
            <?php endforeach; ?>
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- optin -->