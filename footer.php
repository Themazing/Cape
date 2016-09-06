<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cape
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'cape' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'cape' ), 'WordPress' ); ?></a>
			<span class="theme-info"><?php printf( esc_html__( 'Lightweight like %1$s itself. You are using version %2$s', 'cape' ), '<i>cape</i>', esc_attr( CAPE_VERSION ) ); ?> &mdash; <a href="https://github.com/digitoimistodude/cape"><?php echo file_get_contents( esc_url(  get_stylesheet_directory() . '/svg/github.svg' ) ); ?> GitHub</a></span>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<a href="#page" class="top"><span class="screen-reader-text"><?php echo esc_html_e('Back to top', 'cape'); ?></span><?php echo file_get_contents( esc_url( get_stylesheet_directory() . '/svg/chevron-up.svg' ) ); ?></a>

</body>
</html>
