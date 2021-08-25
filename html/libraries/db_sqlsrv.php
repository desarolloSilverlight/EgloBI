<?php

$conexion = new PDO("sqlsrv:server=DESKTOP-G3BF7FS\SQLEXPRESS;database=EGLO", "sa", "Eglo1234");

$consulta = $conexion->prepare("SELECT COUNT('CLIENTE') FROM EGLO.CLIENTE");
$consulta->execute();
$datos=$consulta->fetchAll(PDO::FETCH_ASSOC);
var_dump($datos);

?>