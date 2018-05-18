<?php
global $flex_content;

$container_size = $flex_content['container_size'];
?>

<div class="review-feed">
	<div class="container <?php echo $container_size; ?>">
		<?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $args = array(
        'post_type'   => 'reviews',
        'post_status' => 'publish',
        'posts_per_page'=>5,
        'paged' => $paged
        );

        $review = new WP_Query( $args );
        if( $review->have_posts() ) :
            while( $review->have_posts() ) :
                $review->the_post();
                $author_title = get_field('author_title');
                ?>
                <div class="review">
                    <div class="flex row container container-sm">
                    	<div class="review-content"><?php the_content(); ?></div>
                    	<div class="review-author"><img src="<?php echo get_the_post_thumbnail_url(); ?>" /></div>
                    	<div class="reviewer-meta">
                        <h3><?php printf( '%1$s', get_the_title());?></h3>
                        <span><?php echo esc_html($author_title); ?></span>
                        </div>
                    </div>
                </div><!-- /review -->
                <?php
            endwhile;

            $total_pages = $review->max_num_pages;
            echo '<div class="pagination">';
            if ($total_pages > 1){
        
                $current_page = max(1, get_query_var('paged'));
        
                echo paginate_links(array(
                    'base' => get_pagenum_link(1) . '%_%',
                    'format' => '/page/%#%',
                    'current' => $current_page,
                    'total' => $total_pages,
                    'prev_text'    => __('« prev'),
                    'next_text'    => __('next »'),
                ));
            }    
            echo '</div><!-- /pagination -->';
            wp_reset_postdata();
        else:
        	echo "<h2>No Reviews Yet!</h2>";
        endif;
        ?>
	</div><!-- /container -->
</div> <!-- /review-feed -->