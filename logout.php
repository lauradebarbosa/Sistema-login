<link rel="stylesheet" href="index.css">

<?php

session_start();
session_destroy();
header('Location: index.php');
exit();

?>