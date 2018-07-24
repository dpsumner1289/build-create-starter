<?php
global $flex_content;

$number = $flex_content['number_of_faqs'];

if(!empty($number)) {
    $number = $number;
} else {
    $number = -1;
}

$args = array(
    'post_type'   => 'faq',
    'post_status' => 'publish',
    'posts_per_page'=>$number,
);
?>
<section class="accordion">
    <div class="container container-md">
    <?php
    $faqs = new WP_Query( $args );
    $i = 1;
    if( $faqs->have_posts() ) :
        while( $faqs->have_posts() ) :
            $faqs->the_post();
            $question = get_the_title();
            $answer = get_the_content();
            ?>
            <div class="tab">
                <input id="tab-<?php echo $i; ?>" type="radio" name="tabs2">
                <label for="tab-<?php echo $i; ?>"><?php echo $question; ?></label>
                <div class="tab-content">
                    <div class="content-pad">
                    <?php the_content(); ?>
                    </div>
                </div>
            </div>
            <?php
            $i++;
        endwhile;
        wp_reset_postdata();
    endif;
    ?>
    </div><!-- /.container -->
</section><!-- /.accordion -->