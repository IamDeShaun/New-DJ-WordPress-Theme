<?php get_header(); ?>


	<!-- Single Service Page
	================================================== -->
	<section id="singleservice">
		<div class="container">
			<div class="row" id="primary">
            
            
             <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                 <?php the_content(); ?>
                
				<div class="col-sm-6">
			      <h4><?php the_title(); ?></h4>
              
                <p><?php the_field('service_description') ?></p>
                <span id="arrowpush"><a href="index.html"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a></span> 
                <span><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i> Next Services</a></span>

				</div><!-- col -->
                
				<div class="col-sm-6">
			      <?php the_field('service_image'); ?>
				</div><!-- col -->
 
          </div><!---row----->
       <?php endwhile; endif; ?>     
		</div><!-- container -->
	</section><!-- singleservices -->


<?php get_footer(); ?>