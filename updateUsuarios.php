<?php
    include('valida.php');
    include('conexao.php');
    $sql = 'SELECT * FROM USERS';

    $resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <style>
        /* Estilo básico */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #0b0d1b; /* Preto profundo */
            color: white;
            width: 90%;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            background-color: #111727; /* Preto ligeiramente mais claro */
            padding: 15px;
            border-radius: 8px;
            color: white;
            margin-bottom: 20px;
            text-align: center;
        }

        a {
            text-decoration: none;
            color: #00bfff; /* Ciano */
        }

        /* Botão "Voltar" */
        .back-button {
            background-color: #111727;
            padding: 10px;
            border-radius: 50px;
            width: 150px;
            text-align: center;
            margin-bottom: 30px;
            transition: background-color 0.3s;
        }

        .back-button a {
            text-decoration: none;
            color: white;
            font-size: 16px;
            font-weight: bold;
        }

        .back-button:hover {
            background-color: #00bfff; /* Ciano */
        }

        /* Estilo da tabela */
        table {
            width: 100%;
            margin: 20px 0;
            border-spacing: 0 15px;
        }

        table td {
            padding: 10px;
            background-color: #111727;
            border-radius: 10px;
        }

        table input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
            background-color: #1a233b;
            color: white;
        }

        table input[type="submit"] {
            padding: 10px 20px;
            background-color: #0077ff; /* Azul claro */
            border: none;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        table input[type="submit"]:hover {
            background-color: #00bfff; /* Ciano */
        }
    </style>

</head>
<body>
<h1 style="background-color: black; padding: 10px; border-radius: 10px; color: white;">Alterar Usuários Cadastrados: </h1>
<h1 style="background-color: #363636; padding: 10px; border-radius: 10px; max-width: 10%; text-align: center;"><a href="main.php" style=" color: white;">Voltar</a></h1>
    <div style="width: 100%;">
    <table>
        <?php
        while($row = $resultado->fetch_assoc()){
        ?>
            <tr>
                <form method="post" action="update.php" id="form-<?=$row['id']?>">
                <td>
                    <label for="<?=$row['email'];?>">Email: </label>
                    <input type="text" name="email" value="<?=$row['email'];?>" id="form-email-<?=$row['id']?>">
                </td>
                <td>
                    <label for="<?=$row['firstName'];?>">Primeiro-Nome: </label>
                    <input type="text" name="firstName" value="<?=$row['firstName'];?>" id="form-firstName-<?=$row['id']?>">
                </td>
                <td>
                    <label for="<?=$row['lastName'];?> ">Sobre-Nome: </label>
                    <input type="text" name="lastName" value="<?=$row['lastName'];?>" id="form-lastName-<?=$row['id']?>">
                </td>
                <td>
                    <label for="<?=$row['password'];?> ">Senha: </label>
                    <input type="text" name="password" value="<?=$row['password'];?>" id="form-password-<?=$row['id']?>">
                </td>
                <td>
                    <input type="submit" value="alterar" id="form-submi-<?=$row['id']?>></td> // Adicionar a analise de regex, para pegar o número do index, depois dos dois '-'
            </form>
        </tr>
        <?php
        }
        ?>
    </table>
    </div>
</body>
</html>