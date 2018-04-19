<?php

include("connection.php");

$sql = "SELECT task_name,task_desc, users.user_name ,task_start,task_end FROM `tasks`,users
WHERE users.user_id = task_user_asking
ORDER BY task_end";
$result = mysqli_query($con,$sql);


?>
