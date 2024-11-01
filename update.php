<?php

include('conexao.php');

$email = $_POST['email'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$password = $_POST['password'];

$sql = "UPDATE USERS
        SET password=? , firstName=?, lastName=?
        WHERE email=?";

$sqlPreparado->$conn->prepare($sql);

if($sqlPreparado){
    $sqlPreparado->bind_param('ssss', $password, $firstName, $lastName, $email);
    $sqlPreparado->execute();
    $sqlResult = $injection->get_result();
    if($sqlResult->num_rows > 0){
        $row = $sqlResult->fetch_assoc();
        if($row != ''){

        }
    }
};

if(!$resultado = $conn->query($sql)){
    die("erro");
}

header("Location: updateUsuarios.php");

//
    if($resultadoDaMerda->num_rows > 0){
        $row = $resultadoDaMerda->fetch_assoc();
    } else {
        echo "Senha incorreta";
    }
?>