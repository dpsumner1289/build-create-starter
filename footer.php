<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package build/create_-_nrc
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container container-lg">
			<div class="inner-container flex row vc">
				<div class="credits foot-mod item_1_3">
					Copyright <?php echo date('Y'); ?> NATIONAL REALTY CENTERS
				</div>
				<div class="menu-area foot-mod item_1_3">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-footer',
					'menu_id'        => 'footer-menu',
				) );
				?>
				</div>
				<div class="site-info foot-mod item_1_3">
						<?php
						/* translators: 1: Theme name, 2: Theme author. */
						printf( esc_html__( 'WEB DESIGN BY %1$s', 'build-create-nrc' ), '<a href="http://buildcreate.com" target="_blank">BUILDCREATE</a>' );
						?>
				</div><!-- .site-info -->
			</div> <!-- .inner-container -->
		</div> <!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
