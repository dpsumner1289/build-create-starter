<?php
global $flex_content;

$heading = $flex_content['heading'];
$form = $flex_content['form'];
?>
<div class="form-section">
<div class="container container-xsm">
<?php
if(!empty($heading)){
    echo '<h4 class="underlined">'.strip_tags($heading).'</h4>';
}
?>
<div>
<?php
if(!empty($form)){
    gravity_form($form['id'], false, false, false, '', true, 1);
}
?>
</div>
</div>
</div>