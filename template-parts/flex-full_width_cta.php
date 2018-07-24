<?php
global $flex_content;

$heading_group = $flex_content['heading'];
$heading_color = $heading_group['color'];
$heading = $heading_group['heading'];

$button = $flex_content['button'];
$content = $flex_content['content'];
$button_url = $button['url'];
$button_label = $button['label'];
$new_tab = $button['new_tab'];
$tab = '';

if($new_tab): $tab = 'target="_blank"'; endif;

$background_image = $flex_content['background_image'];

if(!empty($flex_content)): ?>
<div class="cta-fw <?php echo $heading_color; ?>" style="background:url(<?php echo $background_image['url']; ?>);">
	<div class="container container-xs-sm">
		<?php
		if(!empty($heading)){echo '<h2>'.$heading.'</h2>';}
		if(!empty($content)){echo $content;}
		if(!empty($button['label']) && !empty($button['url'])) {
			echo '<a href="'.$button_url.'" '.$tab.' class="button blue">'.$button_label.'</a>';
		}
		?>
	</div>
</div>
<?php endif; ?>