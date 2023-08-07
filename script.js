// Función para enviar la consulta mediante AJAX
function enviarConsulta() {
   event.preventDefault(); // Prevenir el envío del formulario
   var nombre = document.getElementById("nombre").value;
 
   // Crear el objeto XMLHttpRequest
   var xhr = new XMLHttpRequest();
   xhr.onreadystatechange = function() {
     if (xhr.readyState === XMLHttpRequest.DONE) {
       if (xhr.status === 200) {
         var resultado = xhr.responseText;
         document.getElementById("resultado").innerText = resultado;
       } else {
         console.error("Error en la solicitud");
       }
     }
   };
 
   // Enviar la solicitud POST a procesar.php
   xhr.open("POST", "procesar.php", true);
   xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
   xhr.send("nombre=" + encodeURIComponent(nombre));
 }
 
 // Asociar la función al evento submit del formulario
 document.querySelector("form").addEventListener("submit", enviarConsulta);