<?php


// if(isset($_POST["nombre"]) && !empty($_POST["nombre"])){

//     echo "¡Hola {$_POST["nombre"]}!";

// }else{
//     echo "no mandaste nada";
// }


if( isset($_POST["form"])){
    echo "Todo el formulario fue enviado";
}else{
    echo "no se mando ningun formulaio";
}

?>