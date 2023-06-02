<?php
  include ("conexion.php");

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //CONTRATACION
    $id_paquete= $_POST["id_paquete"];
    //ID USUARIO
    //FECHA CONTRATACION FECHA ACTUAL
    //FECHA DE ALTA FECHA ACTUAL


    //DATOS PAGOS          
    $precio= $_POST["precio"];
    $cantidad_cuotas=$_POST["cantidad_cuota"];

    //PAGOS
    //MONTO_CUOTA= PRECIO/CANTIDADCUOTA
    //NUMERO_CUOTA
    //FECHA PAGO CUOTA FECHA ACTUAL
    //VENCIMIENTO FECHA 30 DIAS DESPUES

    //METODO_PAGO
    $metodo_pago=$_POST["metodo_pago"];

    //TARJETA
    $nombreTitular=$_POST["nombre_titular"];
    $numero_tarjeta=$_POST["numero_seguridad"];
    $fecha_vencimiento=$_POST["fecha_vencimiento"];
    $numero_seguridad=$_POST["numero_seguridad"];

    if (isset($_POST["comprar"])) {

        $consulta1 = "INSERT INTO contratacion () VALUES ()";



    }
    
  }













?>