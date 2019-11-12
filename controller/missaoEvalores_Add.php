<?php 
// error_reporting(E_ALL ^ E_DEPRECATED);

require_once('../modal/MissaoEvaloresTO.php');
require_once('../modal/MissaoEvaloresDAO.php');

$nome    = isset($_REQUEST['nome'])?$nome = $_REQUEST['nome'] : null;
$razao   = isset($_REQUEST['razao'])?$razao = $_REQUEST['razao'] : null;
$missao  = isset($_REQUEST['missao'])?$missao = $_REQUEST['missao'] : null;
$visao   = isset($_REQUEST['visao'])?$visao = $_REQUEST['visao'] : null;
$valores = isset($_REQUEST['valores'])?$valores = $_REQUEST['valores'] : null;

$objTO_Add = new MissaoValoresTO;
$objTO_Add->setNome($nome);
$objTO_Add->setRazaoSocial($razao);
$objTO_Add->setMissao($missao);
$objTO_Add->setVisao($visao);
$objTO_Add->setValores($valores);

$objDAO_Add = new MissaoEValoresDAO;
var_dump($objDAO_Add->createMissaoValores($objTO_Add));

?>
