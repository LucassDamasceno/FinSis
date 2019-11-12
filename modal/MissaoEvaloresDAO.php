<?php
require_once("Conexao.php");

class MissaoEValoresDAO
{
    public function createMissaoValores($objTO)
    {
        $conexao = new Conexao();
        $aux = $conexao->t();
        $res = $aux->prepare("INSERT INTO missaovalores(nome, razaoSocial, missao, visao, valores) VALUES (:nome, :rs, :missao, :visao, :valores)");

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
        
        try {
            return $res->execute();  
        }catch(PDOException $e) {
            die($e->getMessage());
        }

        
    }

    public function updateMissaoValores($objTO)
    {
        $conexao = new Conexao();
        $aux = $conexao->Conexao();
        $res = $aux->prepare("UPDATE missaovalores SET nome = ?, razaoSocial = ?, missao = ?, visao = ?, valores = ?) WHERE id= ?");

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

    public function deleteMissaoValores($objTO)
    {
        $conexao = new Conexao();
        $aux = $conexao->Conexao();
        $res = $aux->prepare("DELETE FROM missaovalores WHERE id= ?");

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

    public function missaovaloresReload(){
        $conexao = new Conexao();
        $aux = $conexao->t();
        $query = $aux->prepare("SELECT * FROM missaovalores");
        $query->execute();
        $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($resultado);
    }


}

?>
