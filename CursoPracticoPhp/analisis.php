<?php

//print_r($_REQUEST);

$palabras = array("sol","luna","cielo","luz","estrella","lluvia");

echo "<br>";

for($i=0; $i<count($palabras); $i++){
   if($_REQUEST["palabra".$i] == $palabras[$i]){
      echo "La palabra ingresada es correcta"."<br>";
   }else{
      echo "la palabra ingresada es incorrecta. la palabra correcta es". $palabras[$i]."<br>";
   }
}


?>