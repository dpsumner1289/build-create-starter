<?php

global $flex_content;

$heading = $flex_content['heading'];
$content = $flex_content['content'];
$equation_figures = $flex_content['equation_figures'];
$background_image = $flex_content['background_image'];
?>

<div class="counter_row" style="background-image:url(<?php echo $background_image['url']; ?>);">
	<div class="container container-fw flex row vc">
		<div class="left_content item_1_3">
			<?php if(!empty($heading)){
				echo '<h2 class="white_heading">'.$heading.'</h2>';
				echo $content;
			} ?>
		</div>
		<div class="right_content item_2_3 flex row vc">
			<?php 
			foreach($equation_figures as $figure):
				$icon = $figure['icon'];
				$fig = $figure['figure'];
				$caption = $figure['caption'];
				$preceding_text = $figure['preceding_text'];

				echo '<div class="figure item_1_3 flex row vc hc">';
				echo '<div class="fig_cont">';
				if(!empty($icon)): echo '<img src="'.$icon['url'].'" alt="'.$icon['alt'].'" />'; endif;
				if(!empty($fig)): echo '<figure class="count">'.$fig.'</figure>'; endif;
				if(!empty($caption)): echo '<div>'.$caption.'</div>'; endif;
				echo '</div>';
				echo '<div class="preceding_text">'.$preceding_text.'</div>';
				echo '</div>';
			endforeach;
			?>
		</div>
	</div>
</div>