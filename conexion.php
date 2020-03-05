<?php
    $host ="localhost";
    $user ="root";
    $pass ="";
    


    $con=mysqli_connect($host,$user,$pass)or die("Error al conectar");
    mysqli_select_db($con,"lagrande")or die("No se pudo conectar con la base de datos ");




    $nom=$_POST["nombre"];
    $tel=$_POST["telefono"];
    $co=$_POST["correo"];
    $ejecuta=mysqli_query($con,"insert into usuarios (nombre,correo,telefono) 
    	values("$nom","$co","$tel")");
    if (!$ejecuta) {
    	echo "Hubo error al insertar los datos";
    }
       else{
       	   echo "Los datos fueron insertados correctamente";
       }

?>
