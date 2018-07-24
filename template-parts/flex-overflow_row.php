<?php
global $flex_content;

$half = $flex_content['half'];
$overflow = $flex_content['overflow'];
$overflow ? $overflow = 'true' : $overflow = 'false';
$background_color = $flex_content['background_color'];
?>

<section class="overflow overflow-<?php echo $overflow; ?> <?php if($background_color){ echo $background_color;} ?>">
<div class="container container-md-lg flex row">
    <?php 
    foreach($half as $h):
        $content_type = $h['content_type'];
        $alignments = $h['alignments'];
        $bg = $h['background_color'];

        if($content_type == 'fpissue'){
            $fp_issue_form = $h['fp_issue_form'];
            $background_image = $fp_issue_form['background_image'];
            $form = $fp_issue_form['form'];

            $args = array(
                'post_type'   => 'issue',
                'post_status' => 'publish',
                'posts_per_page'=>1,
                );
            $issue = new WP_Query( $args );

            if( $issue->have_posts() ) :
                while( $issue->have_posts() ) :
                    $issue->the_post();
                    $description = get_field('description');
                    $issue_upload = get_field('issue_upload');
                    ?>
                    <div class="fp-issue-form item_1_2" style="background-image:url(<?php echo $background_image['url']; ?>)">
                        <div class="inner-container">
                        <div class="heading flex row vc hc">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fp-logo.png">
                            <span><?php the_title(); ?></span>
                        </div><!-- /.heading -->
                        <div class="content">
                            <?php echo $description; ?>
                            <?php gravity_form($form['id'], false, false, false, '', true, 1); ?>
                        </div><!-- /.content -->
                        </div><!-- /.inner-container -->
                    </div><!-- /.fp-issue-form -->
                    <?php
                endwhile;
            endif;
        } elseif($content_type == 'content') {
            $output = '<div class="content-half item_1_2 '.$bg.' ';
            foreach($alignments as $alignment) {
                $output .= $alignment." ";
            }
            $output .= '">';
            $content = $h['content'];

            $title = $content['title'];
            $content_p = $content['content'];
            $reference_links = $content['reference_links'];
            $button = $content['button'];

            $blabel = $button['label'];
            $blink = $button['url'];

            if(!empty($title)) {
                $output .= '<h2>'.$title.'</h2>';
            }
            if(!empty($content_p)) {
                $output .= '<div class="content">'.$content_p.'</div>';
            }
            foreach($reference_links as $link) {
                $new_tab;
                if($new_tab) {
                    $new_tab = ' target="_blank"';
                } else {
                    $new_tab = '';
                }

                $output .= '<a href="'.$link['link'].'"'.$new_tab.'>'.$link['label'].'<i class="fas fa-angle-double-right"></i></a>';
            }
            if(!empty($blabel) && !empty($blink)) {
                $output .= '<a href="'.$blink.'" class="button blue">'.$blabel.'</a>';
            }
            $output .= '</div><!-- /.content-half -->';
            echo $output;
        }
    endforeach;
    ?>
    </div><!-- /.overflow -->
</section><!-- /.overflow -->