<?php

require('../connection/connection.php');

$titulo = $_POST ['titulo'];
$contenido = $_POST ['contenido'];


$query = "INSERT INTO nota (titulo,contenido) VALUES ('$titulo','$contenido')";

$ejecutar = mysqli_query($connection, $query);

header("Location: ../index.php");

?>