<?php
    include('../user-validate/valida.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>titulo</title>
    <link rel="stylesheet" href="main-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family= :ital,wght@0,200..1000;1,200..1000&family=Quicksand:wght@300..700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <!-- Menu lateral -->
        <nav class="sidebar" id="sidebar">
            <div id="menu" onclick="toggleMenu()"><img src="../style/Login-Images/Ywit-Icon.png" alt=""></div>
            <div class="menu-item">
                <a href="../user-select/verificarUsuarios.php" >
                    <img src="../style/Login-Images/user-search.png" alt="">
                    <p>Usuários Cadastrados</p>
                </a>
            </div>
            <div class="menu-item">
                <a href="../user-update/updateUsuarios.php" >
                    <img src="../style/Login-Images/user-config.png" alt="">
                    <p>Altera Usuários</p>
                </a>
            </div>
            <div class="menu-item">
                <a href="../user-list/cadastroUsuarios.php" >
                    <img src="../style/Login-Images/user-add.png" alt="">
                    <p>Cadastrar Usuários</p>
                </a>
            </div>
        </nav>

        <!--Header-->
        <div class="header">
            <input type="text" class="search-bar" placeholder="Pesquisar...">
            <div id="user">
                <img src="../style/Login-Images/user.png" alt="User PFP" id="user-pfp">
                <p id="user-name"><?php echo("Usuário: ".$_SESSION['firstName'])?></p>
            </div>
            <div class="other-elements">
                <button class="button"><a href="../user-left/sair.php">Sair</a></button>
            </div>
        </div>

        <!-- Conteúdo principal -->
        <div class="main-content">
            <div class="content-box"></div>
            <div class="content-box"></div>
            <div class="content-box"></div>
        </div>

        <!-- Conteúdo lateral direito -->
        <div class="right-content">
            <div class="content-box"></div>
            <div class="content-box"></div>
        </div>
    </div>

    <script>
        function toggleMenu() {
            var sidebar = document.getElementById("sidebar");
            if(sidebar.classList.contains("active")){
                sidebar.classList.toggle("not-active");
            } else {
                sidebar.classList.toggle("active");
            }    
        }
    </script>
</body>
</html>
