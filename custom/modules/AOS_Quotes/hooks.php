<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class before_apq{
	function before_apq(&$bean, $event, $arguments){
    
        $db = $GLOBALS['db'];

        $fechaaa = DateTime::createFromFormat('Y-m-d', $bean->fecha_pre_c);
        $fecha_str = date_format ( $fechaaa , "d-m-Y" );  
        $fecha_str = explode("-", $fecha_str);

        $meses = array(
            "01" => "Enero",
            "02" => "Febrero",
            "03" => "Marzo",
            "04" => "Abril",
            "05" => "Mayo",
            "06" => "Junio",
            "07" => "Julio",
            "08" => "Agosto",
            "09" => "Septiembre",
            "10" => "Octubre",
            "11" => "Noviembre",
            "12" => "Diciembre",

        );
        
        $bean->fecha_presupuesto_pdf_c = $fecha_str[0].' de '.$meses[$fecha_str[1]].' de '. $fecha_str[2];

        $user = BeanFactory::getBean('Users', $bean->assigned_user_id);
        $nombre = explode(" ", $user->name);

        $iniciales = "";
        foreach ($nombre as $nom) {
            $iniciales .= $nom[0];;
        }
        $bean->name = "PR-".$fecha_str[2]."-".$fecha_str[1]."-360".$bean->number."/".$iniciales;
    }
}
?>