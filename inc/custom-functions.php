<?php
/* 
## Custom functions built during dev 
*/

function my_acf_google_map_api( $api ){
	
	$api['key'] = 'AIzaSyAMTPBPsVC0sYA8xjZ6ukXaqLvtr7xywcg';
	
	return $api;
	
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');