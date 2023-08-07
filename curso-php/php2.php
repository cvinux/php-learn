<?php 

#Segundo curso de PHP

  #variables
    #--------------------

    echo "<p>";
    echo "Arreglos <br>";
    echo "********* <br>";
    echo "<p>";

#$edades = [20,18,40]; //los arreglos en php se declaran como una variable pero con corchetes

$edades = array(20,18,40); //los arreglos en php se declaran como una variable pero con corchetes


echo "una de las edades que esta dentro es " . $edades[1];
echo nl2br("\n");


    #--------------------

    echo "<p>";
    echo "Arreglos Asociativos<br>";
    echo "******************** <br>";
    echo "<p>";

    $edades = array(
      "Carlos"=>20,
      "Mr. Michi" => 18,
      "Juan" => 40
    );

    echo "La edad de Mr. Michi es ". $edades["Mr. Michi" ];
    echo nl2br("\n");
    echo "<p>";

    $cafes = array(
      "Capuccino" => 50,
      "Latte" => 49,
      "Americano" => 70
    );

    echo "El precio del cafe americano es de: {$cafes["Americano"]}"; //para poner un valor de un arreglo en un echo con "" se tiene q poner entre llaves
    
    echo nl2br("\n");
    echo "<p>";
    
    $personas = array(
      "Carlos" => array(
        "edad" => 20,
        "apellido" => "Santana"
      ),

      "Mr. Michi" => array(
        "edad" => 10,
        "apellido" => "Fusi"
      ),

    );


    echo "la informacion de Mr. Michi es: ". $personas["Mr. Michi"]["edad"] ." y su apellido es: " .$personas["Mr. Michi"]["apellido"];


    echo nl2br("\n");
    echo "<p>";
    

      #--------------------

      echo "<p>";
      echo "Manipulacion de arreglos en PHP<br>";
      echo "******************************* <br>";
      echo "<p>";

      $edades = array(18,22,40,34);

      //count (cuenta cuantos elementos hay en un arreglo)

      echo count($edades);
      echo nl2br("\n");

      //array_push
      array_push($edades, 13);
      var_dump($edades);
      echo nl2br("\n");

      //is_array (revisa si es un arreglo o no)
      $estp_no_es_un_arreglo = "";

      var_dump(is_array($estp_no_es_un_arreglo));
      echo nl2br("\n");
      var_dump(is_array($edades));
      echo nl2br("\n");

      //explode
      $lista_de_frutas = "fresa,cereza,manzana";
      $lista_de_frutas_array = explode(",",$lista_de_frutas);

      var_dump($lista_de_frutas_array);
      echo nl2br("\n");

      //implode

      $nueva_lista_de_frutas_array = ["Fresa", "Pera", "Manzana"];
      $nueva_lista_de_frutas_cadena = implode(",",$nueva_lista_de_frutas_array);

      var_dump($nueva_lista_de_frutas_cadena);



      #--------------------

      echo "<p>";
      echo "If ELSE<br>";
      echo "******************************* <br>";
      echo "<p>";

      $asientos_disponibles = 4;

      if($asientos_disponibles>0){
          echo "Puedes ver la pelicula de spiderman";
      }else{
        echo "te toca espoilearte";
      }

      //si en el bloque if_else solo tienes una linea de código, puedes evitar poner las llaves {}

      echo nl2br("\n");


      #--------------------

      echo "<p>";
      echo "SWITCH<br>";
      echo "******************************* <br>";
      echo "<p>";

      $michi = 3;

      switch($michi){
        case 1:
          echo "su numero favorito es el 9";
          break;
        case 2:
          echo "su numero favorito es el 4";
          break;
        case 3:
          echo "su numero favorito es el 3";
          break;
        case 4:
          echo "su numero favorito es el 9";
          break;
        case 5:
          echo "su numero favorito es el 1";
          break;
        default:
        echo "Esa opcion no existe :x";
      }



      #--------------------

      echo "<p>";
      echo "While<br>";
      echo "******************************* <br>";
      echo "<p>";

      $contador = 0;

      while($contador<10){
        echo "Actualmente estamos en al iteracion $contador";
        echo nl2br("\n");
        $contador++;

      }


      echo "<p>";
      echo "Do While<br>";
      echo "******************************* <br>";
      echo "<p>";



      do{

        echo "Esto es un do while";

      } while(false);


      echo "<p>";
      echo "For<br>";
      echo "******************************* <br>";
      echo "<p>";

      for($contador=0; $contador <10; $contador++){
        //escribir todo nuestro codigo
        echo $contador;
        echo nl2br("\n");
      }
      echo nl2br("\n");

      echo "<p>";
      echo "Nuevo for<br>";
      echo "******************************* <br>";
      echo "<p>";

      for($i=0, $j=0; $i <10; $i++, $j+=2){
        //escribir todo nuestro codigo
        echo "i=$i j=$j";
        echo nl2br("\n");
      }
      echo nl2br("\n");




      echo "<p>";
      echo "FOREACH<br>";
      echo "******************************* <br>";
      echo "<p>";

      #foreach($iterable as $valor){
        #Codigo a repetir
      #}

      #foreach($iterable as $llave => $valor){
        #Codigo a repetir
      #}


      $tienda_de_cafes = array (
        "Americano" => 20,
        "Latte" => 25,
        "Recalentado" => 10,
        "Capuccino" => 27.5,
        "Mocca" => 24
      );


      foreach($tienda_de_cafes as $cafe => $price){
        echo "El café $cafe cuesta $$price USD";
        echo nl2br("\n");
      }

      echo nl2br("\n");


      #Ejemplo de break

      foreach($tienda_de_cafes as $cafe => $price){
        echo "Actualmente encontre al cafe $cafe";
        echo nl2br("\n");
        if($cafe=="Latte"){
          echo "Encontramos a Latte";
          echo nl2br("\n");
          break;
          
        }
      }

      echo "<p>";

        #Ejemplo de continue

      foreach($tienda_de_cafes as $cafe => $price){
        if($cafe=="Recalentado"){
          continue;
        }
        echo "El café $cafe es muy rico!";
        echo nl2br("\n");
        
      }

      echo "<p>";

      #Algoritmo fibonacci

      echo "<p>";
      echo "Fibonacci<br>";
      echo "******************************* <br>";
      echo "<p>";

      $fibonacci = 0;
      $numero=1;
      $ciclos = 10;

      echo $fibonacci.'<br>';

      for($i=0; $i<10; $i++){

        $temp = $fibonacci;
        $fibonacci = $numero;
        $numero = $temp + $fibonacci;

        echo $i.' -> '.$fibonacci.'<br>';

      }


      echo "<p>";
      echo "Funciones<br>";
      echo "******************************* <br>";
      echo "<p>";


  function get_pokemon(){

    $numero_aleatorio = rand(1,5);
    
    switch ($numero_aleatorio){
      case 1:
        echo "Pikachu";
        break;
      case 2:
        echo "Charmander";
        break;
      case 3:
         echo "Newtwo";
         break;  
      default:
        echo "Lo siento no hay poquemon para ti :c";

    }

  } #end_function

  get_pokemon();

  echo "<p>";



    echo "<p>";
    echo "Funciones con parametros<br>";
    echo "******************************* <br>";
    echo "<p>";

  function estudiante_legend($platzi_rank){
    if($platzi_rank>=20000){
      echo"¡Eres un estudiante legend!"."<br>";
    }else{
      echo "Lo sentimos, aun no alcanzas el nivel legend"."<br>";
    }
  }

  estudiante_legend(100000);



   echo "<p>";
    echo "Profundizando en funciones con parametros<br>";
    echo "******************************* <br>";
    echo "<p>";

    echo "aplicando parametros con valores por defecto<br>";

    function suma($a=0, $b=0){ //si inicializamos los valores de un parametro, en caso no ingresemos uno de los valores, tomará el valor del paramatro designado
      echo "la suma de $a + $b es: ". $a+$b."<br>";
    }

  suma(5);

