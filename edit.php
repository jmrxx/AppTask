<?php

include("db.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM tarea WHERE id = $id";
    $result = mysqli_query($connectDB, $query);
    
    if (mysqli_num_rows($result)== 1) {
        $row = mysqli_fetch_array($result);
        $titulo = $row['titulo'];
        $descripcion = $row['descripcion'];
    }

}

if (isset($_POST['actualizar'])) {
    
    $id = $_GET['id'];
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];

    $query = "UPDATE tarea set titulo = '$titulo', descripcion = '$descripcion' WHERE id = '$id'";
    
    $result = mysqli_query($connectDB, $query);
    
    $_SESSION['message']  = 'Tarea Actualizada Correctamente';
    $_SESSION['message_type'] = 'success';

    header("location: index.php");
}

?>

<?php include("header.php")?>
    <div class="container p-4">
        <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit.php?id=<?php echo $_GET['id']; ?> " method="POST">
                    <div class="form-group">
                        <input type="text" name="titulo" value="<?php echo $title; ?>" class="form-control" placeholder=" actualizar titulo">

                    </div>
                    <div class="form-control">
                        <textarea name="descripcion"  rows="2" class="form-control" placeholder="actualizar descripcion">
                            <?php echo $descripcion; ?>
                        </textarea>
                    </div>

                    <button class="btn-success" name="actualizar">Actualizar</button>



                </form>
            </div>

        </div>




        </div>
    </div>

<?php include("footer.php") ?>