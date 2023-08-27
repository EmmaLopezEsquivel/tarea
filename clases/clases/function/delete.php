<?php


require('../connection/connection.php');

$id = $_GET['id'];

$query = "DELETE FROM nota WHERE id = '$id'";

$ejecutar = mysqli_query($connection, $query);

header("Location: ../index.php");

?>