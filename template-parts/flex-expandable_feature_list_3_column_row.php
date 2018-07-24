<?php
global $flex_content;

$feature_list = $flex_content['feature_list'];
?>
<div class="feature-list-row">
<div class="container container-md flex row">
<?php
foreach($feature_list as $list) {
	$heading = $list['heading'];
	$feature_list_item = $list['feature_list_item'];
	?>
	<div class="feature-list-mod item_1_3">
		<h3><?php echo strip_tags($heading); ?></h3>
		<div class="list-container">
			<ul class="feature-list">
			<?php foreach($feature_list_item as $list_item){
				$feature = $list_item['feature'];
				echo '<li><i class="fa fa-check"></i> <div>'.strip_tags($feature).'</div></li>';
			} ?>
			</ul>
		</div>
		<button type="button" class="show">Show More</button>
	</div>
	<?php
} ?>
</div> <!-- .container -->
</div> <!-- .feature-list-row -->