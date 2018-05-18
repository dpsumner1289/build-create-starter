<?php

global $flex_content;

$heading = $flex_content['heading'];
$cta = $flex_content['cta'];
?>
<div class="cta_3">
	<div class="container container-lg">
		<div class="outer-wrapper">
			<?php
			if(!empty($heading)){
				echo '<h3 class="underlined mod_title blue">'.strip_tags($heading).'</h3>';
			}
			?>
			<div class="inner-wrapper flex row vc hc">
<?php
if(!empty($cta)): 
	// $i = 1;
foreach($cta as $item):
	$icon = $item['icon'];
	$title = $item['title'];
	$content = $item['content'];
	$learn_more_link = $item['learn_more_link'];
?>
<div class="item_1_3">
	<?php if($learn_more_link){echo '<a href="'.$learn_more_link.'" class="content-a">';} ?>
	<?php if($icon){echo '<img src="'.$icon['url'].'" />';} ?>
	<?php if($title){echo '<h4>'.$title.'</h4>';} ?>
	<?php if($content){echo '<aside>'.$content.'</aside>';} ?>
	<?php if($learn_more_link){echo '</a><a href="'.$learn_more_link.'" class="learn-more">Learn More <span><i class="fas fa-angle-double-right"></i></span></a>';} ?>
</div>
<?php 
// if($i % 3 == 0) {echo '</div><div class="inner-wrapper">';}

// $i++;
endforeach; endif; ?>
			</div> <!-- .inner-wrapper -->
		</div> <!-- .outer-wrapper -->
	</div> <!-- .container -->
</div> <!-- .cta_3 -->