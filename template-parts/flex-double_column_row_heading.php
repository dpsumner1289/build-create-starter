<?php

global $flex_content;

$background = $flex_content['background_color'];
$heading = $flex_content['heading'];
$column = $flex_content['column'];

if($background == 'white'){
	$background = '#fff';
} elseif ($background == 'light_gray') {
	$background = '#ececec';
}
?>
<div class="double-column-row" style="background-color:<?php echo $background; ?>">
    <div class="container container-md flex row">
        <?php 
        if(!empty($heading)){echo '<h2 class="underlined">'.$heading.'</h2>';} 
        foreach($column as $content){
			$checklist_style_list = $content['checklist_style_list'];

			if($checklist_style_list){$checklist_style_list = 'checklist';}

            echo '<div class="list_1_2 '.$checklist_style_list.'">'.$content['content'].'</div>';
        }
        ?>
    </div> <!-- .container -->
</div> <!-- .double-column-row -->