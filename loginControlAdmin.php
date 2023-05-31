<?php
session_start(); // Iniciar la sesión
include ("conexion.php");
// login.php



// Verificar si ya se ha iniciado sesión
if (isset($_SESSION['usuario'])) {
    // El usuario ya está autenticado, redirigir a la página principal o a otro destino deseado
    header("Location: indexAdmin.php");
    exit();
}

// Verificar si se envió el formulario de inicio de sesión
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los valores ingresados en el formulario
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    // Realizar la consulta a la base de datos para verificar las credenciales
    $consulta = "SELECT p.id_usuario, p.correo, uc.password FROM personas AS p INNER JOIN usuario_administrador AS uc ON p.id_usuario = uc.personas_id_usuario where p.correo='$correo' and uc.password = '$password'";
    $resultado = mysqli_query($con, $consulta);

    if ($resultado && mysqli_num_rows($resultado) === 1) {
        // El usuario existe en la base de datos, verificar la contraseña
        $fila = mysqli_fetch_assoc($resultado);
        $hash = $fila['password'];

        if ($password === $hash) {
            // La contraseña es correcta, iniciar la sesión
            $_SESSION['usuario'] = $fila['id_usuario'];
            header("Location: indexAdmin.php");

            // Redirigir a la página principal o a otro destino deseado
        } else {
            // Contraseña incorrecta
            echo "Contraseña incorrecta";
        }
    } else {
        // Usuario no encontrado 
        ?>
        <h1 class="bad">¡Correo o contraseña incorrecta!</h1>
        <?php
    }
}

?>


