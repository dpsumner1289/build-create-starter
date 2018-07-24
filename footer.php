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
$footer = get_field('footer', 'option');

$social_icons = $footer['social_icons'];
$content = $footer['content'];
$logo = $footer['logo'];
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container container-lg">
			<div class="inner-container flex row vb">
				<div class="credits foot-mod item_1_3">
					Copyright <?php echo date('Y'); ?> APERTURE CONTENT MARKETING
				</div>
				<div class="menu-area foot-mod item_1_3 flex row vc">
				<?php 
				foreach($social_icons as $icon) {
					echo '<a href="'.$icon["link"].'" target="_blank" class="social-icon-footer">'.$icon["icon"].'</a>';
				} 
					echo '<div style="display:block; width:100%; margin:.89rem 0;">'.$content.'</div>';
					echo '<img src="'.$logo["url"].'" />';
				?>
				</div>
				<div class="site-info foot-mod item_1_3">
						<?php
						printf( esc_html__( 'BRAND & WEBSITE DESIGN BY %1$s', 'build-create-nrc' ), '<a href="http://buildcreate.com" target="_blank">BUILDCREATE</a>' );
						?>
				</div><!-- .site-info -->
			</div> <!-- .inner-container -->
		</div> <!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
