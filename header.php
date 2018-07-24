<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package build/create_-_nrc
 */

$logo = get_field('site_logo', 'option');
$alt = $logo['alt'];

$phone_number_top_bar = get_field('phone_number_top_bar', 'option');
$cta_top_bar_text = get_field('cta_top_bar_text', 'option');
$cta_top_bar_link = get_field('cta_top_bar_link', 'option');

$page_options = get_field('page_options');
$base_background_color = $page_options['base_background_color'];

if($base_background_color !== 'null') {
	$background_color = ' style="background-color:';
	$background_color .= $base_background_color;
	$background_color .= ';"';
} else {
	$background_color = 'title=""';
}

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Greensock CDN -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php echo $background_color; ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'build-create-nrc' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container container-md-lg flex row vc">
			<div class="site-branding flex row vc">
				<?php
				if($logo): ?>
					<a href="<?php echo get_home_url(); ?>" class="logo-anchor"><img src="<?php echo $logo['url']; ?>" alt="<?php echo $alt; ?>"></a>
				<?php endif; ?>
				<a href="#site-navigation" class="menu-bars"><i class="fas fa-bars"></i></a>
			</div><!-- .site-branding -->
			<div class="nav-section flex row vc">
				<div class="top-bar">
					<?php if($phone_number_top_bar){echo '<a href="tel:'.$phone_number_top_bar.'" class="tel">'.$phone_number_top_bar.'</a>';} ?>
					<?php if($cta_top_bar_text){echo '<a href="'.$cta_top_bar_link.'" class="button red">'.$cta_top_bar_text.'</a>';} ?>
				</div>
				<nav id="site-navigation" class="main-navigation">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?><!-- .nav-section -->
				</nav><!-- #site-navigation -->
			</div>
		</div><!-- /.container -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
