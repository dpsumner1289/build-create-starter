<?php
global $flex_content;

$color = $flex_content['color'];
$orientation = $flex_content['orientation'];
$order = [];
$ori = [];
if($orientation == 'image_left') {
    $ori = [13, 12];
    $order = ['first', 'second'];
}elseif($orientation == 'image_right') {
    $ori = [12, 13];
    $order = ['second', 'first'];
}

$image_side = $flex_content['image_side'];
$background_image = $image_side['background_image'];
$logo = $image_side['logo'];

$content_side = $flex_content['content_side'];
$content = $content_side['content'];
$button = $content_side['button'];
$url = $button['url'];
$label = $button['label'];
?>

<section class="colored_split_campaign_row flex <?php echo $color; ?>">
    <div class="item_13_25 <?php echo $order[0]; ?> flex image_side" style="background-image:url(<?php echo $background_image['url']; ?>);">
        <div class="center_container">
            <figure><img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" /></figure>
        </div><!-- /.center_container -->
    </div><!-- /.item_13_25 -->
    <div class="item_12_25 <?php echo $order[1]; ?> flex">
        <div class="center_container content_side">
            <div class="content">
                <?php echo $content; ?>
            </div>
            <div class="button_cont">
                <?php if(!empty($label) && !empty($url)){ echo '<a href="'.$url.'" class="button">'.$label.'</a>'; } ?>
            </div>
        </div><!-- /.center_container -->
    </div><!-- /.item_12_25 -->
</section><!-- /.colored_split_campaign_row -->