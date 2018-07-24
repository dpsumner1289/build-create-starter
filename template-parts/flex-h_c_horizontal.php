<?php
global $flex_content;

$heading = $flex_content['heading'];
$content = $flex_content['content'];
?>

<section class="h_c_horizontal">
    <div class="container container-md-lg flex row vc">
        <div class="item_1_3"><?php if(!empty($heading)){echo '<h2>'.$heading.'</h2>';} ?></div>
        <div class="item_2_3"><?php if(!empty($content)){echo '<div class="content">'.$content.'</div>';} ?></div>
    </div><!-- /.container -->
</section><!-- /.h_c_horizontal -->