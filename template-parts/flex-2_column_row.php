<?php

global $flex_content;

$column = $flex_content['column'];

?>

<div class="two-column-row">
	<div class="container conatiner-lg flex row">
		<?php 
		foreach($column as $col){
			$heading = $col['heading'];
			$content = $col['content'];
			$form = $col['form'];
			$tabs = $col['tabs'];
			?>
			<div class="item_1_2">
			<?php

			if(!empty($heading)){
				echo '<h2>'.strip_tags($heading).'</h2>';
			}
			if(!empty($content)){
				echo '<div class="content">'.$content.'</div>';
			}
			if(!empty($form)){
			    gravity_form($form['id'], false, false, false, '', true, 1);
			}
			if(!empty($tabs)){
				?>
				<div class="tab-section">
				<div class="tab">
					<?php
					$i = 0;
					$default = '';
					foreach($tabs as $tab) {
						$heading = $tab['tab']['heading'];
						if($i = 1){$default = 'id="defaultOpen"';}
						echo '<button class="tablinks" onclick="openTab(event, \''.$heading.'\')" '.$default.' >'.$heading.'</button>';
						$i++;
					}
					?>
				</div> <!-- .tab -->
				<?php
				foreach($tabs as $tab) {
					$heading = $tab['tab']['heading'];
					$content = $tab['tab']['content'];
				?>
					<div id="<?php echo $heading; ?>" class="tabcontent">
						<?php echo $content; ?>
					</div> <!-- .tabcontent -->
				<?php
				}?>
				</div> <!-- .tab-section -->
				<?php
			}
		?>
		</div> <!-- .item_1_2 -->
		<?php
		} 
		?>
	</div> <!-- .container -->
</div> <!-- .two-column-row -->