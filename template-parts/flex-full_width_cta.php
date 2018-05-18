<?php
global $flex_content;

$heading = $flex_content['heading'];

$button = $flex_content['button'];
$button_url = $button['url'];
$button_label = $button['label'];
$new_tab = $button['new_tab'];
$tab = '';

if($new_tab): $tab = 'target="_blank"'; endif;

$background_image = $flex_content['background_image'];

if(!empty($flex_content)): ?>
<div class="cta-fw" style="background:url(<?php echo $background_image['url']; ?>);">
	<div class="container container-xsm">
		<?php
		if(!empty($heading)){echo '<h3 class="white_heading">'.$heading.'</h3>';}
		if(!empty($button)){echo '<a href="'.$button_url.'" '.$tab.' class="button draw meet blue">'.$button_label.'</a>';}
		?>
	</div>
</div>
<?php endif; ?>