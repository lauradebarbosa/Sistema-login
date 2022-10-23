<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login </title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <section></section>
    <div class="box">
        <form class="form" action="login.php" method="POST">
            <h2> Sign In </h2>

            <?php
            if(isset($_SESSION['nao_autenticado'])):
            ?>

            <div class="notification">
                <p> Usuário e/ou senha inválidos.  </p>
            </div>
    
            <?php
                endif;
                unset($_SESSION['nao_autenticado']);
            ?>

            <div class="inputBox">
                <input name="login" type="text" required="required">
                <span> Username </span>
                <i></i>
            </div>
            <div class="inputBox">
                <input name="senha" type="password" required="required">
                <span> Password </span>
                <i></i>
            </div>
            <div class="links">
                <a href="#"> Forgot Password</a>
                <a href="#"> Sign Up </a>
            </div>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>