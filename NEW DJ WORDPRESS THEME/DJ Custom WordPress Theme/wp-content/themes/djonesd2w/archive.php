<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package DJonesB2W
 */

get_header(); ?>


	<div class="container">
	    <div class="row" id="primary">
        <div class="container">
             <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
            <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
		    <main id="content" class="col-sm-9" role="main">
             <?php
		if ( have_posts() ) : ?>

			
				<?php
					the_archive_title( '<h4 class="page-title">', '</h4>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
					<?php
                    /* Start the Loop */
                    while ( have_posts() ) : the_post();
        
                        /*
                         * Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part( 'template-parts/content', get_post_format() );
        
                    endwhile;
        
                    the_posts_navigation();
        
                else :
        
                    get_template_part( 'template-parts/content', 'none' );
        
                endif; ?>
			</main> <!----maincontent---->
            <aside class="col-sm-3">
            <?php get_sidebar(); ?>
            </aside>
		</div><!---primary---->
		</div><!---conainer----->
		


<?php get_footer(); ?>
