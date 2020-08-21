<?php

	if(!defined('sugarEntry') || !sugarEntry) die ('Invalid Entry Point');
	
	$hook_array = array();
	
	$hook_array['before_save'] = Array(); 
	$hook_array['before_save'][] = Array(1, 'before', 'custom/modules/AOS_Products/hooks.php', 'before_prod', 'before_prod');
	
?>