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

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="indexAdmin.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="acercaAdmin.php" class="nav-link">Acerca de</a></li>
	          <li class="nav-item"><a href="viajesAdmin.php" class="nav-link">Viajes</a></li>
	          <li class="nav-item"><a href="paquetesAdmin.php" class="nav-link">Paquetes</a></li>>
            <li class="nav-item active"><a href="crearPaquete.php" class="nav-link">Crear Paquete</a></li>
	          <li class="nav-item "><a href="contactAdmin.php" class="nav-link">Contacto</a></li>
            <li class="nav-item"><a href="loginAdmin.php" class="nav-link">Login</a></li>
			    <li class="nav-item"><a href="registroAdmin.php" class="nav-link">Registrarse</a></li>
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
		<form>
    <h1>Crear Paquete <i class="fa-regular fa-square-plus fa-beat"></i></h1>
    
    <div class="datosPaquete">
    <h2>Datos del Paquete</h2>
			<div class="row">
				<div class="col-md-6">
					<div class="mb-3">
						<label for="disponibilidad" class="form-label">Disponibilidad</label>
						<input type="text" class="form-control" id="disponibilidad" name="disponibilidad" required>
					</div>
          <div class="mb-3">
						<label for="fechaInicio" class="form-label">Fecha de Inicio</label>
						<input type="date" class="form-control" id="fechaInicio" name="fechaInicio" required>
					</div>
          <div class="mb-3">
						<label for="fechaVigencia" class="form-label">Fecha de Vigencia</label>
						<input type="date" class="form-control" id="fechaVigencia" name="fechaVigencia" required>
					</div>

				</div>
				<div class="col-md-6">
					<div class="mb-3">
						<label for="cantidadPersonas" class="form-label">Cantidad de Personas</label>
						<input type="number" class="form-control" id="cantidadPersonas" name="cantidadPersonas" required>
					</div>
    
					<div class="mb-3">
						<label for="fechaFinal" class="form-label">Fecha Final</label>
						<input type="date" class="form-control" id="fechaFinal" name="fechaFinal" required>
					</div>

					<div class="mb-3">
						<label for="fechaFinalVigencia" class="form-label">Fecha Final de Vigencia</label>
						<input type="date" class="form-control" id="fechaFinalVigencia" name="fechaFinalVigencia" required>
					</div>
				</div>
			</div>
      </div>
      <div class="datosLugar">
      <h2>Datos del Lugar</h2>
      <label for="lugar" class="form-label">Lugar</label>
						<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"required>
              <option selected>Lugar</option>
              <option value="1">Formosa</option>
              <option value="2">Salta</option>
              <option value="3">Buenos Aires</option>
            </select>
      <div class="form-floating">
        <label for="floatingTextarea2">Descripción</label>
        <textarea class="form-control" placeholder="Describe los lugares del paquete..." id="floatingTextarea2" style="height: 100px"></textarea>
      </div>
      </div>
      <div class="datosHospedaje">
    <h2>Datos del Hospedaje</h2>
			<div class="row">
				<div class="col-md-6">
					<div class="mb-3">
						<label for="nombreHospedaje" class="form-label">Nombre del Hospedaje</label>
						<input type="text" class="form-control" id="nombreHospedaje" name="nombreHospedaje" required>
					</div>
          <div class="mb-3">
						<label for="contactoHospedaje" class="form-label">Contacto</label>
						<input type="number" class="form-control" id="contactoHospedaje" name="contactoHospedaje" required>
					</div>
				</div>
				<div class="col-md-6">
					<div class="mb-3">
						<label for="direccion" class="form-label">Dirección</label>
						<input type="text" class="form-control" id="cantidadPersonas" name="text" required>
					</div>
    
					<div class="mb-3">
						<label for="estrellas" class="form-label">Estrellas</label>
						<input type="number" class="form-control" id="estrellas" name="estrellas" required>
					</div>
				</div>
        </div>
    <div class="form-floating">
      <label for="floatingTextarea2">Descripción</label>
      <textarea class="form-control" placeholder="Describe el Hospedaje..." id="floatingTextarea2" style="height: 100px"></textarea>
    </div>
      </div class="pension">
        <label for="pension" class="form-label">Pension</label>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
          SI
        </label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
          NO
      </label>
      </div>
      <h2>Datos del Transporte</h2>
      <div class= 'datosTransporte'>
			<div class="row">
				<div class="col-md-6">
					<div class="mb-3">
          <label for="transporte" class="form-label">Transporte</label>
						<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"required>
              <option selected>Transporte</option>
              <option value="1">Avión</option>
              <option value="2">Colectivo</option>
            </select>
					</div>

				</div>
				<div class="col-md-6">
					<div class="mb-3">
          <label for="clase" class="form-label">Clase</label>
						<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"required>
              <option selected>Clase</option>
              <option value="1">Vip</option>
              <option value="2">Economica</option>
              <option value="3">Turista</option>
            </select>
					</div>
      </div>
        <div class="col-md-6">
					  <div class="mb-3">
            <div class="mascota">
          <label for="mascota" class="form-label">Mascota</label>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault3">
          <label class="form-check-label" for="flexRadioDefault3">
            SI
          </label>
        </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault4" checked>
        <label class="form-check-label" for="flexRadioDefault4">
          NO
      </label>

					</div>
      </div>
     
      </div>
			<button type="submit" class="btn btn-primary">Guardar Paquete</button>
		</form>
	</div>



   
    
  

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