echo "<p>";

#unpacking de arreglos
echo "aplicando unpacking de valores de un arreglo<br>";

$arreglo1 = [1,2,3];
$arreglo2 = [4,5,6];

$resultado = [...$arreglo1,...$arreglo2];

var_dump($resultado);


echo "<p>";
echo "+++ejemplo unpacking++<br>";
echo "<p>";

function suma2($a=0, $b=0){ //si inicializamos los valores de un parametro, en caso no ingresemos uno de los valores, tomará el valor del paramatro designado
  echo "la suma de $a + $b es: ". $a+$b."<br>";
}


$numeros=[1,2];

suma(...$numeros);

echo "<p>";
echo "+++ejemplo suma infinita++<br>";
echo "<p>";


function suma_infinita(...$params){ 
  $suma=0;

  foreach($params as $numero){
    $suma += $numero;
  }

  echo "La sumatoria es: $suma "."<br>";

}


suma_infinita(1,2,3,4,5,6);



echo "<p>";
echo "Return<br>";
echo "******************************* <br>";
echo "<p>";


function freddy(){

    $numero_aleatorio=rand(1,4);
    $frase_de_freddy="";

    switch($numero_aleatorio){
      case 1:
        $frase_de_freddy= "Nunca pares de aprender"."<br>";
        break;
      case 2:
        $frase_de_freddy= "Las empresas no son familia"."<br>";
        break;
      case 3:
        $frase_de_freddy= "La tecnología es el futuro"."<br>";
        break;
      case 4:
        $frase_de_freddy= "AMO PHP"."<br>";
        break;
        
    }

    return $frase_de_freddy;
}

echo freddy();


echo "<p>";
echo "Usos de operador nave espacial<br>";
echo "******************************* <br>";
echo "<p>";


$precios_de_cafes = [12, 56, 32, 89, 2, 1];

#ordenar el orden de un arreglo

usort($precios_de_cafes,function($a,$b){   //funcion anonima > funcion sin nombre declarado
  return $a <=> $b;
});


var_dump($precios_de_cafes);


echo "<p>";
echo "Proyecto ahorcado.php<br>";
echo "******************************* <br>";
echo "<p>";



echo "<p>";
echo "Integracion con HTML<br>";
echo "******************************* <br>";
echo "<p>";



?>