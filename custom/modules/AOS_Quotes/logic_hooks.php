<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

	$hook_array = array();
	$hook_array['before_save'] = Array(); 
	$hook_array['before_save'][] = Array(1, 'before', 'custom/modules/AOS_Quotes/hooks.php','before_apq', 'before_apq');
	
?>