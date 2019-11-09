<?php 

class Conexao
{
    public function Conexao()
    {
        try
        {
            $con = new PDO("mysql:dbname= >NOMEDOBANCO<, host: localhost", "root", "");
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