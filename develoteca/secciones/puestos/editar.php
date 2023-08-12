<?php 

include("../../bd.php");

if(isset($_GET['txtID'])){

   $txtID=(isset($_GET['txtID']))?$_GET['txtID']:"";

    //preparamos el delete
    $sentencia=$conexion->prepare("SELECT * FROM tbl_puestos WHERE id=:id");
    
    //asignando los valores que vienen del metodo POST (Los que vienen del formulario)
    $sentencia->bindParam(":id",$txtID);
    $sentencia->execute();

    $registro=$sentencia->fetch(PDO::FETCH_LAZY);
    $nombredelpuesto=$registro["nombredelpuesto"];


}


if($_POST){
   //print_r($_POST);

   //recolectamos los datos del metodo post
   $nombredelpuesto=(isset($_POST['nombredelpuesto'])?$_POST["nombredelpuesto"]:"");
   $txtID=(isset($_GET['txtID']))?$_GET['txtID']:"";


   //preparamos el insert
   $sentencia=$conexion->prepare("UPDATE tbl_puestos SET nombredelpuesto = :nombredelpuesto WHERE id=:id");

   //asignando los valores que vienen del metodo POST (Los que vienen del formulario)
   $sentencia->bindParam(":nombredelpuesto",$nombredelpuesto);
   $sentencia->bindParam(":id",$txtID);
   $sentencia->execute();

   //redireccionar
   header("Location:index.php");
}


?>

<?php include("../../templates/header.php");?>



<br/>

<div class="card">
   <div class="card-header">
      Editar Puestos
   </div>
   <div class="card-body">
      
      <form action="" method="post" enctype="multipart/form-data">

      <div class="mb-3">
        <label for="txtID" class="form-label">ID</label>
        <input type="text"
          class="form-control" value="<?php echo $txtID;?>" readonly name="txtID" id="txtID" aria-describedby="helpId" placeholder="ID">
      </div>

         <div class="mb-3">
           <label for="" class="form-label">Nombre del puesto</label>
           <input type="text"
             class="form-control" value="<?php echo $nombredelpuesto?>" name="nombredelpuesto" id="nombredelpuesto" aria-describedby="helpId" placeholder="Nombre del Puesto">
         </div>

         <button type="submit" class="btn btn-success">Actualizar</button>
         <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

      </form>

   </div>
   <div class="card-footer text-muted">
   
   </div>
</div>

<?php include("../../templates/footer.php");?>