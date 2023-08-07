<?php

//conexion a la base de datos

$servidor = "localhost"; //127.0.01
$base = "app";
$usuario = "root";
$pass = "231006";

try{
   $conexion = new PDO("mysql:host=$servidor; dbname=$base",$usuario,$pass);
}catch(Exception $ex){
   echo $ex->getMessage();
}

?>