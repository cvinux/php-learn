<?php
    echo "Hola mundo Web otra vez csmr, yo puedo ser un gran programador <br> @cvinux"." <p>";

    $personas = [
        "Carlos" => 22,
        "Renato" => 125,
        "Juan" => 65 
    ];

    var_dump($personas);
    echo "<br>";
    echo "<p>";
    print_r($personas);

    #variables
    #--------------------

    echo "<p>";
    echo "Variables <br>";
    echo "********* <br>";
    echo "<p>";

    $numero_1 = 8;
    $numero_2 = 7;

    echo $numero_1 + $numero_2;
    echo "<br>";

    #constante

    echo "<p>";
    echo "Constantes <br>";
    echo "********* <br>";
    echo "<p>";

    define("NUMERO_PI",3.14);
    
    echo NUMERO_PI;

        
    #tipo de dato
    echo "<p>";
    echo "tipo de dato <br>";
    echo "************ <br>";
    echo "<p>";

    $numero_3="23";

    $numero_3= $numero_3+ 2;
    
    var_dump($numero_3);


        #casting
        echo "<p>";
        echo "casting <br>";
        echo "************ <br>";
        echo "<p>";
    
        $numero_4="4";

        var_dump($numero_4);

        echo "<p>";

        $numero_4= (int) $numero_4;
        
        var_dump($numero_4);

        echo "<p>";

        $dias=5.89;

        var_dump($dias);

        echo "<p>";
        
        $dias= (int) $dias;
        
        var_dump($dias);

    #Operadores logicos
    echo "<p>";
    echo nl2br("Operadores Logicos \n");
    echo nl2br("****************** \n");
    #echo "****************** <br>";
    echo "<p>";

    $michis_felinos = true;
    $michis_4_patas = true;
    $michis_vuelan = false;
    $michis_programan_con_PHP = false;

    var_dump($michis_felinos && $michis_4_patas);
    echo nl2br("\n");
    var_dump($michis_felinos || $michis_4_patas);
    echo nl2br("\n");
    var_dump($michis_felinos && $michis_vuelan);
    echo nl2br("\n");
    var_dump($michis_felinos || $michis_vuelan);
    echo nl2br("\n");
    #negacion;
    var_dump(!$michis_programan_con_PHP);


     #Operadores aritmeticos
     echo "<p>";
     echo nl2br("Operadores aritmeticos \n");
     echo nl2br("********************** \n");
     #echo "****************** <br>";
     echo "<p>";

     echo nl2br("Potencia \n");
     $resultado = 5 ** 3; //potenciacion
     print_r($resultado);



      #Operadores relacionales
      echo "<p>";
      echo nl2br("Operadores relacionales \n");
      echo nl2br("********************** \n");
      #echo "****************** <br>";
      echo "<p>";

    $a = 5;
    $b = 5;
    $b2= "5";
    $c = 9;
    $d = 2;

    var_dump($a==$b2); //evaluacion de operador IGUAL
    echo "<p>";
    var_dump($a===$b2); //evaluacion de operador IDENTIDAD
    echo "<p>";
    var_dump($a != $b); //diferente


    echo "<p>";
    echo nl2br("Operador nave espacial \n");
    echo nl2br("---------------------------------------\n");
    #echo "****************** <br>";
    echo "<p>";

    echo nl2br('$a <=> $b' ."\n");

    echo 2 <=> 1; // 1 si el numero que esta a la derecha es mayor, te devuelve 1, sino -1, si son iguales sale 0
    echo "<p>";
    echo 1 <=> 1;
    echo "<p>";
    echo -50 <=> 1;


      #Operadores relacionales
      echo "<p>";
      echo nl2br("Operadores asignacion \n");
      echo nl2br("********************** \n");
      #echo "****************** <br>";
      echo "<p>";

      /*
         = 	Asignación
        += 	Incremento
        ++ 	Incremento
        -= 	Decremento
        -- 	Decremento
       #*= 	Multiplicación
        /= 	División
        .= 	Concatenación
      */

      $nombre = "Carlos";
      $nombre .= " "."Santana";
    echo $nombre;

    #Primer programa "que hora es"
      echo "<p>";
      echo nl2br("Programa que hora es \n");
      echo nl2br("********************** \n");
      #echo "****************** <br>";
      echo "<p>";

    #Formulario basico de html 
    echo 5 + "5 michis";

   

?>

<!DOCTYPE html>
<html>
<head>
  <title>Formulario de Consulta</title>
  <script src="script.js"></script>
</head>
<body>

  <h1>Formulario de Consulta</h1>

  <form>
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre">

    <input type="submit" value="Consultar">
  </form>

  <div id="resultado"></div>

</body>
</html>


