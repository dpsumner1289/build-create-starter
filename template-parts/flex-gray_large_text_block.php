<?php
global $flex_content;

$text = $flex_content['text'];
$container_size = $flex_content['container_size'];
?>
<div class="gray-large-text">
	<div class="container <?php echo $container_size; ?>">
		<?php if(!empty($text)){echo $text;} ?>
	</div>
</div>