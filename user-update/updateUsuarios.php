<?php
    include('../user-validate/valida.php');
    include('../conexao.php');
    $sql = 'SELECT * FROM USERS';

    $resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <script src="./updateUsuarios.js" defer></script>
    <link rel="stylesheet" href="./updateUsuarios.css">
</head>
<body>
    <div class="container">
        <h1>Alterar Usuários Cadastrados: </h1>
        <h2><a href="../user-main/main.php">Voltar</a></h2>
        <div class="table-container">
            <table>
                <?php
                while($row = $resultado->fetch_assoc()){
                ?>
                    <tr id="<?=$row['id']?>">
                        <form method="post" action="update.php" id="form-<?=$row['id']?>">
                        <td>
                            <label for="<?=$row['email'];?>">Email: </label>
                            <input type="text" name="email" value="<?=$row['email'];?>" id="form-email-<?=$row['id']?>">
                            <p id="form-email-desc-<?=$row['id']?>" class=""></p>
                        </td>
                        <td>
                            <label for="<?=$row['firstName'];?>">Primeiro-Nome: </label>
                            <input type="text" name="firstName" value="<?=$row['firstName'];?>" id="form-firstName-<?=$row['id']?>">
                            <p></p>
                        </td>
                        <td>
                            <label for="<?=$row['lastName'];?> ">Sobre-Nome: </label>
                            <input type="text" name="lastName" value="<?=$row['lastName'];?>" id="form-lastName-<?=$row['id']?>">
                            <p></p>
                        </td>
                        <td>
                            <label for="<?=$row['password'];?> ">Senha: </label>
                            <input type="text" name="password" value="<?=$row['password'];?>" id="form-password-<?=$row['id']?>">
                            <p id="form-password-desc-<?=$row['id']?>" class=""></p>
                        </td>
                        <td>
                            <input type="submit" value="alterar" id="form-submit-<?=$row['id']?>" class="form-button-submit">
                        </td> 
                    </form>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>
