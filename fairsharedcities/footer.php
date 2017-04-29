<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shapely
 */

?>

</div><!-- #main -->
</section><!-- section -->

<div class="footer-callout">
	<?php shapely_footer_callout(); ?>
	<!-- widgets -->
	<?php get_sidebar( 'footer' ); ?>
</div>

<footer id="colophon" class="site-footer footer bg-dark" role="contentinfo">
	<div class="container footer-inner">
		<div class="row realizacao">
			<div class="col-sm-6">
				<?php if ( is_active_sidebar( 'footer-widget-4' ) ) : ?>
				<div class="footer-widget" role="complementary">
					<?php dynamic_sidebar( 'footer-widget-4' ); ?>
				</div>
				<?php endif; ?>
			</div>
			<div class="col-sm-6 col-right">
				<?php shapely_social_icons(); ?>
			</div>
		</div>
		<div class="row site-info">
			<div class="copyright-text col-sm-6">
				<?php echo wp_kses_post( get_theme_mod( 'shapely_footer_copyright' ) ); ?>
			</div>
			<div class="footer-credits col-sm-6">
				<span><?php shapely_footer_info(); ?></span>
			</div>
		</div>
	</div>

	<a class="btn btn-sm fade-half back-to-top inner-link" href="#top"><i class="fa fa-angle-up"></i></a>
</footer><!-- #colophon -->
</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>