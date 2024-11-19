<?php
    include("../conexao.php");

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];   
    $password = $_POST['password'];

    $sql = "INSERT INTO USERS (email, password, firstName, lastName) VALUES (?, ?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ssss", $email, $password, $firstName, $lastName);
        if ($stmt->execute()) {
            header("Location: cadastroUsuarios.php");
        } else {
            die("Erro ao inserir dados: " . $stmt->error);
        }
        $stmt->close();
    } else {
        die("Erro na preparação da consulta: " . $conn->error);
    }
    $conn->close();
?>
