<?php
include("conexion.php");
if ($con){
    echo "Se ha conectado correctamente";
}else {
    echo "Ha ocurrido un error";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['fecha_nacimiento']) && !empty($_POST['direccion']) && !empty($_POST['telefono']) && !empty($_POST['correo']) && !empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['dni']) && !empty($_POST['password'])){
        $fecha_nacimiento = date('Y-m-d',strtotime(mysqli_real_escape_string($con,$_POST['fecha_nacimiento'])));
        $direccion = mysqli_real_escape_string($con,$_POST['direccion']);
        $telefono = mysqli_real_escape_string($con,$_POST['telefono']);

        $correo = mysqli_real_escape_string($con, $_POST['correo']);
        $nombre = mysqli_real_escape_string($con,$_POST['nombre']);
        $apellido = mysqli_real_escape_string($con,$_POST['apellido']);
        $dni = mysqli_real_escape_string($con,$_POST['dni']);
        $password = mysqli_real_escape_string($con,$_POST['password']);
    
        if (isset($_POST["registroAdmin"])) {
            $correo = $_POST["correo"];
            $dni = $_POST["dni"];
    
            // Validar que correo y DNI no existan en la base de datos
            $validar = "SELECT * FROM personas WHERE correo='$correo' OR dni='$dni'";
            $result = mysqli_query($con, $validar);
    
            if (mysqli_num_rows($result) > 0) {
                // El usuario ya existe
                ?>
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                    <div>
                        ¡El usuario ya existe!
                    </div>
                </div>
                <?php
            }else {
                // Insertar nuevo usuario
                $fecha_nacimiento = $_POST["fecha_nacimiento"];
                $direccion = $_POST["direccion"];
                $telefono = $_POST["telefono"];
                $nombre = $_POST["nombre"];
                $apellido = $_POST["apellido"];
    
                $consulta1 = "INSERT INTO personas (fecha_nacimiento, direccion, telefono, correo, nombre, apellido, dni) VALUES ('$fecha_nacimiento', '$direccion', '$telefono', '$correo', '$nombre', '$apellido', '$dni')";
                $resultado1 = mysqli_query($con, $consulta1);
                $personas_id_usuario= mysqli_insert_id($con);

                $consulta2= "INSERT INTO usuario_administrador(personas_id_usuario,password) VALUES ('$personas_id_usuario','$password')";
                $resultado2 = mysqli_query($con, $consulta2);
                echo $resultado2;
            
    
                if ($resultado1 and $resultado2) {
                    // Usuario registrado correctamente
                    header("Location: indexAdmin.php"); // Redirigir a la página de inicio
                    exit();
                } else {
                    // Error al registrar el usuario
                    ?>
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                    <div>
                        ¡Ha ocurrido un error!
                    </div>
                </div>
                    <?php
                }
            }
        }
    }else{
        ?>
            <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                    <div>
                        ¡Por favor complete todos los campos!
                    </div>
                </div>
        <?php
    }
    
}   
    