<?php
require "config/conex.php";

$documento = $_POST["documento"];
$nombre = $_POST["nombre"];
$celular = $_POST["celular"];

$sql = "SELECT COUNT(*) FROM usuario WHERE documento = ? OR celular = ?";
$stmt = $dbh->prepare($sql);
$stmt->execute([$documento, $celular]);
$existe = $stmt->fetchColumn();

if ($existe > 0) {
    echo "Ya existe un usuario con ese documento.";
} else {
    $sql = "INSERT INTO usuario (documento, nombre, celular) VALUES (?, ?, ?)";
    $stmt = $dbh->prepare($sql);

    if ($stmt->execute([$documento, $nombre, $celular])) {
        echo "Registro correcto.";
    } else {
        echo "Error en el registro.";
    }
}
?>
