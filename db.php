<?php
// Iniciar una session
session_start();

//Hacemos la coneccion a la base datos y guardanos la conecion en la variable connectDB

$connectDB = mysqli_connect(
'localhost',
'root',
'123456',
'taskApp'

);
//Comprovar si se conecto la base de datos
if(isset($connectDB)){
    echo 'La base de datos esta conectada';
};

?>