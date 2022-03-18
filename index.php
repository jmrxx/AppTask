
<?php include("db.php")
// include("db.php") --> lo que hace es cuando se incie la app que incluya la conecciond de la base de datos

?>
<?php include("include/header.php")
// Como todas las vistas van utilizar el mismo trozo de codigo, las copiamos y la volvemos a utilizar cuando queramos

?>

<!--CODIGO HTML -->
<div class="container p-4">
    <div class="row">
        <div class="col-md-4">

            <?php if(isset($_SESSION['message'])){ ?>
                <div class="alert alert-<?=$_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>   
                </div>

            <?php session_unset(); } ?>


            <div class="card card.body">
                <form action="save_tarea" method="POST">
                    <div class="form-group">
                        <input type="text" name="titulo" class="form-control" placeholder="titulo de la tarea" autofocus>
                    </div>

                    <div class="form-group">
                        <textarea name="descripcion" rows="2" class="form-control" placeholder="Descripcion de la tarea"></textarea>
                    </div>
                   
                    <input type="submit" class="btn btn-success btn-block" name="guardar tarea" value="guardar tarea">



                </form>
            </div>

        </div>
    <div class="col-md-8">
        <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Descripcion</th>
                        <th>Fecha Creacion</th>
                        <th>Acciones</th>
                    </tr>

                </thead>
                <tbody>
                   <?php
                   $query ="SELECT * FROM tarea";
                    $result_tarea = mysqli_query($connectDB, $query);

                    while ($row = mysqli_fetch_array($result_tarea)) { ?>
                        <tr>
                            <td><?php echo $row['titulo']?></td>
                            <td><?php echo $row['descripcion']?></td>
                            <td><?php echo $row['fecha_creacion']?></td>
                            <td>
                                <a class="btn btn-secondary" href="edit.php?id=<?php echo $row['id'] ?>">
                                    <i class="fas fa-marker"></i>
                                </a>
                                <a class="btn btn-danger" href="delete_tarea.php?id=<?php echo $row['id'] ?>">
                                    <i class="far fa-trash-alt"></i>
                                </a>

                            </td>

                        </tr>
                   
                  


                    <?php } ?>



                   ?>
                </tbody>
        </table>

    </div>

    </div>
</div>



<?php include("include/footer.php")
//Es el footer donde se almacenan los Scripts
?>
