<?php

global $flex_content;

$heading = $flex_content['heading'];
$equation_figures = $flex_content['equation_figures'];
$background_image = $flex_content['background_image'];
$text_color = $flex_content['text_color'];
$content = $flex_content['content'];
$button = $flex_content['button'];
?>

<section class="counter_row <?php echo $text_color; ?>" style="background-image:url(<?php echo $background_image['url']; ?>);">
	<div class="container container-fw flex row vc">
		<?php if(!empty($heading)){
			echo '<h2>'.$heading.'</h2>';
		} ?>
		<div class="flex row num">
			<?php 
			foreach($equation_figures as $figure):
				$output = '';
				$title = $figure['title'];
				$fig = $figure['figure'];
				$icon = $figure['preceding_icon'];
				$caption = $figure['caption'];

				if(!empty($icon)){
					$icon = '<span>'.strip_tags($icon).'</span>';
				} else {
					$icon = '';
				}

				$output .= '<div class="figure">';
				$output .= '<div class="fig_cont">';
				if(!empty($title)): $output .= '<h3>'.$title.'</h3>'; endif;
				if(!empty($fig)): $output .= '<figure class="count">'.$fig.'</figure>'.$icon; endif;
				if(!empty($caption)): $output .= '<small>'.$caption.'</small>'; endif;
				$output .= '</div>';
				$output .= '</div>';

				echo $output;
			endforeach;

			if(!empty($content)) {
				echo '<div class="content"><div class="container container-xsm">'.$content.'</div></div>';
			}
			if(!empty($button['label']) && !empty($button['link'])) {
				echo '<div class="block"><a href="'.$button['link'].'" class="button red">'.$button['label'].'</a></div>';
			}
			?>
		</div><!-- /.num -->
	</div><!-- /.container -->
</section><!-- /.counter_row -->