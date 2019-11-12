<?php 
require_once('../modal/swotTO.php');
require_once('../modal/swotDAO.php');

$forcas    = isset($_REQUEST['forcas'])?$forcas = $_REQUEST['forcas'] : null;
$fraquezas   = isset($_REQUEST['fraquezas'])?$fraquezas = $_REQUEST['fraquezas'] : null;
$oportunidades  = isset($_REQUEST['oportunidades'])?$oportunidades = $_REQUEST['oportunidades'] : null;
$ameacas   = isset($_REQUEST['ameacas'])?$ameacas = $_REQUEST['ameacas'] : null;

$objTO_Add = new swotTO ;
$objTO_Add->setForcas($forcas);
$objTO_Add->setFraquezas($fraquezas);
$objTO_Add->setOportunidades($oportunidades);
$objTO_Add->setAmeacas($ameacas);

$objDAO_Add = new SwotDAO;
var_dump($objDAO_Add->createSwotValores($objTO_Add));

?>
