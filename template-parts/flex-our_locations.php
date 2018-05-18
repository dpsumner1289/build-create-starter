<?php
global $flex_content;

$title = $flex_content['title'];
$description = $flex_content['description'];
?>
<div class="locations">
    <div class="container container-lg">
        <?php
        if(!empty($title)){
            echo '<h3 class="underlined mod_title blue">'.strip_tags($title).'</h3>';
        }
        ?>
    <div class="outer-wrapper">
    <div class="inner-wrapper flex row hc vc">
        <?php
        $args = array(
        'post_type'   => 'location',
        'post_status' => 'publish',
        );

        $location = new WP_Query( $args );
        if( $location->have_posts() ) :
            $i = 1;
            while( $location->have_posts() ) :
                $location->the_post();
                $title = strtolower(get_the_title());
                ?>
                <div class="location_1_3 item_1_3 flex hc vc"><a href="/<?php echo $title; ?>" class="inner_location flex row vc hc" style="display:block;text-decoration:none;"><div class="flex row vc hc" style="background-repeat:no-repeat; background-size:cover; background-position:50%;height:100%;background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);"><h4><?php printf( '%1$s', get_the_title());  ?></h4></div></a></div>
                <?php
                if($i % 3 == 0) {echo '</div><div class="inner-wrapper">';}

                $i++;
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div><!-- /inner-wrapper -->
    </div> <!-- /outer-wrapper -->
    <div class="container container-sm"><?php echo $description; ?></div>
    </div><!-- /container container-lg -->
  </div><!-- /locations -->