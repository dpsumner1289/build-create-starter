<?php

global $flex_content;

$theme = $flex_content['theme'];
$heading = $flex_content['heading'];
$background_color = $flex_content['background_color'];
$cta = $flex_content['cta'];
$cta_button = $flex_content['cta_button'];
$vertical_alignment = $flex_content['vertical_alignment'];
?>
<section class="cta_3 <?php echo $background_color; ?>">
	<div class="container <?php echo $theme == 'campaign' ? 'container-md-lg' : 'container-md'; ?>">
		<div class="outer-wrapper">
			<?php
			if(!empty($heading)){
				echo '<h3 class="underlined mod_title blue">'.strip_tags($heading).'</h3>';
			}
			?>
			<div class="inner-wrapper flex row hc <?php echo $vertical_alignment; ?>">
				<?php
				if(!empty($cta)): 
					// $i = 1;
				foreach($cta as $item):
					$icon = $item['icon'];
					$title = $item['title'];
					$content = $item['content'];
					$learn_more_link = $item['learn_more_link'];
					$learn_more_text = $item['learn_more_text'];
				?>
				<div class="item_1_3">
					<?php if($learn_more_link){echo '<a href="'.$learn_more_link.'" class="content-a">';} ?>
					<?php if($icon){echo '<img src="'.$icon['url'].'" />';} ?>
					<?php if($title){echo '<h4>'.$title.'</h4>';} ?>
					<?php if($content){echo '<aside>'.$content.'</aside>';} ?>
					<?php 
					if($learn_more_link){
						if($theme =='campaign') {
							echo '</a><a href="'.$learn_more_link.'" class="learn-more"><i class="far fa-images"></i> '.$learn_more_text.'</a>';
						} else {
							echo '</a><a href="'.$learn_more_link.'" class="learn-more">Learn More <span><i class="fas fa-angle-double-right"></i></span></a>';
						}
					}
					?>
				</div>
				<?php 
				// if($i % 3 == 0) {echo '</div><div class="inner-wrapper">';}

				// $i++; this is a test
				endforeach; endif; ?>
			</div> <!-- .inner-wrapper -->
		</div> <!-- .outer-wrapper -->
		<?php
		if($cta_button){ 
		$button = $flex_content['button'];
		$label = $button['label'];
		$url = $button['url'];
		?>
		<div class="button-row">
			<a href="<?php echo $url; ?>" class="button red"><?php echo $label; ?></a>
		</div>
		<?php
		}
		?>
	</div> <!-- .container -->
</section> <!-- .cta_3 -->