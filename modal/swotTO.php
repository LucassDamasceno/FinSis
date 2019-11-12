<?php 

class swotTO
{
    private $id;
    private $forcas;
    private $fraquezas;
    private $oportunidades;
    private $ameacas;

    public function getId()
    {
        return $this->id;
    }
    public function setId($vlr)
    {
        $this->id = $vlr;
    }

    public function getForcas()
    {
        return $this->forcas;
    }
    public function setForcas($vlr)
    {
        $this->forcas = $vlr;
    }

    public function getFraquezas()
    {
        return $this->fraquezas;
    }
    public function setFraquezas($vlr)
    {
        $this->fraquezas = $vlr;
    }

    public function getOportunidades()
    {
        return $this->oportunidades;
    }
    public function setOportunidades($vlr)
    {
        $this->oportunidades = $vlr;
    }

    public function getAmeacas()
    {
        return $this->ameacas;
    }
    public function setAmeacas($vlr)
    {
        $this->ameacas = $vlr;
    }
}

?>
