<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package DJonesB2W
 */

get_header(); ?>

<!-- BLOG CONTENT
	================================================== -->
	 <div class="container">
	    <div class="row" id="primary">
		    <main id="content" class="col-sm-9" role="main">
          <article class="news">
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single', get_post_format() );

		endwhile; // End of the loop.
		?>
</article>
	</main><!----#content--->
    
    <!-- SIDEBAR
			================================================== -->
    <aside class="col-sm-3">
    <?php get_sidebar(); ?>
    </aside>
    
    
    
    </div><!----#primary----->
    </div><!---.container----->
<?php get_footer(); ?>
