<?php
global $flex_content;

$heading = $flex_content['heading'];
$content = $flex_content['content'];
$link_section = $flex_content['link_section'];

$links_heading = $link_section['heading'];
$links = $link_section['links'];
?>

<section class="content-supp-links">
    <div class="container container-md flex row">
        <div class="item_2_3">
            <?php 
            if(!empty($heading)){echo '<h2>'.$heading.'</h2>';}
            if(!empty($content)){echo '<div class="content_sect">'.$content.'</div>';}
            ?>
        </div><!-- /.item__3 -->
        <div class="item_1_3">
            <div class="links_sect">
            <?php
            if(!empty($links_heading)){echo '<h3>'.$links_heading.'</h3>';}
            if(!empty($links)){
                echo '<ul>';
                foreach($links as $link) {
                    echo '<li><a href="'.$link['link_url'].'">'.$link['link_text'].' <i class="fas fa-angle-double-right"></i></a></li>';
                }
                echo '</ul>';
            }
            ?>
            </div><!-- /.links_sect -->
        </div><!-- /.item_1_3 -->
    </div><!-- /.container -->
</section><!-- /.content-supp-links -->