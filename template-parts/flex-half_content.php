<?php
global $flex_content;

$background_image = $flex_content['background_image'];
$heading = $flex_content['heading'];
$content = $flex_content['content'];
$button = $flex_content['button'];
?>

<section class="half_content" style="background-image:url(<?php echo $background_image['url']; ?>);">
    <div class="container container-md-lg flex row">
        <div class="item_1_2">
        <?php 
        if(!empty($heading)){
			echo '<h2>'.$heading.'</h2>';
        } 
        if(!empty($content)) {
            echo '<div class="content"><div class="container container-xsm">'.$content.'</div></div>';
        }
        if(!empty($button['label']) && !empty($button['url'])) {
            echo '<div class="block"><a href="'.$button['url'].'" class="button red">'.$button['label'].'</a></div>';
        }
        ?>
        </div>
        <div class="item_1_2"></div>
    </div><!-- /.container -->
</section><!-- /.half_content -->