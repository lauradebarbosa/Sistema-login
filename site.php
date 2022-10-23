<link rel="stylesheet" href="index.css">

<?php

session_start();
include('verifica_login.php');

?>

<h2> Olá, <?php echo $_SESSION['login']; ?>. Deseja <a href="logout.php"> Sair</a>? </h2> 