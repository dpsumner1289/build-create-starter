<?php
global $case_study;

$heading = $case_study['heading'];
$button = $case_study['button'];
?>

<section class="cta_button">
    <div class="container container-md">
    <div class="container container-xs-sm flex col hc vc">
        <?php if(!empty($heading)){echo '<h2>'.$heading.'</h2>';} ?>
        <?php echo '<a href="'.$button["url"].'" class="button">'.$button["label"].'</a>'; ?>
    </div>
    </div>
</section>