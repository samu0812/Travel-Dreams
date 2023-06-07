<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/registro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8c68749bc1.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">

    <title>Registro Administrador</title>
</head>
<body  class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');">
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php">Travel Dreams</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="indexAdmin.php" class="nav-link">Home</a></li>
          <li class="nav-item activate"><a href="loginAdmin.php" class="nav-link">Login</a></li>
          <li class="nav-item"><a href="registroAdmin.php" class="nav-link">Registrarse</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="regis-box"></div>
    <form class="form" action="" method="POST">
      
        <h1 class="title">Registro Admin</h1>
        <span class="sub mb"> Ingrese sus Datos</span>
        <input id="file" type="file">
       <i class="fa-solid fa-person-circle-plus fa-bounce fa-2xl" style="color: #4b37e1;" id="logo"></i>
  
        <div name="datos">
          <input type="email" class="input" placeholder="correo" name="correo">
          <input type="password" class="input" placeholder="password" name="password"> 
          <input type="text" class="input" placeholder="Nombre" name="nombre">
          <input type="text" class="input" placeholder="Apellido" name="apellido">
          <input type="int" class="input" placeholder="DNI" name="dni">
          <input type="text" class="input" placeholder="Dirección" name="direccion">
          <input type="date" class="input" placeholder="Fecha Nacimiento" name="fecha_nacimiento">
          <input type="tel" class="input" placeholder="Nro Teléfono" name="telefono">
        </div>
        <div class="suscrip">
          <span class="sub">¿Ya Tienes Una Cuenta? <a href="login.php">Ingresa</a></span>
          <button type="submit" value="registroAdmin" class="btn btn-outline-secondary" name="registroAdmin">Registrarme</button>
        </div>
      </form>
      <?php
  include("control-registroAdmin.php");
  ?>
</body>
</html>