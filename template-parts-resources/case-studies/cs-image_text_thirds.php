<?php
global $case_study;

$image = $case_study['image'];
$heading = $case_study['heading'];
$content = $case_study['content'];
?>

<section class="it_1_2_3">
    <div class="container container-md flex row vc">
        <div class="item_1_3">
        <?php if(!empty($image)){echo '<img src="'.$image["url"].'" class="image_1_3" />'; } ?>
        </div>
        <div class="item_2_3">
        <?php if(!empty($heading)){echo '<h2>'.$heading.'</h2>'; } ?>
        <?php if(!empty($content)){echo '<div class="content">'.$content.'</div>'; } ?>
        </div>
    </div><!-- /.container -->
</section><!-- /.it_1_2_3 -->