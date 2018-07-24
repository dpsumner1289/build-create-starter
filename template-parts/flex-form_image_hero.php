<?php
global $flex_content;

$heading = $flex_content['heading'];
$subheading = $flex_content['subheading'];
$background_image = $flex_content['background_image'];
$container_size = $flex_content['container_size'];
$height = $flex_content['height'];
$color = $flex_content['text_color'];
$form = $flex_content['form'];
?>

<div class="flex-hero flex-hero-form flex row banner-inner fs-<?php echo $height; ?>" style="background-image:url(<?php echo $background_image['url']; ?>)">
	<div class="outer-wrapper">
		<div class="container <?php echo $container_size; ?>">
			<div class="inner-wrapper flex row vc">
			<?php 
			if($heading) {
				echo '<h1 class="underline-'.$heading["underline"].' '.$color.'" style="padding-top:0;margin-top:0;">'.$heading["heading_text"].'</h1>';
			}
			if($subheading) {
				echo '<p class="narrow '.$color.'">'.$subheading.'</p>';	
			}	
			?>
			<?php 
            if(!empty($form)){
                gravity_form($form['id'], false, false, false, '', true, 1);
            }
            ?>
			</div> <!-- .inner-wrapper -->
		</div> <!-- .container -->
	</div> <!-- .outer-wrapper -->
</div> <!-- .flex-hero -->