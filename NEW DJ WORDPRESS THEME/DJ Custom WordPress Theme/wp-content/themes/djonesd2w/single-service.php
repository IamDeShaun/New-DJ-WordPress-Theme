<?php get_header(); ?>


	<!-- Single Service Page
	================================================== -->
	<section id="singleservice">
		<div class="container">
               <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
            <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
			<div class="row" id="primary">
            
             <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                 <?php the_content(); ?>
                
				<div class="col-sm-8">
			      <h4><?php the_title(); ?></h4>
              
                <p><?php the_field('service_description') ?></p>
                <span id="arrowpush"><a href="http://localhost:8888/htdocs/wordpress-3"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back To Home</a></span> 
                <span><?php next_post_link(); ?></span>

				</div><!-- col -->
                
				<div class="col-sm-4">
			      <?php the_field('service_image'); ?>
				</div><!-- col -->
 <div class="whitespace">
                </div>
          </div><!---row----->
       <?php endwhile; endif; ?>     
		</div><!-- container -->
	</section><!-- Recent Work -->
                
<?php get_footer(); ?>