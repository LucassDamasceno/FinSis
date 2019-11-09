<?php 
require_once('../modal/MissaoEvaloresTO');
require_once('../modal/MissaoEvaloresDAO');

$nome    = isset($_REQUEST['nome'])?$nome = $_REQUEST['nome'] : null;
$razao   = isset($_REQUEST['razao'])?$razao = $_REQUEST['razao'] : null;
$missao  = isset($_REQUEST['missao'])?$missao = $_REQUEST['missao'] : null;
$visao   = isset($_REQUEST['visao'])?$visao = $_REQUEST['visao'] : null;
$valores = isset($_REQUEST['valores'])?$valores = $_REQUEST['valores'] : null;

$objTO_Add = new DespesasTO;
$objTO_Add->setNome($nome);
$objTO_Add->setRazaoSocial($razao);
$objTO_Add->setMissao($missao);
$objTO_Add->setVisao($visao);
$objTO_Add->setValores($valores);

$objDAO_Add = new DespesaDAO;
$objDAO_Add-createMissaoValores($objTO_Add);

?>