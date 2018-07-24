<?php
global $case_study;

$post_object = $case_study['review'];
$background_image = $case_study['background_image'];
?>
<section class="single_review" style="background-image:url(<?php echo $background_image['url']; ?>)">
    <div class="flex row vc">
        <div class="item_1_2 flex col filtered">
        <?php
        if( $post_object ): 
            // override $post
            $post = $post_object;
            setup_postdata($post); 
            $author_company = get_field('author_company');
            ?>
            <div class="quote_content">
                <?php the_content(); ?>
                <div class="quote_wrap">
                <div class="author_meta">
                    <span><?php the_title(); ?></span>
                    <small><i><?php echo $author_company; ?></i></small>
                </div> <!-- /.author_meta -->
                </div> <!-- /.quote_wrap -->
            </div>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
        </div><!-- /.item_1_2 -->
        <div class="item_1_2"></div><!-- /.item_1_2 -->
    </div><!-- /.flex.row -->
</section><!-- /.single_review -->