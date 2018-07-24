<?php

global $flex_content;
$resource_type = $flex_content['resource_type'];
$anchor_link = $flex_content['anchor_link'];
?>

<section class="resource_feed <?php echo $resource_type['value'];?>">
    <div class="container container-md-lg flex row vc hc">
        <a name="<?php echo $anchor_link; ?>"></a>
        <?php
        echo '<h3 class="'.$resource_type['value'].'">'.$resource_type['label'].'</h3>';
        switch($resource_type['value']){
            case 'fpissues':
                $fpargs = array(
                    'post_type'   => 'issue',
                    'post_status' => 'publish',
                    'posts_per_page'=>9,
                    'order'    => 'DESC',
	                'orderby'	=> 'date'
                );
                $fpissue = new WP_Query( $fpargs );
                if( $fpissue->have_posts() ) :
                    while( $fpissue->have_posts() ) :
                        $fpissue->the_post();
                        $issue = get_field('issue_upload');
                        ?>
                        <div class="fpissue item_1_4">
                            <div class="fpissue_cont flex col hc vc">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fp-logo.png">
                                <div class="issue_num"><?php the_title(); ?></div>
                                <div class="download flex col hc vc">
                                    <a href="<?php echo $issue['url']; ?>" target="_blank" class="bounce"><i class="fas fa-download"></i> DOWNLOAD</a>
                                    <a href="mailto:?subject=Focal%20Focal%20Point%20Issue&body=<?php echo $issue['url']; ?>" class="spin"><i class="fas fa-reply"></i> EMAIL A LINK</a>
                                </div><!-- /.download -->
                            </div><!-- /.fpissue_cont -->
                        </div><!-- /.fpissue -->
                        <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                break;

            case 'white-paper':
                $wpargs = array(
                    'post_type'   => 'resource',
                    'tax_query' => array(
                        array(
                            'taxonomy'  =>  'resource_category',
                            'terms' =>  'white-paper',
                            'field' =>  'slug',
                        )
                    ),
                    'post_status' => 'publish',
                    'posts_per_page'=>9,
                    'order'    => 'DESC',
	                'orderby'	=> 'date'
                );
                $whitepapers = new WP_Query( $wpargs );
                if( $whitepapers->have_posts() ) :
                    while( $whitepapers->have_posts() ) :
                        $whitepapers->the_post();

                        if( have_rows('resource_content') ):
                            while ( have_rows('resource_content') ) : the_row();         
                                if( get_row_layout() == 'white_paper' ):

                                    $paper_upload = get_sub_field('paper_upload');
                        ?>
                        <div class="whitepaper item_1_3">
                            <a href="<?php echo $paper_upload['url']; ?>" title="<?php the_title_attribute(); ?>" target="_blank" class="wptitle bounce"><i class="fas fa-download"></i>  <?php the_title(); ?></a>
                            <i class="published">Published <?php echo date('m/d/y', strtotime($post->post_date));?></i>
                        </div><!-- /.whitepaper -->
                        <?php
                                endif;
                            endwhile;
                        else :
                            // no layouts found
                        endif;
                    endwhile;
                    wp_reset_postdata();
                endif;
                reset_rows();
                break; 

            case 'video':
                $vidargs = array(
                    'post_type'   => 'resource',
                    'tax_query' => array(
                        array(
                            'taxonomy'  =>  'resource_category',
                            'terms' =>  'video',
                            'field' =>  'slug',
                        )
                    ),
                    'post_status' => 'publish',
                    'posts_per_page'=>3,
                    'order'    => 'DESC',
	                'orderby'	=> 'date'
                );
                $videos = new WP_Query( $vidargs );
                if( $videos->have_posts() ) :
                    while( $videos->have_posts() ) :
                        $videos->the_post();
                        if( have_rows('resource_content') ):
                           while ( have_rows('resource_content') ) : the_row();         
                               if( get_row_layout() == 'video' ):
                                ?>
                                <div class="item_1_3">
                                <div class="video">
                                <?php
                                $upload_type = get_sub_field('upload_type');
                                $video;
                                if($upload_type == 'embed') {
                                    $video = get_sub_field('embed_video');
                                } elseif($upload_type == 'upload') {
                                    $video = get_sub_field('upload_video');
                                    $video = '<video src="'.$video["url"].'">
                                    Sorry, your browser doesn\'t support embedded videos, but don\'t worry, you can <a href="'.$video["url"].'" target="_blank">download it</a> and watch it with your favorite video player!
                                    </video>';
                                }
                                echo $video;
                                ?>
                                </div><!-- /.video -->
                                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="vidtitle"><?php the_title(); ?></a>
                                <i>Published <?php the_date('m/d/y'); ?></i>
                                </div><!-- /.item_1_3 -->
                                <?php
                               endif;
                           endwhile;
                       else :
                           // no layouts found
                       endif;
                    endwhile;
                endif;
                break;
        }
        ?>
    </div>
    <!-- /.container -->
</section>
<!-- /.resource_feed <?php echo $resource_type['value']; ?> -->