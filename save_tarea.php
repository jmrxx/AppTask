<?php 
include("db.php");

if(isset($_POST['save_tarea'])){
   $titulo = $_POST['titulo'];
   $descripcion = $_POST['descripcion'];
   echo $titulo;
   echo $descripcion;
   $query = "INSERT INTO tarea(titulo,descripcion) VALUES('$titulo, $descripcion')";
   $result = mysqli_query($connectD, $query);

   if(!$result){
       die("Query Failed");
   }

   $_SESSION['message'] = 'Tarea Guardada Sactifactoriamente';
   $_SESSION['message_type'] = 'success';

  header("location: index.php");

}
 


?>