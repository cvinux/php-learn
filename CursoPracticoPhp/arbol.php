<?php

$numero=$_GET["numero"];


for($i =1; $i<=$numero; $i++){
   
   for($j =1; $j<=$i; $j++){
      echo "*";
   }

   echo "<br>";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Formulario</title>
</head>
<body>

   <form action="arbol.php" method="get">
      <input type="text" name="numero">
      <button type="submit">Enviar</button>
   </form>
   
</body>
</html>