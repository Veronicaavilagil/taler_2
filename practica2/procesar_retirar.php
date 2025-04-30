<?php
 // 1 paso 
 require "config/conex.php";
 // paso 2 capturar variables
 $valor = $_POST["txt_valor"];
 $id_logueado = 1;

 // paso 3: armar el squl
 $sql= "INSERT INTO transacciones(tipo_transaccion, value, user_origen, user_destino) VALUES (2,".$valor.", ".$id_logueado.", 0)";
$sql2="UPDATE usuario
SET
saldo=(saldo-".$valor.")
WHERE
id = ".$id_logueado." ";

 
if($dbh->query($sql))
{
    echo "transaccion registrada exitosamente";
}else{
    echo "error al registrar la transaccion";
}

if($dbh->query($sql2))
{
    echo "<br>saldo actualizado existosamente";
}else{
    echo "<br>error actualizando saldo";
}

?>