<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Validar Formulario</title>
</head>
<body>
   
   <form action="./server.php" method="post">
      <label for="nombre">Nombre:</label>
      <input type="text" name="name" id="name">

      <label for="username">Username:</label>
      <input type="text" name="username" id="username">

      <label for="email">Correo:</label>
      <input type="text" name="email" id="email">

      <label for="age">Edad:</label>
      <input type="text" name="age" id="age">

      <button type="submit">Enviar formulario</button>
   </form>

</body>
</html>