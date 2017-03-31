<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package DJonesB2W
 */

get_header(); ?>
 <div class="container">
	<div id="primary" class="row">
       <main id="content" class="col-sm-8">
          
          <div class="error-404 not-found">
               <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
            <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
           <div class=".page-content">
              <div class="row">
              <h2>Don'worry! Let's get you back on track.</h2>
              <!------ services 
              ============================================= ----->
              <p>Perhaps you were looking for a specific service I provide?</p>
              <div class="section-header">
           <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
	
  	<?php endwhile; endif; ?>

			</div><!-- section-header -->
	<?php 
    $args = array(
    'post_type' => 'service',
	'order' => 'ASC'
  );
  $query = new WP_Query( $args ); ?>
   
            <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
				<div class="col-sm-2" id="serviceimg"> 
    				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small'); ?></a>
                    <h4 style="text-align: center;"><?php the_title(); ?></h4>
                    </div><!-- end col -->
		   <?php endwhile; endif; wp_reset_postdata(); ?>
           </div>
           <br  />
           
           <!------ categories 
              ============================================= ----->
              <h2>Categories</h2>
              <p>....or maybe a popular category?</p>
              <div class="widget widget_categories">
                  <h4 class="widget-title"> Most Used Categories</h4>
                  <ul>
                   <?php 
				   
				    wp_list_categories (array (
					
					'orderby'  => 'count',
					'order' => 'DESC',
					'show_count' => 1,
					'title_li' => '',
					'number' => 10
				   
				   ));

				   ?>
                  </ul>
              </div><!---.widget---->
              
              
              <!------ archives
              ============================================= ----->
              <h3>Archives</h3>
              <p>You can always sort through my archives section....</p>
              <?php the_widget( 'WP_Widget_Archives', 'title=Our Archives'); ?>
              <h4>....or, just head back to the<a href="http://localhost:8888/htdocs/wordpress-3">&nbsp;&nbsp;<i class="fa fa-arrow-left" aria-hidden="true"></i> Home Page</a></span> </h4>
              
           </div><!---page-content----->
          </div><!---.error-404----->
     
       </main><!---#content----->
       <aside class="col-sm-4">
          <?php get_sidebar(); ?>
       </aside>
		
	</div><!-- #primary -->
  </div><!-- #container -->
<?php get_footer(); ?>
