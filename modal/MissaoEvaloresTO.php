<?php 

class MissaoValoresTO
{
    private $id;
    private $nome;
    private $razaoSocial;
    private $missao;
    private $visao;
    private $valores;

    public function getId()
    {
        return $this->id;
    }
    public function setId($vlr)
    {
        $this->id = $vlr;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($vlr)
    {
        $this->nome = $vlr;
    }

    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }
    public function setRazaoSocial($vlr)
    {
        $this->razaoSocial = $vlr;
    }

    public function getMissao()
    {
        return $this->missao;
    }
    public function setMissao($vlr)
    {
        $this->missao = $vlr;
    }

    public function getVisao()
    {
        return $this->visao;
    }
    public function setVisao($vlr)
    {
        $this->visao = $vlr;
    }

    public function getValores()
    {
        return $this->valores;
    }
    public function setValores($vlr)
    {
        $this->valores = $vlr;
    }
}

?>