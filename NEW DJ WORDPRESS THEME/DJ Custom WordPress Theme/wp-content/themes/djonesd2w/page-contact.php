<?php 

/* Template Name: Contact Page  */

get_header(); ?>

<!-- Contact
	================================================== -->
	<section class="contact">
		<div class="container">
              <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
			<div class="row">
                
                    
                    <?php while (have_posts() ) : the_post(); ?>
                    
                    	<?php the_content(); ?>
                    
                    <?php endwhile; wp_reset_postdata(); //end of the loop ?>
                
          </div><!---row----->
		</div><!-- container -->
	</section>
  
<?php get_footer(); ?>