<?php
include("conexion.php");
if ($con){
    echo "Se ha conectado correctamente";
} else {
    echo "Ha ocurrido un error";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Datos del Paquete
    $disponibilidad = date('Y-m-d', strtotime(mysqli_real_escape_string($con, $_POST['disponibilidad'])));
    $fecha_inicio = date('Y-m-d', strtotime(mysqli_real_escape_string($con, $_POST['fecha_inicio'])));
    $fecha_vigencia = date('Y-m-d', strtotime(mysqli_real_escape_string($con, $_POST['fecha_vigencia'])));
    $cantidad_personas = mysqli_real_escape_string($con, $_POST['cantidad_personas']);
    $fecha_final = date('Y-m-d', strtotime(mysqli_real_escape_string($con, $_POST['fecha_final'])));
    $fecha_fin_vig = date('Y-m-d', strtotime(mysqli_real_escape_string($con,$_POST['fecha_fin_vig'])));

    
    // Datos del lugar
    $ubicacion = mysqli_real_escape_string($con, $_POST['ubicacion']);
    $descripcion = mysqli_real_escape_string($con, $_POST['descripcion']);
    $nombre_hospedaje = mysqli_real_escape_string($con, $_POST['nombre_hospedaje']);
    $contacto = mysqli_real_escape_string($con, $_POST['contacto']);
    $direccion = mysqli_real_escape_string($con, $_POST['direccion']);
    $estrellas = mysqli_real_escape_string($con, $_POST['estrellas']);
    $descripcion_hospedaje = mysqli_real_escape_string($con, $_POST['descripcion_hospedaje']);
    $pension = mysqli_real_escape_string($con, $_POST['pension']);
    
    // Datos del transporte
    $tipo_transporte = mysqli_real_escape_string($con, $_POST['tipo_transporte']);
    $clase = mysqli_real_escape_string($con, $_POST['clase']);
    $mascota= mysqli_real_escape_string($con, $_POST['mascota']);

    $precio = mysqli_real_escape_string($con, $_POST['precio']);

    if (isset($_POST["crear_paquete"])) {
        $disponibilidad = ($_POST['disponibilidad']);
        $fecha_inicio = $_POST['fecha_inicio'];
        $fecha_vigencia =  $_POST['fecha_vigencia'];
        $cantidad_personas =  $_POST['cantidad_personas'];
        $fecha_final =  $_POST['fecha_final'];
        $fecha_fin_vig = $_POST['fecha_fin_vig'];
        // Datos del lugar
        $ubicacion =  $_POST['ubicacion'];
        $descripcion =  $_POST['descripcion'];
        // Datos Hospedaje
        $nombre_hospedaje =  $_POST['nombre_hospedaje'];
        $contacto =  $_POST['contacto'];
        $direccion =  $_POST['direccion'];
        $estrellas =  $_POST['estrellas'];
        $descripcion_hospedaje = $_POST['descripcion_hospedaje'];
        $pension =  $_POST['pension'];
        // Datos del transporte
        $tipo_transporte =  $_POST['tipo_transporte'];
        $clase =  $_POST['clase'];
        $mascota= $_POST['mascota'];
        
        $precio= $_POST['precio'];
        $usuario_administrador_id_admin=001;
        // Insertar datos en las tablas
        $consulta1 = "INSERT INTO paquetes (disponibilidad, fecha_inicio, fecha_vigencia, cantidad_personas, fecha_final, fecha_fin_vig, precio, usuario_administrador_id_admin)
                    VALUES ('$disponibilidad', '$fecha_inicio', '$fecha_vigencia', '$cantidad_personas', '$fecha_final', '$fecha_fin_vig', '$precio', '$usuario_administrador_id_admin')";
        $resultado1 = mysqli_query($con, $consulta1);
        
        $paquete_id = mysqli_insert_id($con);

        $consulta2= "INSERT INTO lugares (ubicacion, descripcion)  VALUES ('$ubicacion', '$descripcion')";
        $resultado2 = mysqli_query($con, $consulta2);
        $id_lugares = mysqli_insert_id($con);
        
        $consulta3 = "INSERT INTO hospedaje (nombre_hospedaje, contacto, direccion, estrellas, descripcion_hospedaje, pension)
                      VALUES ( '$nombre_hospedaje', '$contacto', '$direccion', '$estrellas', '$descripcion_hospedaje', '$pension')";
        $resultado3 = mysqli_query($con, $consulta3);
        $id_hospedaje= mysqli_insert_id($con);
        
        
        $consulta4 = "INSERT INTO transporte (tipo_transporte, clase, mascota)
                      VALUES ('$tipo_transporte', '$clase', '$mascota')";
        $resultado4 = mysqli_query($con, $consulta4);
        
        $id_transporte = mysqli_insert_id($con);

        if ($resultado1 && $resultado2 && $resultado4) {
            $consulta4 = "INSERT INTO paquetes_has_destinos (paquetes_id_paquete, destinos_id_lugares, transporte_id_transporte)
                          VALUES ('$paquete_id', '$id_lugares', '$id_hospedaje')";
            $resultado4 = mysqli_query($con, $consulta4);
            
            if ($resultado4) {
                echo "El paquete se ha guardado correctamente.";
            } else {
                echo "Ha ocurrido un error al guardar el paquete.";
            }
        } else {
            echo "Ha ocurrido un error al guardar los datos.";
        }
    }
}
?>