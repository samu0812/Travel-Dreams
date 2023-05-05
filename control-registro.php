<?php
include("conexion.php");
if ($con){
    echo "Se ha conectado correctamente";
}else {
    echo "Ha ocurrido un error";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fecha_nacimiento = mysqli_real_escape_string($con,$_POST['fecha_nacimiento']);
    $direccion = mysqli_real_escape_string($con,$_POST['direccion']);
    $telefono = mysqli_real_escape_string($con,$_POST['telefono']);
    $correo = mysqli_real_escape_string($con,$_POST['email']);
    $nombre = mysqli_real_escape_string($con,$_POST['nombre']);
    $apellido = mysqli_real_escape_string($con,$_POST['apellido']);
    $dni = mysqli_real_escape_string($con,$_POST['dni']);
    }

if (isset($_POST["registro"])){
    $consulta="INSERT INTO personas (id_usuario,fecha_nacimiento,direccion,telefono,correo,nombre,apellido,dni) VALUES ('ABC122','$fecha_nacimiento','$direccion','$telefono',$correo,$nombre,$apellido,$dni)";
    $resultado = mysqli_query($con,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }