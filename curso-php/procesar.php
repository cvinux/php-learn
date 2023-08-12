<?php
 /* if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar si la variable  ha sido enviada
    if (isset($_POST['cantidad'])) {
      $cantidad = $_POST['cantidad'];
      
      $horas = (int)($cantidad / 3600);

      $resto1 = $cantidad % 3600;

      $minutos = (int)($resto1 / 60);

      $resto2 = $resto1 % 60;

      $segundos = $resto2;

      $cadena= $horas." H:".$minutos." M:".$segundos." S";

      ob_start();
      eval($cadena);

      $resultado = ob_get_clean();

      echo $resultado;

    } else {
      echo "La variable 'cantidad' no fue enviada";
    }
  }*/

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar si la variable 'nombre' ha sido enviada
    if (isset($_POST['nombre'])) {
      $nombre = $_POST['nombre'];
  
      // Realizar la lógica de consulta con el nombre recibido
      // En este ejemplo, simplemente se devuelve un mensaje con el nombre
      $mensaje = "Consulta realizada para el nombre: " . $nombre;
      echo $mensaje;
    }
  }


?>
