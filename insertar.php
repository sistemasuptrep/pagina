<?php
include ("conexion.php");

$nombre = $_POST["nombre"];
$curp = $_POST["curp"];
$tipo_persona = $_POST["genero"];
$observacion = $_POST["cuatrimestre"];
$municipio = $_POST["municipio"];
$colonia = $_POST["colonia"];
$domicilio = $_POST["domicilio"];
$estado = $_POST["estado"];
$localidad = $_POST["localidad"];
$cp = $_POST["cp"];
$rfc = $_POST["rfc"];

$insertar = "INSERT INTO datos( nombre, curp, rfc, observacion, estado, municipio, colonia, domicilio, cp, tipo_persona, fecha_reg) VALUES ('$nombre','$curp','$rfc','$observacion','$estado','$municipio','$colonia','$domicilio','$cp','$tipo_persona')";

?>