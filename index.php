<!DOCTYPE html>
<html lang="en">
    <head>   
        <title>titulo</title>
        <link rel="stylesheet" href="./index-style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Quicksand:wght@300..700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <script src="index.js" defer></script>
    </head>
    <body>
        <div id="container">
            <div id="container-img">
                <img src="./style/Login-Images/Ywit-IMG-Container.png" alt="Twitter-Image">
            </div>
            <div id="container-login">
                <div id="login-head">
                    <h1 id="container-login-h1">Happening now</h1>
                    <h2 id="container-login-h2">Join today.</h2> 
                </div>
                <form method="post" action="login.php" id="container-login-form">
                    <h3>Sign in</h3>
                    <input type="text" name="email"  placeholder="Email" class="form-input" id="user-email">
                    <p id="user-email-desc"></p><br>
                    <input type="password" name="password"  placeholder="Password" class="form-input" id="user-password">
                    <p id="user-password-desc"></p><br>
                    <input type="submit" value="Sign in" id="submit-btn">
                </form>
            </div>
        </div>
    </body>
</html>