<?php
$rex_contents = get_field('resource_content');
global $rex_content;
if(!empty($rex_contents)): foreach($rex_contents as $content):
	$rex_content = $content;
	get_template_part('template-parts-resources/rex', $rex_content['acf_fc_layout']);
endforeach; endif;