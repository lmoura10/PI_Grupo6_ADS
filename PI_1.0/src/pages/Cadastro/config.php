<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'pi';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

   /* if($conexao->connect_errno)
    {
        echo "Erro";
    }
    else
    {
        echo "conexão deu bom";
    } */
    

?>