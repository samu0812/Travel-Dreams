<?php
   session_start()
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Adventure - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Domine:wght@600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8c68749bc1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,0,200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./css/crearPaquete.css">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Travel Dreams</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
		  <!-- Navbar Parte superior del sitio web -->
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="indexAdmin.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="acercaAdmin.php" class="nav-link">Acerca de</a></li> <!-- Descripción de la empresa-->
            <li class="nav-item"><a href="viajesAdmin.php" class="nav-link">Viajes</a></li>
	          <li class="nav-item"><a href="paquetesAdmin.php" class="nav-link">Paquetes</a></li> <!-- Provincias y descripcion de c/u -->
	          <li class="nav-item active"><a href="crearPaquete.php" class="nav-link">Crear Paquete</a></li><!-- Paquetes con transporte, hospedaja-->
			  <!-- Eliminar blog -->

			  <li class="nav-item">
    		<?php
        		if(isset($_SESSION['usuario'])) {
            		echo '<a href="cerrarSesion.php" class="nav-link">Cerrar sesión</a>';
                $id_admin = $_SESSION['usuario'];

        		} else {
            			echo '<li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>';
						      echo '<li class="nav-item"><a href="registro.php" class="nav-link">Registrarse</a></li>';

       				 }
    		?>
			</li>
  				
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span>Crear Paquete</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Crear Paquete</h1>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container">
		<form class="form" action="" method="POST">
    <h1>Crear Paquete <span class="material-symbols-outlined">library_add</span></h1>
    
    <div class="datosPaquete">
    <h2>Datos del Paquete <span class="material-symbols-outlined">package</span></h2>
			<div class="row">
				<div class="col-md-6">
					<div class="mb-3">
						<label for="disponibilidad" class="form-label">Disponibilidad</label>
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input type="text" class="form-control" id="disponibilidad" name="disponibilidad" required>
					</div>
          <div class="mb-3">
						<label for="fechaInicio" class="form-label">Fecha de Inicio</label>
						<input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" required>
					</div>
          <div class="mb-3">
						<label for="fechaVigencia" class="form-label">Fecha de Vigencia</label>
						<input type="date" class="form-control" id="fecha_vigencia" name="fecha_vigencia" required>
					</div>

				</div>
				<div class="col-md-6">
					<div class="mb-3">
						<label for="cantidadPersonas" class="form-label">Cantidad de Personas </label>
						<input type="number" class="form-control" id="cantidad_personas" name="cantidad_personas" required>
					</div>
    
					<div class="mb-3">
						<label for="fechaFinal" class="form-label">Fecha Final</label>
						<input type="date" class="form-control" id="fecha_final" name="fecha_final" required>
					</div>

					<div class="mb-3">
						<label for="fecha_fin_vig" class="form-label">Fecha Final de Vigencia</label>
						<input type="date" class="form-control" id="fecha_fin_vig" name="fecha_fin_vig" required>
					</div>
				</div>
			</div>
      </div>
      <div class="datosLugar">
      <h2>Datos del Lugar <span class="material-symbols-outlined">location_on</span></h2>
      <label for="lugar" class="form-label">Lugar</label>
						<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"required name="ubicacion">
              <option selected>Lugar</option>
              <option value="Formosa">Formosa</option>
              <option value="Salta">Salta</option>
              <option value="Jujuy">Jujuy</option>
              <option value="Tucumán">Tucumán</option>
              <option value="La Rioja">La Rioja</option>
              <option value="Catamarca">Catamarca</option>
              <option value="Misiones">Misiones</option>
              <option value="Córdoba">Córdoba</option>
              <option value="Corrientes">Corrientes</option>
              <option value="Chaco">Chaco</option>
              <option value="Santa Fe">Santa Fe</option>
              <option value="Chubut">Chubut</option>
              <option value="Mendoza">Mendoza</option>
              <option value="Santiago del Estero">Santiago del Estero</option>
              <option value="San Juan">San Juan</option>
              <option value="San Luis">San Luis</option>
              <option value="Tierra del Fuego">Tierra del Fuego</option>
              <option value="La Pampa">La Pampa</option>
              <option value="Entre Ríos">Entre Ríos</option>
              <option value="Santa Cruz">Santa Cruz</option>
              <option value="Neuquén">Neuquén</option>
              <option value="Río Negro">Río Negro</option>
            </select>
      <div class="form-floating">

        <textarea class="form-control" placeholder="Describe los lugares del paquete..." id="exampleFormControlTextarea1" style="height: 100px" name=descripcion></textarea>
        <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
      </div>
      </div>
      <div class="datosHospedaje">
        <h2>Datos del Hospedaje <span class="material-symbols-outlined">apartment</span></h2>
			  <div class="row">
				  <div class="col-md-6">
					  <div class="mb-3">
						  <label for="nombre_hospedaje" class="form-label">Nombre del Hospedaje</label>
						  <input type="text" class="form-control" id="nombre_hospedaje" name="nombre_hospedaje" required>
					</div>
          <div class="mb-3">
						<label for="contactoHospedaje" class="form-label">Contacto</label>
						<input type="tel" class="form-control" id="contacto" name="contacto" required>
					</div>
				  </div>
				<div class="col-md-6">
					<div class="mb-3">
						<label for="direccion" class="form-label">Dirección</label>
						<input type="text" class="form-control" id="direccion" name="direccion" required>
					</div>
    
					<div class="mb-3">
						<label for="estrellas" class="form-label">Estrellas</label>
						<input type="number" class="form-control" id="estrellas" name="estrellas" required>
					</div>
				</div>
        </div>
    <div class="form-floating">

      <textarea class="form-control" placeholder="Describe el Hospedaje..." id="floatingTextarea2" style="height: 100px" required name="descripcion_hospedaje"></textarea>
      <label for="floatingTextarea2">Descripción</label>
    </div>
      </div class="pension">
        <label for="pension" class="form-label">Pension</label>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="pension" id="flexRadioDefault1" value="SI">
        <label class="form-check-label" for="flexRadioDefault1">
          SI
        </label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="pension" id="flexRadioDefault2" value="NO"checked>
        <label class="form-check-label" for="flexRadioDefault2">
          NO
      </label>
      </div>
      <h2>Datos del Transporte <span class="material-symbols-outlined">flight_takeoff</span></h2>
      <div class= 'datosTransporte'>
			<div class="row">
				<div class="col-md-6">
					<div class="mb-3">
          <label for="transporte" class="form-label">Transporte</label>
						<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"required name= "tipo_transporte">
              <option selected>Transporte</option>
              <option value="Avión">Avión</option>
              <option value="Colectivo">Colectivo</option>
            </select>
					</div>

				</div>
				<div class="col-md-6">
					<div class="mb-3">
          <label for="clase" class="form-label">Clase</label>
						<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"required name="clase">
              <option selected>Clase</option>
              <option value="Vip">Vip</option>
              <option value="Económica">Economica</option>
              <option value="Turista">Turista</option>
            </select>
					</div>
      </div>
        <div class="col-md-6">
					<div class="mb-3">
            <div class="mascota">
              <label for="mascota" class="form-label">Mascota</label>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="mascota" id="flexRadioDefault3" required value='SI'>
                <label class="form-check-label" for="flexRadioDefault3">
                  SI
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="mascota" id="flexRadioDefault4" required value='NO' checked>
                <label class="form-check-label" for="flexRadioDefault4">
                NO
                </label>

				  </div>
          <div class="col-md-6">
					<div class="mb-3">
            <div class="escala">
              <label for="escala" class="form-label">Escala</label>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="escala" id="flexRadioDefault3" required value='SI'>
                <label class="form-check-label" for="flexRadioDefault3">
                  SI
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="escala" id="flexRadioDefault4" required value='NO' checked>
                <label class="form-check-label" for="flexRadioDefault4">
                NO
                </label>

				  </div>
        </div>
      <label>Precio del Paquete</label>
      <div class="input-group mb-3">
        <span class="input-group-text">$</span>
        <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" required name='precio'>
        </div>
      </div>
			<button type="submit" value="crear_paquete" class="btn btn-outline-secondary" name="crear_paquete">Crear Paquete</button>
		</form>
	</div>
  <?php
  include("controlPaquete.php");
  ?>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>