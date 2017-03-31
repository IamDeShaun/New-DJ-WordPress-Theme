<!-- Recent Work
	================================================== -->
	<section id="project-features">
		<div class="container">
			<h2>Recent Work</h2>
			<div class="row" id="primary">
                    <div id="content" class="col-sm-12">
                    	<div class="section-header">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				  <?php the_content(); ?>
                  <?php endwhile; endif; wp_reset_postdata();  ?>
            
            
            <?php 
				$args = array(
				'post_type' => 'recentwork',
				'order' => 'ASC'
			  );
			  $query = new WP_Query( $args ); ?>
   
            <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
				<div class="col-sm-4">
				   <?php the_field('recent_work_image'); ?>
				</div><!-- col -->
				<?php endwhile; endif; wp_reset_postdata(); ?>
                
                		</div><!--section ----->
					</div><!--Content ----->
                    <div class="viewportfolio">
				<h4><a href="http://localhost:8888/htdocs/wordpress-3/work/">View My Portfolio <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
</h4> 
			</div><!-- View My Portfolio -->	
			</div><!-- row -->	
		</div><!-- container -->
	</section><!-- Recent Work -->
