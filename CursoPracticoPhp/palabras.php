<?php

$palabras = array("sol","luna","cielo","luz","estrella","lluvia");



$form="<form action='analisis.php'>";


for($i=0; $i<6; $i++){
    $form.="la palabra: ".str_shuffle($palabras[$i])." "."<input type='text' name='palabra".$i."'>"."<br>";
}


$button = "<button type = 'submit'>Enviar</button>";
$formCierre ="</form>";


echo $form.$button.$formCierre;


?>

