<?php

include("db.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM tarea WHERE id = $id";
    $result = mysqli_query($connectDB, $query);
    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Tarea Elimnada Correctamente';
    $_SESSION['message_type'] = 'danger';
    header("location: index.php");
}






?>
