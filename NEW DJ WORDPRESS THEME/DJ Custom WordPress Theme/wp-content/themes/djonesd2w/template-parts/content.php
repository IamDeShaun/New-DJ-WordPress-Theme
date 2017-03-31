<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package DJonesB2W
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( 'post' === get_post_type() ) : ?>
        <div class="row">
        <div class="col-md-5">
        
    <?php if ( has_post_thumbnail() ) { // check for feature image ?>
                     <div class="post-image">
		    			<?php the_post_thumbnail(); ?>
		    		</div><!-- post-image -->
                    <?php } ?>
                    
                   </div><!---End col-5----->
                   
        <div class="col-md-7">
        <?php
		if ( is_single() ) :
			the_title( '<h3 class="entry-title">', '</h3>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; ?>
                   <div class="post-details">
							<i class="fa fa-clock-o"></i> <time><?php the_date(); ?></time>
							<i class="fa fa-user"></i> <?php the_author(); ?>
                            <i class="fa fa-folder"></i> <?php the_category(', '); ?>
                            <?php edit_post_link( 'Edit', '<div><i class="fa fa-pencil"></i>', '</div>' ); ?>
		    			</div><!-- post-details -->
                        
                        <div class="post-excerpt">
		    			<?php the_excerpt(); ?>
		    		</div><!-- post-excerpt -->
        </div><!---end col-7---->
        </div> <!----endrow---->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

</article><!-- #post-## -->
