<?php 
    try
    {
        require_once("../modal/MissaoEvaloresDAO.php");

        $objDAO_Add = new MissaoEValoresDAO();
        $objDAO_Add->missaovaloresReload();
    }
    catch(Exception $e)
    {
        echo "erro na controllerIndexAdd.php: ".$e;
    }
?>
