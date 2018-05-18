<?php
global $flex_content;

$background_color = $flex_content['background_color'];
$content_direction = $flex_content['content_direction'];

$content = $flex_content['content'];

$button = $flex_content['button'];
$tab = '';
if($button['open_in_new_tab']){$tab = 'target="_blank"';}

$image_video = $flex_content['image_video'];
$image_output = $flex_content[$image_video];

$embedded_video = $flex_content['embedded_video'];
$uploaded_video = $flex_content['uploaded_video'];

$image_side;

if($image_video === 'image') {
    $image_side = '<img src="'.$image_output["url"].'" />';
} else {
    if($image_output === 'embed'){
        $image_side = $embedded_video;
    } else {
        $image_side = $uploaded_video['url'];
    }
}
?>



<div class="content_image_module <?php echo esc_html( $background_color ); ?>">
    <div class="container container-lg flex row">
    
        <?php
        if($content_direction === 'image_left'){
            echo '<div class="half image_half top">';
            echo $image_side;
            echo '</div>';
        } else {
            echo '<div class="half content-top">';            
            $content_output = $content['content'];
            $heading = $content['heading_h2'];

            if(!empty($heading)){echo "<h2>".$heading."</h2>";}
            echo $content_output;
            if($button['link']){echo '<a href="'.$button['link'].'" '.$tab.' class="wide_button button draw meet blue">'.$button['text'].'</a>';}
            echo '</div>';            
        }
        ?>
        <?php
        if($content_direction === 'image_left'){
            echo '<div class="half content-bottom">';            
            $content_output = $content['content'];
            $heading = $content['heading_h2'];

            if(!empty($heading)){echo "<h2>".$heading."</h2>";}
            echo $content_output;
            if($button['link']){echo '<a href="'.$button['link'].'" '.$tab.' class="wide_button button draw meet blue">'.$button['text'].'</a>';}
            echo '</div>';  
        } else {
            echo '<div class="half image_half bottom">';
            echo $image_side;
            echo '</div>';
        }
        ?>
    </div>
</div>