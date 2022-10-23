<link rel="stylesheet" href="index.css">

<?php

define('host', '127.0.0.1');
define('usuario', 'root');
define('senha', '');
define('db', 'server');

$conn = mysqli_connect(host, usuario, senha, db) or die ('Conexão falhou.');

?>