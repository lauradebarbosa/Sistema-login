<link rel="stylesheet" href="index.css">

<?php

if(!$_SESSION['login']) {
    header('Location: index.php');
    exit();
}

?>