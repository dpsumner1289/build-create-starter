<?php
if(is_home()) {
    $cta_blocks = get_field('cta_blocks', get_option('page_for_posts'));
} else {
    $cta_blocks = get_field('cta_blocks');
}

if(!empty($cta_blocks)): foreach($cta_blocks as $block):
    $subheading = $block['subheading'];
    if(!empty($subheading)) {
        echo '<h3 class="keep-reading">'.$subheading.'</h3>';
    }
    ?>
    <div class="fp_cta fp_cta_post flex row vc" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fp-wide.jpg); <?php if(is_home()){ echo 'margin-top:3.236rem;'; } ?>">
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
                <div class="item_1_2 flex vc">
                <?php
                $description = get_field('description');
                echo $description;
                ?>
                </div>
                <?php
        ?>
        <div class="item_1_2 flex vc">
            <?php
            $form = $block['form'];
            if(!empty($form)){
                gravity_form($form['id'], false, false, false, '', true, 1);
            }
            ?>
        </div><!-- /.item_1_2 -->
        <div class="flex row">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fp-logo.png">
            <div id="issue"><?php the_title(); ?></div>
        </div>
        <?php
            endwhile;
        endif;
            ?>
    </div><!-- /.fp_cta -->
    <?php
endforeach; endif;