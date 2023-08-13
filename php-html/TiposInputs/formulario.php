<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tipos de Inputs</title>
</head>
<body>
   <form action="server.php" method="post" enctype="multipart/form-data">

      <!--  Input simple -->
      <!-- <label for="nombre">Nombre:</label>
      <input type="text" name="nombre" id="nombre"> -->

      <!--  Arreglos -->
      <!-- <label for="personas">Nombres:</label>
      <input type="text" name="personas[]">
      <input type="text" name="personas[]">
      <input type="text" name="personas[]"> -->

      <!--  Arreglos asociativos-->
      <!-- <label for="nombre">Nombre:</label>
      <input type="text" name="persona[nombre]">

      <label for="email">email:</label>
      <input type="email" name="persona[email]">

      <label for="edad">Edad:</label>
      <input type="number" name="persona[edad]"> -->

      <!-- Checkbox -->
      <!-- <input type="checkbox" name="list1">
      <input type="checkbox" name="list2" value="valor2">
      <input type="checkbox" name="list3"> -->


      <!-- Radios -->

      <!-- <label for="peru">Perú</label>
      <input type="radio" name="pais" value="Perú" id="peru">

      <label for="mexico">Mexico</label>
      <input type="radio" name="pais" value="Mexico" id="mexico">

      <label for="colombia">Colombia</label>
      <input type="radio" name="pais" value="Colombia" id="colombia"> -->
      
      <!-- Multiples archivos -->
      <label for="galeria">Carga  tus imagenes: </label>
      <input type="file" multiple name="galeria[]"  id="galeria">


      <button type="submit">Mandar Formulario</button>
   </form>
</body>
</html>