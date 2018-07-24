<?php
/**
 * The template for displaying all resources
 *
 * @package build/create_-_nrc
 */

get_header();
while(have_posts()): the_post();
$terms = get_the_terms(get_the_ID(), 'resource_category');
foreach($terms as $term){
	$cat = $term->slug;
}
if($cat === 'video'):

// Video resource type
?>
<div class="single-resource-header flex-hero flex row banner-inner" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
	<div class="outer-wrapper container container-md">
		<div class="flex row vc">
			<div class="inner-wrapper item_2_3">
			<h1 class="underline-2"><?php the_title(); ?></h1>
			<?php 
				echo '<i>Published '.get_the_date('m/d/Y').'</i>';
			?>
			</div> <!-- /.inner-wrapper -->
			<div class="item_1_3"></div>
		</div> <!-- /.container -->
	</div> <!-- /.outer-wrapper -->
</div> <!-- /.flex-hero -->
<div class="container container-md flex row">
	<div class="item_2_3">
	<?php
		get_template_part('template-parts-resources/rex_content');
	?>
	</div><!-- /.item_2_3 -->
	<div class="item_1_3">
		<div class="sidebar-container">
		<?php dynamic_sidebar( 'sidebar-resource' ); ?>
		</div>
	</div><!-- /.item_1_3 -->
	<?php get_template_part('template-parts/fp_full_width'); ?>
</div><!-- /.container -->
<?php
// Case study resource type
elseif($cat === 'case-study'):
	get_template_part('template-parts-resources/rex_content');
	get_template_part('template-parts-resources/case-studies/rex-case_study');
endif;
endwhile;
get_footer();
