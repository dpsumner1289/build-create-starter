<?php
if(is_home()) {
    $cta_blocks = get_field('cta_blocks', get_option('page_for_posts'));
} else {
    $cta_blocks = get_field('cta_blocks');
}


if(!empty($cta_blocks)): foreach($cta_blocks as $block):
    ?>
    <div class="fp_cta fp_cta_sidebar flex col hc" style="background-image:url(/wp-content/uploads/2018/05/fp-box.jpg);">
        <?php 
        $args = array(
            'post_type'   => 'issue',
            'post_status' => 'publish',
            'posts_per_page'=>1,
            );
        $issue = new WP_Query( $args );

        if( $issue->have_posts() ) :
            while( $issue->have_posts() ) :
                $issue->the_post();

                ?>
                <div class="flex row">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fp-logo.png">
                    <div id="issue"><?php the_title(); ?></div>
                </div>
                <div class="description">
                <?php
                $description = get_field('description');
                echo $description;
                ?>
                </div>
                <?php
            endwhile;
        endif;
        ?>
        <div class="form_fp">
            <?php
            $form = $block['form'];
            if(!empty($form)){
                gravity_form($form['id'], false, false, false, '', true, 1);
            }
            ?>
        </div><!-- /.form_fp -->
    </div><!-- /.fp_cta -->
    <?php
endforeach; endif;