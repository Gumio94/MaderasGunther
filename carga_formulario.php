<?php

include ("conectar_db.php");

$nombre = $_POST['nombre'];
$emal = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$consulta = "INSERT INTO consulta_de_cliente (nombre, email, telefono, mensaje) 
             VALUES ('$nombre', '$emal','$telefono','$mensaje')";

$comprobar_consulta = $conectar -> query($consulta);

/*if ($comprobar_consulta){
    echo " LOS DATOS SE GRABARON EN LA DB";
    echo "<a href= contacto.php></br>volver a Página de contactos</a>";
}else{
    echo " ERROR EN LA CONSULTA, NO SE PUDO REALIZAR";
}
$enviaremail= mail("franciscosrc03@gmail.com;nicolas.andrada2@gmail.com ",$nombre, $emal, $telefono, utf8_decode($mensaje));
if ($enviaremail){
    echo " el email fue enviado";
   
}else{
    echo " ERROR el email NO SE PUDO ENVIAR";
}*/



?>