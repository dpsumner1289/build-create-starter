<?php
/* 
## Custom functions built during dev 
*/

function my_acf_google_map_api( $api ){
	
	$api['key'] = 'AIzaSyAMTPBPsVC0sYA8xjZ6ukXaqLvtr7xywcg';
	
	return $api;
	
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

// Limit post feed archive

function post_query( $query ){
    if( ! is_admin()
        && $query->is_post_type_archive( 'post' )
        && $query->is_main_query() ){
            $query->set( 'posts_per_page', 4 );
    }
}
add_action( 'pre_get_posts', 'post_query' );

/* 
## FAQ Accordion Shortcode
*/

function faqs() {
    $output = '<section class="accordion">';
    $args = array(
        'post_type'   => 'faq',
        'post_status' => 'publish',
        'posts_per_page'=>-1,
    );
    $faqs = new WP_Query( $args );
    $i = 1;
    if( $faqs->have_posts() ) :
        while( $faqs->have_posts() ) :
            $faqs->the_post();
            $question = get_the_title();
            $answer = get_the_content();
            
            $output .= '<div class="tab">
            <input id="tab-'.$i.'" type="radio" name="tabs2">
            <label for="tab-'.$i.'">';
            $output .= $question;
            $output .= '</label>
            <div class="tab-content">
                <div class="content-pad">';
            $output .= $answer;
            $output .= '</div>
            </div>
        </div>';
            $i++;
        endwhile;
        wp_reset_postdata();
    endif;
    $ouput .= '</section><!-- /.accordion -->';

    return $output;
}

add_shortcode('faqs', 'faqs');

/* 
## FAQ Admin Instructions
*/

function post_type_desc( $views ){

    $screen = get_current_screen();
    $post_type = get_post_type_object($screen->post_type);

    if ($post_type->description) {
      printf('<h4>%s</h4>', esc_html($post_type->description)); // echo 
    }

    return $views; // return original input unchanged
}

add_filter("views_edit-faq", 'post_type_desc');