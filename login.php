<?php
    include("conexao.php");

    $email=$_POST["email"];
    $password=$_POST["password"];

    $sqli12 = 'select * from users where email=? and password=?';

    $injection = $conn->prepare($sqli12);

    if($injection){
        $injection->bind_param('ss', $email, $password);
        $injection->execute();

        $resultadoDaMerda = $injection->get_result();

        if($resultadoDaMerda->num_rows > 0){
            $row = $resultadoDaMerda->fetch_assoc();
            if($row != ''){
                session_start();
                $_SESSION['email'] = $email;
                $_SESSION['firstName'] = $row['firstName'];
                $_SESSION['lastName'] = $row['lastName'];
                header('Location: ./user-main/main.php');
            }
        } else {
            echo "Faz o L";
        }
    }
?>