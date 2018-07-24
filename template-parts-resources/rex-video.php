<?php
global $rex_content;

$upload_type = $rex_content['upload_type'];

if($upload_type == 'embed') {
    $video = $rex_content['embed_video'];
} elseif($upload_type == 'upload') {
    $video = $rex_content['upload_video'];
    $video = '<video src="'.$video["url"].'">
    Sorry, your browser doesn\'t support embedded videos, but don\'t worry, you can <a href="'.$video["url"].'" target="_blank">download it</a> and watch it with your favorite video player!
    </video>';
}
?>

<section class="video">
    <?php echo $video; ?>
</section><!-- /.video -->
<div class="content">
    <?php the_content(); ?>
</div><!-- /.container -->