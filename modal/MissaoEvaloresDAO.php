<?php
require_once("Conexao.php");

class MissaoEValoresDAO
{
    public function createMissaoValores($objTO)
    {
        $conexao = new Conexao();
        $aux = $conexao->Conexao();
        $res = $aux->prepare("INSET INTO -tabela-(nome, razaoSocial, missao, visao, valores) VALUES (:nome, :rs, :missao, :visao, :valores)");

        $nome   = $objTO->getNome();
        $razao  = $objTO->getRazaoSocial();
        $missao = $objTO->getMissao();
        $visao  = $objTO->getVisao();
        $vlrs   = $objTO->getValores();

        $res->bindValue(":nome", $nome);
        $res->bindValue(":rs", $razao);
        $res->bindValue(":missao", $missao);
        $res->bindValue(":visao", $visao);
        $res->bindValue(":valores", $vlrs);
        $res->execute();
    }
}

?>