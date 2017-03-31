<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DJonesB2W
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'djonesd2w' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'djonesd2w' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'djonesd2w' ), 'djonesd2w', '<a href="http://underscores.me/" rel="designer">DeShaun Jones</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- FOOTER
	================================================== -->
	<footer>
		<div class="container">
        <div class="row">
			<div class="col-sm-12">
				<?php
						wp_nav_menu( array(
							
							'theme_location'	=> 'footer',
							'container'			=> 'nav',
							'menu_class'		=> 'list-unstyled list-inline'
							
						) );
					?>
 <div class="back-to-top">Back to Top</div>
           <p style="text-align:center;"><?php bloginfo('name'); ?> &copy; <?php echo date('Y'); ?></p>
			</div><!-- end col -->
            </div> <!--Row--->
         
		</div><!-- container -->
	</footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-2.1.1.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
    
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
    
    <script type="text/javascript" src="//use.typekit.net/gla7wnd.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <script type="text/javascript">
var $backToTop = $(".back-to-top");
$backToTop.hide();


$(window).on('scroll', function() {
  if ($(this).scrollTop() > 100) {
    $backToTop.fadeIn();
  } else {
    $backToTop.fadeOut();
  }
});

$backToTop.on('click', function(e) {
  $("html, body").animate({scrollTop: 0}, 500);
});
	</script>

  
</body>
</html>