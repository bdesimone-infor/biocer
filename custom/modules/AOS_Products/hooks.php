<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class before_prod{
	function before_prod(&$bean, $event, $arguments){
		$bean->description = preg_replace('/\h+/', ' ', $bean->description);
		$db = $GLOBALS['db'];
		/*
		if ($bean->id == "c853db23-c449-bdbf-4ec2-5e5bbca287bc") {
			$query = "SELECT id, description FROM aos_products WHERE deleted = 0";
			$result = $db->query($query);
			while ($row = $result->fetch_assoc()) {
				$description = preg_replace('/\h+/', ' ', $row['description']);
				$prod = $row['id'];
				$query = "UPDATE aos_products SET description = '$description' WHERE id = '$prod'";
				$db->query($query);
			}
		}
		*/
	}
}