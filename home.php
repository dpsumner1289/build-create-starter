<?php
/**
 * The blog page template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package build/create_-_nrc
 */

get_header();

$post_object  = get_field('featured_post', get_option('page_for_posts'));
$featured_post_id = $featured_post->ID;
$depth_of_field_signup = get_field('depth_of_field_signup', get_option('page_for_posts'));
$header_background = get_field('header_background', get_option('page_for_posts'));
$depth_of_field_signup_form = $depth_of_field_signup['form'];
$tagline = $depth_of_field_signup['tagline'];
$logo = $depth_of_field_signup['logo'];
?>
<?php
if( $post_object  ): 
    // override $post
    $post = $post_object ;
    setup_postdata( $post ); 
?>
    <div class="blog-header" style="background:url(<?php echo $header_background['url']; ?>);">
        <div class="container container-md-lg">
            <div class="flex row vc">
                <div class="item_2_3 push">
                    <?php
                    the_post_thumbnail('full', array('class' => 'featured-post-image') );
                    ?>
                </div><!-- /.item_2_3.push -->
                <div class="item_1_3">
                    <?php
                    echo '<img src="'.$logo['url'].'" alt="'.$logo['alt'].'">';
                    echo '<div class="tagline"><i>'.$tagline.'</i></div>';
                    echo do_shortcode('[gravityform id="' . $depth_of_field_signup_form['id'] . '" title="false" description="false" ajax="true"]');
                    ?>
                </div><!-- /.item_1_3 -->
            </div><!-- /.flex-row -->
        </div><!-- /.container -->
    </div><!-- /.blog-header -->
    <div class="blog--content-header">
        <div class="container container-md-lg">
            <div class="flex row">
                <div class="item_2_3 push">
                    <div class="post-content">
                        <div class="featured-date date">
                            <span class="day"><b><?php echo get_the_date( 'j' ); ?></b></span>
                            <span class="month"><?php echo get_the_date('M'); ?></span>
                        </div><!-- /.date -->
                        <div class="featured-excerpt"><?php the_excerpt(); ?></div>
                        <div class="rmore"><a href="<?php the_permalink(); ?>">READ MORE <i class="fas fa-angle-right"></i></a></div>
                    </div> <!-- /.post-content -->
                </div><!-- /.item_2_3.push -->
                <div class="item_1_3">
                </div>
            </div><!-- /.flex-row -->
        </div><!-- /.container -->
    </div><!-- /.blog-header -->
    <?php 
    wp_reset_postdata();
    endif; 
    ?>
	<div id="primary" class="content-area">
		<main class="container container-md-lg">
            <div class="flex row flex-page">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;
            echo '<div class="flex row flex-posts item_2_3 pull">';
			/* Start the Loop */
            while ( have_posts() ) : the_post();
                echo '<div class="item_1_2 flex-post">';
                the_post_thumbnail('medium');
                echo '<div class="post-meta flex row"><div class="date"><span class="day"><b>'. get_the_date( 'j' ) . ' </b></span><span class="month">'.get_the_date('M').'</span></div>';
                echo '<div class="title"><a href="'.get_permalink().'"><h2>'. get_the_title() . '</h2></a></div></div>';
                echo '</div><!-- /.flex-post -->';
            endwhile;
            get_template_part('template-parts/fp_single_post'); 
            
            $args = array(
                'prev_text' => __( 'PREVIOUS', 'textdomain' ),
                'next_text' => __( 'NEXT', 'textdomain' ),
            );

            the_posts_navigation($args);
            echo '</div><!-- /.flex-posts -->';

		else :
			get_template_part( 'template-parts/content', 'none' );
        endif;
get_sidebar();
?>
        </div> <!-- /.flex-page -->
    </main><!-- /main -->
</div><!-- /#primary -->
<?php
get_footer();
