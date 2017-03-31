<?php 

/* Template Name: Work Page  */

get_header(); ?>

   <!-- MAIN CONTENT
	================================================== -->
    <section id="portfolio">
     <div class="container">
             <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
	    <div class="row" id="primary">
		    <div id="content" class="col-sm-12">
			    <section class="main-content">
               
                     
                     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
               
      <?php the_content(); ?>
	
  	<?php endwhile; endif; ?>
    

<?php 

  $args = array(
    'post_type' => 'portfolio',
	'order' => 'ASC'
  );
  $query = new WP_Query( $args );

?>

  <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

  <div class="col-sm-6">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
    <h4><?php the_title(); ?></h4>
  </div>

  <?php endwhile; endif; wp_reset_postdata(); ?>

</section>
   
              </div><!----End Main Content ------>
            </div><!---- End Row ------>
         </div> <!----End Container ------>
 </section>
 
<?php get_footer(); ?>