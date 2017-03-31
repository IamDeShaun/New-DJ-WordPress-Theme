<!-- Services
	================================================== -->
	<section id="services">
		<div class="container">
<div class="section-header">
           <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
	
  	<?php endwhile; endif; ?>

				<h2>Services</h2>
			</div><!-- section-header -->
         <div class="row" id="primary">
		    <div id="content" class="col-sm-12">
       
	<?php 
    $args = array(
    'post_type' => 'service',
	'order' => 'ASC'
  );
  $query = new WP_Query( $args ); ?>
   
            <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
				<div class="col-sm-2"> 
    				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small'); ?></a>
                    <h4><?php the_title(); ?></h4>
                    </div><!-- end col -->
		   <?php endwhile; endif; wp_reset_postdata(); ?>
				   </div><!----End Main Content ------>
            </div><!---- End Row ------>
         </div> <!----End Container ------>
		</div><!-- container -->
	</section><!-- Services -->
    
	