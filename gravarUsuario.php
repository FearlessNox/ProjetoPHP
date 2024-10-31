<?php
    include("conexao.php");

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];   
    $password = $_POST['password'];

    $sql = "INSERT INTO USERS VALUES ('','$email', '$password', '$firstName', '$lastName')";

    if(!$resultado = $conn->query($sql)){
        die("erro");
    };

    header("Location: cadastroUsuarios.php");
?>