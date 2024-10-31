<?php

include('conexao.php');

$email = $_POST['email'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$password = $_POST['password'];

$sql = "UPDATE USERS
        SET password='$password', firstName='$firstName', lastName='$lastName'
        WHERE email='$email'";

if(!$resultado = $conn->query($sql)){
    die("erro");
}

header("Location: updateUsuarios.php");
?>