<?php

$nombre = $select $dni $cuit $domicilio $localidad $cp $profesion $cel $correo $fecha $firma = NULL;

if(isset($_POST['submit'])){

    !isset = $_POST['select']; 
    !isset= $_POST['nombre']=; 
    !isset=$_POST['dni']; 
    !isset=$_POST['cuit']; 
    !isset=$_POST['domicilio']; 
    !isset=($_POST['localidad']; 
    !isset=$_POST['cp']; 
    !isset=$_POST['profesion']; 
    !isset=$_POST['cel'];
    !isset=$_POST['correo']; 
    !isset=$_POST['fecha'];
    !isset=$_POST['firma'];
    $para= 'humanita.ong@gmail.com';

    //crear header
    $headers = 'From' . " " . $correo . "\r\n";    
    $headers .= "Content-type: text/html; charset=utf-8";

    //crear cuerpo del correo
    $msjCorreo = "Curso: " . $select;
    $msjCorreo .= "\r\n";
    $msjCorreo = "Nombre: " . $nombre;
    $msjCorreo .= "\r\n";
    $msjCorreo = "DNI: " . $dni;
    $msjCorreo .= "\r\n";
    $msjCorreo = "CUIT: " . $cuit;
    $msjCorreo .= "\r\n";
    $msjCorreo = "domicilio: " . $domicilio;
    $msjCorreo .= "\r\n";
    $msjCorreo = "localidad: " . $localidad;
    $msjCorreo .= "\r\n";
    $msjCorreo = "CP: " . $cp;
    $msjCorreo .= "\r\n";
    $msjCorreo = "profesion: " . $profesion;
    $msjCorreo .= "\r\n";
    $msjCorreo = "Cel: " . $cel;
    $msjCorreo .= "\r\n";
    $msjCorreo .= "Correo: " . $correo;
    $msjCorreo .= "\r\n";
    $msjCorreo = "fecha de inscripcion: " . $fecha;
    $msjCorreo .= "\r\n";

    if(mail($para ,$msjCorreo,$headers)){
        echo"<script languaje='javascript'>
        alert('Mensaje enviado, muchas gracias.);
        </script>";
    }else{
        echo"<script languaje='javascript'>
        alert('Mensaje no enviado');
        </script>
        ";
    }
}
?>
