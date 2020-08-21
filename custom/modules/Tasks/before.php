<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class before_se{
	function before_se(&$bean, $event, $arguments){
	
    $db = $GLOBALS["db"];	
	
	$timeDate = new TimeDate();

	$dbDate = $bean->date_start; // Sample date saved in database
	// Call the function
	$fecha_inicio = $timeDate->to_display_date_time($dbDate, true, true, $current_user);
		
	$fh = fopen("custom/modules/Tasks/before.txt", "w");
		//fwrite($fh, $fecha_inicio);
	$fecha_inicio = explode(' ',$fecha_inicio);
	$fecha = $fecha_inicio[0];
	$horario = $fecha_inicio[1];
	$meridiano = $fecha_inicio[2];
	
	$horario = explode(':',$horario);
	
	$hora_inicio = $horario[0];
	$minutos_inicio = $horario[1];
	
	$bean->hora_c = $hora_inicio.':'.$minutos_inicio.' '.$meridiano;
	
	$fecha_formato = explode('/',$fecha);
	
	$bean->fecha_c = $fecha_formato[2].'-'.$fecha_formato[1].'-'.$fecha_formato[0] ;
	
	//$bean->description = $fecha_prueba;
	$bean->id_ta_c = $bean->id;
	
	}
}