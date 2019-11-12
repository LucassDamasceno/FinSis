<?php
require_once("Conexao.php");

class SwotDAO
{
    public function createSwotValores($objTO)
    {
        $conexao = new Conexao();
        $aux = $conexao->t();
        $res = $aux->prepare("INSERT INTO swot(forcas, fraquezas, oportunidades, ameacas) VALUES (:forcas, :fraquezas, :oportunidades, :ameacas)");

        $forcas = $objTO->getForcas();
        $fraquezas = $objTO->getFraquezas();
        $oportunidades = $objTO->getOportunidades();
        $ameacas = $objTO->getAmeacas();
     

        $res->bindValue(":forcas", $forcas);
        $res->bindValue(":fraquezas", $fraquezas);
        $res->bindValue(":oportunidades", $oportunidades);
        $res->bindValue(":ameacas", $ameacas);
        $res->execute();
    }
}
