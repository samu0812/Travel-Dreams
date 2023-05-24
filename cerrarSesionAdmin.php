<?php
session_start();
// Destruir la sesión
session_destroy();
// Redirigir a la página principal o a otro destino deseado
header("Location:indexAdmin.php");
exit();
?>