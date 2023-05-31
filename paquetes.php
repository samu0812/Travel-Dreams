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
	<link rel="stylesheet" href="css/paquete.css">
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
	          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="acerca.php" class="nav-link">Acerca de</a></li> <!-- Descripción de la empresa-->
	          <li class="nav-item"><a href="mis_viajes.php" class="nav-link">Mis viajes</a></li> <!-- Provincias y descripcion de c/u -->
	          <li class="nav-item active"><a href="paquetes.php" class="nav-link">Paquetes</a></li><!-- Paquetes con transporte, hospedaja-->
			  <!-- Eliminar blog -->
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contactanos</a></li>
			  <li class="nav-item">
    		<?php
        		if(isset($_SESSION['usuario'])) {
            		echo '<a href="cerrarSesion.php" class="nav-link">Cerrar sesión</a>';
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
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span>Paquetes</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Paquetes</h1>
          </div>
        </div>
      </div>
    </div>
		
		<section class="ftco-section">
      <div class="container" name='paquete_cliente'>
          	<div class="row">
								<?php
									include ("conexion.php");
									$sql = "SELECT id_paquete, disponibilidad, cantidad_personas, precio, fecha_inicio, fecha_final, ubicacion, descripcion, nombre_hospedaje, direccion, pension, descripcion_hospedaje, estrellas, contacto, clase, escala, mascota, tipo_transporte FROM paquete_cliente";
									$result = $con->query($sql);

									while($row = $result->fetch_assoc()) {
										$id_paquete = $row["id_paquete"];
										$disponibilidad = $row["disponibilidad"];
										$cantidad_personas = $row["cantidad_personas"];
										$precio = $row["precio"];
										$fecha_inicio = $row["fecha_inicio"];
										$fecha_final = $row["fecha_final"];
										$ubicacion = $row["ubicacion"];
										$descripcion = $row["descripcion"];
										$nombre_hospedaje = $row["nombre_hospedaje"];
										$direccion = $row["direccion"];
										$pension = $row["pension"];
										$descripcion_hospedaje = $row["descripcion_hospedaje"];
										$estrellas = $row["estrellas"];
										$contacto = $row["contacto"];
										$clase = $row["clase"];
										$escala = $row["escala"];
										$mascota = $row["mascota"];
										$tipo_transporte = $row["tipo_transporte"];
										
										// Generar el HTML utilizando los datos de la vista
										echo '<div class="container" id="paquete">';
										echo '<div class="one">';
										echo '<h3><a href="#">' . $ubicacion . '</a></h3>';
										echo '<p class="rate">';
										echo '<span>' . $estrellas . ' estrellas</span>';
										echo '</p>';
										echo '</div>';
										echo '<div class="two">';
										echo '<span class="price per-price">Precio$' . $precio . '<br><small>' . $cantidad_personas . ' personas</small></span>';
										echo '</div>';
										echo '<p>Disponibilidad: ' . $disponibilidad . '</p>';
										echo '<p>Fecha de inicio: ' . $fecha_inicio . '</p>';
										echo '<p>Fecha de fin: ' . $fecha_final . '</p>';
										echo '<p>' . $descripcion . '</p>';
										echo '<p>Nombre del hospedaje: ' . $nombre_hospedaje . '</p>';
										echo '<p>Descripción del hospedaje: ' . $descripcion_hospedaje . '</p>';
										echo '<p>Dirección: ' . $direccion . '</p>';
										echo '<p>Pensión: ' . $pension . '</p>';
										echo '<p>Contacto: ' . $contacto . '</p>';
										echo '<p>Clase: ' . $clase . '</p>';
										echo '<p>Escala: ' . $escala . '</p>';
										echo '<p>Mascota: ' . $mascota . '</p>';
										echo '<p>Tipo de transporte: ' . $tipo_transporte . '</p>';
										echo '<hr>';
										echo '<p class="bottom-area d-flex">';
										echo '<span><i class="icon-map-o"></i> ' . $ubicacion . '</span>';
										echo '<span class="ml-auto"><a href="#">Book Now</a></span>';
										echo '</p>';
										echo '</div>';
										

									}

								?>

        </div>
      </div>
    </section> <!-- .section -->


    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Adventure</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">About Us</a></li>
                <li><a href="#" class="py-2 d-block">Online enquiry</a></li>
                <li><a href="#" class="py-2 d-block">Call Us</a></li>
                <li><a href="#" class="py-2 d-block">General enquiries</a></li>
                <li><a href="#" class="py-2 d-block">Booking Conditions</a></li>
                <li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
                <li><a href="#" class="py-2 d-block">Refund policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Experience</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Beach</a></li>
                <li><a href="#" class="py-2 d-block">Adventure</a></li>
                <li><a href="#" class="py-2 d-block">Wildlife</a></li>
                <li><a href="#" class="py-2 d-block">Honeymoon</a></li>
                <li><a href="#" class="py-2 d-block">Nature</a></li>
                <li><a href="#" class="py-2 d-block">Party</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

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