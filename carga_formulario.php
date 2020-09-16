<?php
if(isset($_POST['nombre'])){
    include ("conectar_db.php");

    $nombre = $_POST['nombre'];
    $emal = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    $error="";
    
    $consulta = "INSERT INTO consulta_de_cliente (nombre, email, telefono, mensaje) 
                 VALUES ('$nombre', '$emal','$telefono','$mensaje')";

    $comprobar_consulta = $conectar->query($consulta);

    if (!$comprobar_consulta){
        $erro.= "ERROR BD: " . $conectar->error ."\n" ;
    }
    $enviaremail= mail("contacto@maderasgunther.com.ar",$nombre, utf8_decode("Mensaje del cliente: ".$mensaje."\nTelefono: ". $telefono), "From:" .$emal);
    
    if (!$enviaremail){
        $error.="ERROR MAIL: ". error_get_last()['message'];
    }
    
    echo "<script> function msj(){";
    if($error==""){
        echo "alertify.success('Mensaje enviado con exito.');";
    }else{
        echo "alertify.error('$error');";
    }
    echo "}</script>";
}
?>