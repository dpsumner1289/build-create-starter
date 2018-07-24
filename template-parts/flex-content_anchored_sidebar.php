<?php
global $flex_content;

$content = $flex_content['content'];
$sidebar = $flex_content['sidebar'];

$heading = $sidebar['heading'];
$anchor_link = $sidebar['anchor_link'];
?>

<section class="content_anchored_sidebar">
    <div class="container container-md flex row">
        <div class="item_2_3">
            <?php if(!empty($content)){echo $content;} ?>
        </div><!-- /.item_2_3 -->
        <div class="item_1_3">
            <div class="bluebox">
                <?php
                if(!empty($heading)){echo '<h4>'.$heading.'</h4>';}
                if(!empty($anchor_link)){
                    foreach($anchor_link as $link){
                        $label = $link['label'];
                        $anchor = $link['anchor'];
                        echo '<a href="#'.$anchor.'" class="anchor_link">&mdash; '.$label.'<i class="fas fa-angle-double-right"></i></a>';
                    }
                }
                ?>
            </div><!-- /.bluebox -->        
        </div><!-- /.item_1_3 -->
    </div><!-- /.container -->
</section><!-- /.content_anchored_sidebar -->