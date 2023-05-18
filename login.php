<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Form Design One | Fazt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/master.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8c68749bc1.js" crossorigin="anonymous"></script>
  </head>
  <body>
    	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Travel Dreams</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">Acerca de</a></li>
	          <li class="nav-item"><a href="mis_viajes.php" class="nav-link">Mis Viajes</a></li>
	          <li class="nav-item"><a href="paquetes.php" class="nav-link">Paquetes</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contactanos</a></li>
            <li class="nav-item activate"><a href="login.php" class="nav-link">Login</a></li>
			      <li class="nav-item"><a href="registro.php" class="nav-link">Registrarse</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <div class="login-box">
      <img src="images/login.png" class="avatar" alt="Avatar Image">
      <h1>Login</h1>
      <form action="" method="post">
        <!-- USERNAME INPUT -->
        <label for="username">Correo</label>
        <input type="email" class="form-control" id="inputEmail4" style="background-color:white;" name="correo" >
        <!-- PASSWORD INPUT -->
        <label for="password">Contraseña</label>
        <input type="password" class="form-control" id="inputPassword4" name= "password">
        <input type="submit" value="Log In">
        <a href="recuperar_contraseña.php">Olvidaste tu contraseña?</a><br>
        <a href="registro.php">No tienes una cuenta?</a>
      </form>
      <?php
        include ("loginControl.php")
      ?>
    </div>
  </body>
</html> 