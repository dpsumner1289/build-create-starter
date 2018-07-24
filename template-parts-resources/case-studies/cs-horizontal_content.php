<?php
global $case_study;

$title = $case_study['title'];
$content = $case_study['content'];
?>

<section class="horizontal_content">
    <div class="container container-md-lg flex row">
        <div class="item_1_3">
            <?php echo '<h2>'.$title.'</h2>'; ?>
        </div><!-- /.item_1_3 -->
        <div class="item_2_3">
            <?php echo $content; ?>
        </div><!-- /.item_2_3 -->
    </div><!-- /.container -->
</section><!-- /.horizontal_content -->