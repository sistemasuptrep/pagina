<?php

include ("conexion.php");

if(isset($_POST['registro.php'])){

    if(strlen($_POST['nombre']) >= 1 && //los siguientes
    strlen($_POST['curp']) >= 1 &&      //datos son 
    strlen($_POST['estado']) >= 1 &&    //campos obligatorios
    strlen($_POST['municipio']) >= 1 && 
    strlen($_POST['colonia']) >= 1 && 
    strlen($_POST['domicilio']) >= 1 && 
    strlen($_POST['cp']) >= 1){

        $nombre = trim($_POST['nombre']);
        $curp = trim($_POST['curp']);
        $observacion = trim($_POST['observacion']);
        $estado = trim($_POST['estado']);
        $municipio = trim($_POST['municipio']);
        $colonia = trim($_POST['colonia']);
        $domicilio = trim($_POST['domicilio']);
        $cp = trim($_POST['cp']);
        $rfc = trim($_POST['rfc']);
        $tipo_persona = trim($_POST['genero']);
        $fecha_reg = date("d/m/y");

        $consulta = "INSERT INTO datos( nombre, curp, rfc, observacion, estado, municipio, colonia, domicilio, cp, genero, fecha_reg) VALUES ($nombre,
        $curp,$observacion,$estado,$municipio,$colonia,$cp,$rfc,$tipo_persona,$fecha_reg)";

        $resultado = mysqli_query($conexion,$consulta);
        if($resultado){
            echo "<script>alert('Se ha registrado el usuario con éxito');
            window.location='/UPTREP%20SISE_edit4(isaac)/index.html'<script>";
    }else{
        echo"<script>alert('No se pudo registrar el usuario');winwow.history.go(-1);</script>";
    }

}
}
?>