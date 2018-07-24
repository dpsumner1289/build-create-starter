<?php
global $rex_content;

$content_rows = $rex_content['content_rows'];
global $case_study;
if(!empty($content_rows)): foreach($content_rows as $row):
    $case_study = $row;
    get_template_part('template-parts-resources/case-studies/cs', $case_study['acf_fc_layout']);
endforeach;
endif;