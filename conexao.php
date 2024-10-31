<?php
    $servidor = "127.0.0.1";
    $usuario = "root";
    $senha = "";
    $dbname = "xwit";

    $conn = new mysqli($servidor,$usuario,$senha,$dbname);
    if($conn->connect_error){
        die("Falha na conexao".$conn->connect_error);
    }
?>