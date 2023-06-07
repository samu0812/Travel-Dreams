<?php

include("conexion.php");


$parametro = $_SESSION['usuario'] ;
$query = "SELECT obtener_id_admin($parametro) AS id_obtenido";
$resultado = mysqli_query($con, $query);

if ($resultado) {
    // Procesa el resultado de la consulta
    $fila = mysqli_fetch_assoc($resultado);
    $idObtenido = $fila['id_obtenido'];

    // Utiliza el valor obtenido en tu aplicación
} else {
    echo "Error al ejecutar la consulta: " . mysqli_error($con);
    // Manejar el error adecuadamente en tu aplicación
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
        $escala= mysqli_real_escape_string($con, $_POST['escala']);

        $precio = mysqli_real_escape_string($con, $_POST['precio']);
        $timestamp_inicio = strtotime($fecha_inicio);
        $timestamp_final = strtotime($fecha_final);
        $timestamp_vigencia = strtotime($fecha_vigencia);
        $timestamp_fin_vig = strtotime($fecha_fin_vig);

        if ($timestamp_inicio < $timestamp_final and $timestamp_vigencia < $timestamp_fin_vig and $timestamp_vigencia< $timestamp_inicio and $timestamp_fin_vig< $timestamp_inicio ) {
            if (isset($_POST["crear_paquete"])) {
                // La validación de fechas es exitosa, puedes continuar con el resto del código
                // ...
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
                $escala = $_POST['escala'];
        
                $precio= $_POST['precio'];
                $usuario_administrador_id_admin=$idObtenido;
                // Insertar datos en las tablas
                $consulta1 = "INSERT INTO paquetes (disponibilidad, fecha_inicio, fecha_vigencia, cantidad_personas, fecha_final, fecha_fin_vig, precio, usuario_administrador_id_admin)
                        VALUES ('$disponibilidad', '$fecha_inicio', '$fecha_vigencia', '$cantidad_personas', '$fecha_final', '$fecha_fin_vig', '$precio', '$usuario_administrador_id_admin')";
                $resultado1 = mysqli_query($con, $consulta1);
        
                $paquete_id = mysqli_insert_id($con);

                $consulta2= "INSERT INTO lugares (ubicacion, descripcion)  VALUES ('$ubicacion', '$descripcion')";
                $resultado2 = mysqli_query($con, $consulta2);
                $lugares_id_lugares = mysqli_insert_id($con);
        
                $consulta3 = "INSERT INTO hospedaje (nombre_hospedaje, contacto, direccion, estrellas, descripcion_hospedaje, pension, lugares_id_lugares)
                        VALUES ( '$nombre_hospedaje', '$contacto', '$direccion', '$estrellas', '$descripcion_hospedaje', '$pension', '$lugares_id_lugares')";
                $resultado3 = mysqli_query($con, $consulta3);
                $id_hospedaje= mysqli_insert_id($con);
        
        
                $consulta4 = "INSERT INTO transporte (tipo_transporte, clase, mascota, escala)
                          VALUES ('$tipo_transporte', '$clase', '$mascota', '$escala')";
                $resultado4 = mysqli_query($con, $consulta4);
        
                $id_transporte = mysqli_insert_id($con);

                if ($resultado1 && $resultado2 && $resultado4) {
                    //guarda en paquete has destinos, necesita los id's que estan en otras tablas que se obtienen con el mysqli insert id
                    $consulta4 = "INSERT INTO paquetes_has_destinos (paquetes_id_paquete, destinos_id_lugares, transporte_id_transporte)
                              VALUES ('$paquete_id', '$lugares_id_lugares', '$id_hospedaje')";
                    $resultado4 = mysqli_query($con, $consulta4);
                    if ($tipo_transporte= 'Avión'){
                        $consulta5 = "INSERT INTO vuelos (transporte_id_transporte) VALUES ('$id_transporte')";
                        $resultado5 = mysqli_query($con, $consulta5);
                    }
                    if($tipo_transporte= 'Colectivo'){
                        $consulta6 = "INSERT INTO colectivo (transporte_id_transporte) VALUES ('$id_transporte')";
                        $resultado6 = mysqli_query($con, $consulta6);
                        echo "El coelctivo.";}
            
                    if ($resultado4) {
                        echo "El paquete se ha guardado correctamente.";
                    } else {
                        echo "Ha ocurrido un error al guardar el paquete.";
                    }
                } else {
                        echo "Ha ocurrido un error al guardar los datos.";
                    }
            

            }
        }else {
                ?>
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                        <div>
                            ¡Por favor verifique las fechas!
                        </div>
                    </div>
                <?php
             }

            
    
}
    
    

?>