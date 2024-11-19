<?php

include('../conexao.php');

$email = $_POST["email"];
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$password = $_POST["password"];

$sql = "UPDATE users
        SET password=? , firstName=?, lastName=?
        WHERE email=?";
$sqlpreparando = $conn->prepare($sql);

if($sqlpreparando){
    $sqlpreparando->bind_param('ssss', $password, $firstName, $lastName, $email);
    if($sqlpreparando->execute()){
        header("Location: ./updateUsuarios.php"); // Redireciona após a execução bem-sucedida
        exit();
    } else {
        die("Erro na execução da atualização.");
    }
}
else {
    die("Erro ao preparar a consulta.");
};

if(!$resultado = $conn->query($sql)){
    die("erro");
}