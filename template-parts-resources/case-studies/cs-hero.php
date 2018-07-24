<?php
global $case_study;

$background = $case_study['background_image'];
$theme = $case_study['theme'];
$content = $case_study['content'];
$company_logo = $case_study['company_logo'];
$button = $case_study['button'];
$alignment = $case_study['alignment'];
?>

<section class="cs_hero flex row <?php echo $alignment.' theme-'.$theme; ?>" style="background-image:url(<?php echo $background['url']; ?>)">
    <div class="container container-md-lg">
        <div class="content-area flex row item_2_5">
            <?php 
            if(!empty($company_logo)){
                echo '<img src="'.$company_logo["url"].'" class="company_logo"/>';
            } 
            if(!empty($content)){
                echo '<div>'.$content.'</div>';
            }
            if(!empty($button['label']) && !empty($button['url'])) {
                echo '<div class="block"><a href="'.$button['url'].'" class="button">'.$button['label'].'</a></div>';
            }
            ?>
        </div><!-- /.item_2_5 -->
        <div class="item_3_5">
        </div><!-- /.item_3_5 -->
    </div>
</section>