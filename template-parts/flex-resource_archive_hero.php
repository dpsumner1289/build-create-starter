<?php
global $flex_content;

$background_image = $flex_content['background_image'];
$content_block = $flex_content['content_block'];
$content_block_2 = $flex_content['content_block_2'];
?>

<section class="resource_archive_hero">
    <div class="container container-80" style="background-image:url(<?php echo $background_image['url']; ?>)">
        <div class="content-container container container-md">
        <?php if(!empty($content_block['heading']) || !empty($content_block['content'])):
            echo '<div class="cblock primary-block '.$content_block["background_color"].'">';
            echo '<h2 class="cblock-heading">'.$content_block['heading'].'</h2>'; 
            echo '<div class="cblock-content">'.$content_block['content'].'</div>';
            echo '</div>';
            endif;
        ?>
        <?php if(!empty($content_block_2['heading']) || !empty($content_block_2['content'])):
            echo '<div class="cblock secondary-block '.$content_block_2["background_color"].'">';
            echo '<h2 class="cblock-heading">'.$content_block_2['heading'].'</h2>'; 
            echo '<div class="cblock-content">'.$content_block_2['content'].'</div>';
            echo '</div>';
            endif;
        ?>
        </div><!-- /.content-container -->
    </div><!-- /.container -->
</section><!-- /.resource_archive_hero -->