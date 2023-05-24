<?php
include("conexion.php");
if ($con){
    echo "Se ha conectado correctamente";
}else {
    echo "Ha ocurrido un error";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fecha_nacimiento = date('Y-m-d',strtotime(mysqli_real_escape_string($con,$_POST['fecha_nacimiento'])));
    $direccion = mysqli_real_escape_string($con,$_POST['direccion']);
    $telefono = mysqli_real_escape_string($con,$_POST['telefono']);
    $email = mysqli_real_escape_string($con,$_POST['correo']);
    $nombre = mysqli_real_escape_string($con,$_POST['nombre']);
    $apellido = mysqli_real_escape_string($con,$_POST['apellido']);
    $dni = mysqli_real_escape_string($con,$_POST['dni']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    }



    if (isset($_POST["registro"])) {
        $email = $_POST["correo"];
        $dni = $_POST["dni"];
    
        // Validar que correo y DNI no existan en la base de datos
        $validar = "SELECT * FROM personas WHERE correo='$email' OR dni='$dni'";
        $result = mysqli_query($con, $validar);
    
        if (mysqli_num_rows($result) > 0) {
            // El usuario ya existe
            ?>
            <h3 class="na">¡El usuario ya existe en la base de datos!</h3>
            <?php
        } else {
            // Insertar nuevo usuario
            $fecha_nacimiento = $_POST["fecha_nacimiento"];
            $direccion = $_POST["direccion"];
            $telefono = $_POST["telefono"];
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
    
            $consulta1 = "INSERT INTO personas (fecha_nacimiento, direccion, telefono, correo, nombre, apellido, dni) VALUES ('$fecha_nacimiento', '$direccion', '$telefono', '$email', '$nombre', '$apellido', '$dni')";
            $resultado1 = mysqli_query($con, $consulta1);
            $personas_id_usuario= mysqli_insert_id($con);
            $consulta2= "INSERT INTO usuario_cliente(personas_id_usuario,password) VALUES ('$personas_id_usuario','$password')";
            $resultado2 = mysqli_query($con,$consulta2);
            
    
            if ($resultado1 and $resultado2) {
                // Usuario registrado correctamente
                header("Location: index.php"); // Redirigir a la página de inicio
                exit();
            } else {
                // Error al registrar el usuario
                ?>
                <h3 class="bad">¡ha ocurrido un error!</h3>
                <?php
            }
        }
    }
    
    
