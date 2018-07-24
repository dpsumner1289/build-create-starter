<?php
global $case_study;

$columns = $case_study['column'];
?>

<section class="two_column_content">
    <div class="container container-md flex row">
        <?php
        foreach($columns as $col) {
        echo '<div class="item_1_2">'.$col["content"].'</div>';
        }
        ?>
    </div>
</section>