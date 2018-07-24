<?php
/* Template Name: Right Sidebar Page */

get_header();

if(have_posts()): while(have_posts()): the_post();

$subheading = get_field('subheading');
?>
<div class="flex-hero flex row banner-inner" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)">
	<div class="outer-wrapper">
		<div class="container container-sm">
			<div class="inner-wrapper flex row vc">
			<?php 
            echo '<h1 class="underline-1 white">'.get_the_title().'</h1>';
			if($subheading) {
				echo '<p class="narrow white">'.$subheading.'</p>';	
			}	
			?>
			</div> <!-- .inner-wrapper -->
		</div> <!-- .container -->
	</div> <!-- .outer-wrapper -->
</div> <!-- .flex-hero -->
<div class="container container-md-lg flex row">
        <div class="item_5_7">
			<?php 
			the_content(); 
			get_template_part('template-parts/flexible_content');					
			?>
        </div><!-- /.item__3 -->
        <div class="item_2_7 widget-area">
			<?php 
			dynamic_sidebar( 'sidebar-page' ); 
			get_template_part('template-parts/fp_sidebar_cta');			
			?>
        </div><!-- /.item_1_3 -->
    </div><!-- /.container -->
<?php

endwhile; endif;

get_footer(); ?>