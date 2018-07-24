<?php
/**
 * The template for displaying Resource archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package build/create_-_nrc
 */

get_header();
?>
    <div class="blog-header" style="background:url(/wp-content/uploads/2018/06/blog-index-header-overlay.png);">
        <div class="container container-md-lg">
            <div class="flex row vc">
                <div class="item_2_3">
                    <?php
                    echo '<img src="/wp-content/uploads/2018/06/depth-of-field-logo.png">';
                    ?>
                </div>
                <!-- /.item_2_3.push -->
                <div class="item_1_3">
                    <?php
                    echo '<div class="tagline"><i>Deep insights, delivered directly.</i></div>';
                    echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true"]');
                    ?>
                </div>
                <!-- /.item_1_3 -->
            </div>
            <!-- /.flex-row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.blog-header -->
    <div id="primary" class="content-area">
        <main class="container container-md-lg">
            <div class="flex row flex-page">

                <?php
		if ( have_posts() ) :

            echo '<div class="flex row flex-posts item_2_3">';
			/* Start the Loop */
            while ( have_posts() ) : the_post();
                echo '<div class="item_1_2 flex-post">';
                the_post_thumbnail('medium');
                echo '<div class="post-meta flex"><div class="date"><span class="day"><b>'. get_the_date( 'j' ) . ' </b></span><span class="month">'.get_the_date('M').'</span></div>';
                echo '<div class="title"><a href="'.get_permalink().'"><h2>'. get_the_title() . '</h2></a></div></div>';
                echo '</div><!-- /.flex-post -->';
            endwhile;
            get_template_part('template-parts/fp_single_post');
            the_posts_navigation();
            echo '</div><!-- /.flex-posts -->';

		else :
            get_template_part( 'template-parts/content', 'none' );
            get_template_part('template-parts/fp_single_post');
		endif;
get_sidebar();
?>
            </div>
            <!-- /.flex-page -->
        </main>
        <!-- /main -->
    </div>
    <!-- /#primary -->
    <?php
get_footer();