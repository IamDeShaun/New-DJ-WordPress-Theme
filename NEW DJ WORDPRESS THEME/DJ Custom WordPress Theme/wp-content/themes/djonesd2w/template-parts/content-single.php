<?php
/**
 * Template part for displaying all simgle posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package DJonesB2W
 */

?>
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
     <?php
		if ( is_single() ) :
			the_title( '<h3 class="entry-title">', '</h3>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; ?>
        
		<?php if ( 'post' === get_post_type() ) : ?>
        <div class="row">
        <div class="col-md-12">
        
    <?php if ( has_post_thumbnail() ) { // check for feature image ?>
                     <div class="post-image">
		    			<?php the_post_thumbnail(); ?>
		    		</div><!-- post-image -->
                    <?php } ?>
                    
                   </div><!---End col-12----->
                   
        <div class="col-md-12">
                   <div class="post-details">
							<i class="fa fa-clock-o"></i> <time><?php the_date(); ?></time>
							<i class="fa fa-user"></i> <?php the_author(); ?>
                            <?php edit_post_link( 'Edit', '<div><i class="fa fa-pencil"></i>', '</div>' ); ?>
		    			</div><!-- post-details -->
                        
                        <div class="post-body">
		    			<?php the_content(); ?>
                        <span id="arrowpush"><a href="<?php echo $_SERVER['HTTP_REFERER']; ?>"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back To Previous Page</a></span> <span><?php next_post_link(); ?></span>
		    		</div><!-- post-body -->
        </div><!---end col-7---->
        </div> <!----endrow---->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

</article><!-- #post-## -->
