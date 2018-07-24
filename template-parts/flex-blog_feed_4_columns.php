<?php 

global $flex_content;

$read_more = $flex_content['read_more_link'];
$text = $read_more['text'];
$url = $read_more['url'];
?>
<section class="blog_feed_4_columns">
<div class="container container-lg flex row">
<?php
// WP_Query arguments
$args = array(
	'post_status'            => 'publish',
	'nopaging'               => true,
	'posts_per_page'         => 4,
	'posts_per_archive_page'         => 4,
);

// The Query
$query = new WP_Query( $args );
$i = 1;
// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() && $i < 5 ) {
        $post_id = get_the_ID();
        $categories = get_the_category_list(', ');
        $thumbnail = get_the_post_thumbnail( 'medium' );
        ?>
        <div class="item_1_4">
                <?php
                $query->the_post();
                ?>
                <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
                <?php
                the_post_thumbnail( 'post-thumbnail', array(
                        'alt' => the_title_attribute( array(
                                'echo' => false,
                        ) ),
                ) );
                ?>
                </a>
                <?php
                $output = '<a href="'.get_permalink().'"><h2>';
                $output .= get_the_title();
                $output .= '</h2></a><div class="meta flex row"><div>';
                $output .= get_the_date( 'M d, Y' );
                $output .= '</div><div>';
                $output .= $categories;
                $output .= '</div></div><!-- /.meta -->';

                echo $output;
                $i++;
                ?>
        </div><!-- /.item_1_4 -->
        <?php
	}
} else {
	// no posts found
}

// Restore original Post Data
wp_reset_postdata();
?>
<?php if(!empty($text) && !empty($url)){
?>
<div class="button_cont"><a href="<?php echo $url; ?>"><span><?php echo $text; ?></span> <i class="fas fa-angle-double-right"></i></a></div>
<?php
} ?>
</div> <!-- /.container -->
</section><!-- /.blog_feed_4_columns -->