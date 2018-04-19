<?php

include("connection.php");

$rep = $_POST["task"];

var_dump($rep);

$sql = "DELETE FROM liste WHERE libelle = '$rep'";
$result = mysqli_query($con,$sql);
?>