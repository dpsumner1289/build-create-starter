<?php
global $flex_content;

$heading = $flex_content['heading'];
$content = $flex_content['content'];
?>

<section class="left_aligned_partial">
    <div class="container container-md flex row">
        <div class="left_aligned item_2_3">
            <?php if(!empty($heading)){ echo '<h2>'.$heading.'</h2>'; } ?>
            <?php if(!empty($content)){ echo '<div class="content">'.$content.'</div>'; } ?>
        </div><!-- /.left_aligned -->
        <div class="item_1_3"></div>
    </div><!-- /.container -->
</section><!-- /.left_aligned_partial -->