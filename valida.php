<?php
    session_start();

    if(!isset($_SESSION['firstName']) || $_SESSION['firstName'] == ''){
        session_destroy();
        header("Location: index.php");
    }
?>