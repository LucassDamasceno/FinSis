<?php 

class Conexao
{
    public function t()
    {
        try
        {
            $con = new PDO("mysql:dbname=finsis;host=localhost", "root", "");
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
            return $con;
        }
        catch (PDOExeption $e)
        {
            echo "Erro na comunicação PDO ao BD.";
        }
        catch (Excepion $e)
        {
            echo "Erro na comunicação com o Banco de Dados.";
        }
    }
}

?>
