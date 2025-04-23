<?php
$dbserver = 'mysql:dbname=talle2;host=127.0.0.1';
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dbserver, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'la conexion ha fallado: ' . $e->getMessage();
}

?>
