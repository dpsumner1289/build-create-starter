<?php
global $flex_content;

$logo = $flex_content['logo'];
$button = $flex_content['button'];
?>

<section class="logo-carousel flex row vc hc">
<div class="container container-lg flex row vc hc">
    <div class="owl-carousel">
    <?php foreach($logo as $log): ?>
    <div class="logo">
        <?php
        $output = '';
        $logo_image = $log['logo'];
        $company_link = strip_tags($log['company_link']);

        if(!empty($company_link)){$output .= '<a href="'.$company_link.'" target="_blank">';}
        $output .= '<img src="'.$logo_image['url'].'"/>';
        if(!empty($company_link)){$output .= '</a>';}

        echo $output;
        ?>

    </div>
    <?php endforeach; ?>
    </div><!-- /.owl-carousel -->
    <?php
    if(!empty($button['label'])) {
        echo '<div><a href="'.$button['url'].'" class="button red">'.$button['label'].'</a></div>';
    }
    ?>
</div><!-- /.container -->
</section><!-- /.logo-carousel -->