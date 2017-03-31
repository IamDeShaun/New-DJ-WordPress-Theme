<?php
$about_headline = get_field('about_headline');
$about_description = get_field('about_description');
$about_image = get_field('about_image');
?>

<!-- About Section
	================================================== -->
	<section id="About-Me">
		<div class="container">
        <div class="section-header">
				<h2><?php echo $about_headline; ?></h2>
			</div><!-- section-header -->
			<div class="row">
				<div class="col-sm-8">
					<h3>Who Am I?</h3>
					<?php echo $about_description; ?>
				</div><!-- end col -->
				
				<div class="col-sm-4">
			    <img src="<?php echo $about_image ['url'] ?> " alt="<?php echo $about_image ['alt'] ?>"/> </div><!-- end col -->
			</div><!-- row -->
            
		
		</div><!-- container -->
	</section><!-- About Me -->
    
