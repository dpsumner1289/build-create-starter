<?php
global $flex_content;

$container = $flex_content['container_width'];
$heading = $flex_content['heading'];
$content = $flex_content['content'];
$form = $flex_content['form'];
?>

<section class="contact-section">
    <div class="container <?php echo $container; ?>">
        <?php if(!empty($heading)){echo '<h1>'.$heading.'</h1>';} ?>
        <?php if(!empty($content)){echo $content;} ?>
        <?php
            if(!empty($form)){
                gravity_form($form['id'], false, false, false, '', true, 1);
            }
        ?>
    </div>
</section>