<?php

//print_r($_POST);

require("../connection/connection.php");

$id = $_POST[ 'id' ];
$titulo = $_POST[ 'titulo' ];
$contenido = $_POST[ 'contenido' ];


$query = "UPDATE nota SET titulo = '$titulo', contenido = '$contenido' WHERE id = '$id' ";

$ejecutar = mysqli_query($connection, $query);

header("Location: ../index.php");

?>