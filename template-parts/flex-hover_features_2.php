<?php
global $flex_content;

$heading = $flex_content['heading'];
$feature = $flex_content['feature'];
$background_color = $flex_content['background_color'];
$hover_effects = $flex_content['hover_effects'];
?>

<section class="hover_features_2 <?php echo $background_color; if(!$hover_effects){echo ' no_hover';} ?>">
    <div class="container container-md-lg">
        <?php 
        if(!empty($heading)) { echo '<h2>'.$heading.'</h2>'; }
        echo '<div class="feature-section flex row vc">';
        foreach($feature as $feat) {
            $feature_image = $feat['feature_image'];
            $feature_info = $feat['feature_info'];
            $theme = $feat['theme'];

            $fheading = $feature_info['heading'];
            $description = $feature_info['description'];
            $button = $feature_info['button'];
            
            $label = $button['label'];
            $url = $button['url'];
            ?>
            <div class="hover-feature item_1_2 <?php echo $theme; ?>">
                <figure>
                    <img src="<?php echo $feature_image['url']; ?>" alt="<?php echo $feature_image['alt']; ?>">
                </figure>
                <div class="feature_info">
                    <?php 
                    if(!empty($fheading)){ echo '<h3>'.$fheading.'</h3>';  }
                    ?>
                    <div class="finfo_bottom flex row">
                        <div class="description item_2_3"><?php echo $description; ?></div>
                        <div class="button_cont item_1_3">
                        <?php if(!empty($label) && !empty($url)){ echo '<a href="'.$url.'" class="button">'.$label.'</a>'; } ?>
                        </div>
                    </div><!-- /.finfo_bottom -->
                </div><!-- /.feature_info -->
            </div><!-- /.hover-feature -->
            <?php
        }
        echo '</div><!-- /.feature-section -->';
        ?>
    </div>
</section><!-- /.hover_features_2 -->