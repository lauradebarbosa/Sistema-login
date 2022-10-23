<link rel="stylesheet" href="index.css">

<?php

session_start();
include('ope.php');

if(empty($_POST['login']) || empty($_POST['senha'])) {
    header('Location: index.php');
    exit();
}

$login = mysqli_real_escape_string($conn, $_POST['login']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$query = "Select id_user, nome from usuario where nome = '{$login}' and senha = '{$senha}' ";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION['login'] = $login;
    header('Location: site.php');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: index.php');
    exit();
}

?>