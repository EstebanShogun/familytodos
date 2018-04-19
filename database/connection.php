<?php

$con = mysqli_connect('localhost','root','pwsio','EX_TODO');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"EX_TODO");

?>