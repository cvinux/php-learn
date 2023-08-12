<?php

$usuarios = array(
   array("id"=>0,
   "username"=>"Mr.Michi"),

   array("id"=>1,
   "username"=>"Retax"),

   array("id"=>2,
   "username"=>"Pancho")
);

$edad_de_pepito = 12;

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Pasar variables de PHP a JavaScript</title>
</head>
<body>
   <script>
      let users=JSON.parse('<?= json_encode($usuarios)?>');
      console.log(users);

      let edadDePepito = <?= $edad_de_pepito;?>;
   </script>
</body>
</html>