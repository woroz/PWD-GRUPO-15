<?php 
session_start();
header('Content-Type: text/html; charset=utf-8');
header ("Cache-Control: no-cache, must-revalidate ");

// Ruta absoluta al directorio del proyecto (donde está este archivo)
$ROOT = __DIR__ . "/";

// Includes
include_once($ROOT . 'controller/tp4/abmAuto.php');
include_once($ROOT . 'controller/tp4/abmPersona.php');
include_once($ROOT . 'model/conector/basedatos.php');
include_once($ROOT . 'model/auto.php');
include_once($ROOT . 'model/persona.php');
include_once($ROOT . 'utils/datasubmitted.php');

$PRINCIPAL = "Location:http://" . $_SERVER['HTTP_HOST'] . "/PWD-GRUPO-15/index.php";

$_SESSION['ROOT'] = $ROOT;

?>