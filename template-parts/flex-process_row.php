<?php

global $flex_content;

$background_image = $flex_content['background_image'];
$icons_bg = $flex_content['icons_bg'];
$heading = $flex_content['heading'];
$content = $flex_content['content'];
$button = $flex_content['button'];
$icons = $flex_content['icons'];
?>

<section class="process_row" style="background-image:url(<?php echo $background_image['url']; ?>)">
    <div class="container container-md-lg-1 flex row">
        <div class="item_2_3" style="background-image:url(<?php echo $icons_bg['url']; ?>)">
        <div class="container container-sm flex row">
            <?php
            foreach($icons as $icon) {
                $i = $icon['icon'];
                ?>
                <div class="process-step flex row vc">
                    <figure><img src="<?php echo $i['url']; ?>" alt="<?php echo $i['alt']; ?>"></figure>
                    <div class="process">
                    <h4><?php echo $icon['heading']; ?></h4>
                    <div class="caption"><?php echo $icon['caption']; ?></div>
                    </div>
                </div>
                <?php
            }
            ?>
            </div><!-- /.container -->
        </div><!-- /.item_2_3 -->
        <div class="item_1_3">
            <?php 
            if(!empty($heading)){
                echo '<h2>'.$heading.'</h2>';
            } 
            if(!empty($content)) {
                echo '<div class="content">'.$content.'</div>';
            }
            if(!empty($button['label']) && !empty($button['url'])) {
                echo '<div class="block"><a href="'.$button['url'].'" class="button red">'.$button['label'].'</a></div>';
            }
            ?>
        </div><!-- /.item_1_3 -->
    </div><!-- /.container -->
</section><!-- /.process_row -->