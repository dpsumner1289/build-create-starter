<?php
global $flex_content;

$button = $flex_content['button'];
$container_size = $flex_content['container_size'];
$title = $flex_content['title'];
?>

<section class="review-feed">
    <div class="container <?php echo $container_size; ?> flex row">
    <?php 
        if(!empty($title)){
			echo '<h2>'.$title.'</h2>';
		}
        $args = array(
        'post_type'   => 'reviews',
        'post_status' => 'publish',
        'posts_per_page'=>4
        );

        $review = new WP_Query( $args );
        if( $review->have_posts() ) :
            while( $review->have_posts() ) :
                $review->the_post();
                $author_title = get_field('author_title');
                $author_company = get_field('author_company');
                ?>
                <div class="review item_1_4">
                    <div class="review-content"><?php the_content(); ?></div>
                    <div class="review-author">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" />
                    </div>
                    <div class="reviewer-meta">
                        <h3><?php printf( '%1$s', get_the_title());?></h3>
                        <div class="title"><?php echo esc_html($author_title); ?></div>
                        <div class="company"><?php echo esc_html($author_company); ?></div>
                    </div>
                </div><!-- /review -->
                <?php
            endwhile;
            wp_reset_postdata();
        endif;

        if(!empty($button['label']) && !empty($button['link'])) {
            echo '<a href="'.$button['link'].'" class="button red">'.$button['label'].'</a>';
        }
        ?>
	</div><!-- /container -->
</section> <!-- /review-feed -->