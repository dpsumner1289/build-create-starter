<?php
global $flex_content;

$heading = $flex_content['heading'];
$subheading = $flex_content['subheading'];

$background_image = $flex_content['background_image'];
$overlay = $flex_content['overlay'];

$container_size = $flex_content['container_size'];
$height = $flex_content['height'];
$add_padding_above = $flex_content['add_padding_above'];

$content_underline = $flex_content['content_underline'];
$hero_bottom_border = $flex_content['hero_bottom_border'];

$buttons = $flex_content['buttons'];
$color = $flex_content['text_color'];

$visit_us_on_button = $flex_content['visit_us_on_button'];
$text = $visit_us_on_button['text'];
$url = $visit_us_on_button['url'];
$icon = $visit_us_on_button['icon'];
$n_tab = $visit_us_on_button['new_tab'];

$n_tab ? $n_tab = 'target="_blank"' : $n_tab = '';

if($add_padding_above){$add_padding_above = 'add_padding_above';}
if($content_underline){$content_underline = 'underlined';}
?>

<section class="flex-hero flex row vc banner-inner fs-<?php echo $height; ?> overlay-<?php echo $overlay; ?> border-<?php echo $hero_bottom_border['color'] . ' bwidth-' . $hero_bottom_border['width']; ?>" style="background-image:url(<?php echo $background_image['url']; ?>)">
	<div class="outer-wrapper">
		<div class="container <?php echo $container_size; ?>">
			<div class="inner-wrapper <?php echo $content_underline; ?>">
			<?php 
			if($heading) {
				echo '<h1 class="underline-'.$heading["underline"].' '.$color.' '.$add_padding_above.'">'.$heading["heading_text"].'</h1>';
			}
			if($subheading) {
				echo '<p class="narrow '.$color.'">'.$subheading.'</p>';	
			}	
			?>
			<?php 
			if(!empty($text)):
				echo '<a href="'.$url.'" class="social-visit" '.$n_tab.'>'.$icon.' '.$text.'</a>';
			endif;
			if(!empty($buttons)):
				echo '<div class="hero_buttons container container-xsm">';
				foreach($buttons as $button){
					$button_arr = $button['button'];
					$button_text = $button_arr['text'];
					$button_link = $button_arr['link_url'];
					$new_tab = $button_arr['new_tab'];
					$tab = '';

					if($new_tab): $tab = 'target="_blank"'; endif;
					echo '<a href="'.$button_link.'" '.$tab.' class="button draw meet">'.$button_text.'</a>';
				} 
				echo '</div>';
				endif; ?>
			</div> <!-- .inner-wrapper -->
		</div> <!-- .container -->
	</div> <!-- .outer-wrapper -->
</section> <!-- .flex-hero -->