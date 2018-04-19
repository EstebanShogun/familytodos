<?php

include("connection.php");
include("getUsers.php");

$tache = ($_GET["tache"]);
$description = ($_GET["description"]);
$demandeur = ($_GET["optionsRadios"]);
$butoire = ($_GET["butoire"]);

if ($tache == ""){
    header('Location: ../pages/forms/general.php?error=nom');
}

for($i=1;$i<=($users->num_rows);$i++){
    if(isset($_GET["case".$i])){
        
    }
}

echo $sql = "INSERT INTO `tasks` (`task_id`, `task_name`, `task_desc`, `task_user_asking`, `task_start`, `task_end`) VALUES (NULL,'".$tache."',' ".$description."', '".$demandeur."', DATE( NOW() ), '".$butoire."')";
//$result = $con->query($sql);
if (!$result) {
      header('Location: ../pages/forms/general.php?error=date');
   } else {
    echo $con->insert_id; // function will now return the ID instead of true.
}
//var_dump($result);
/*

var_dump($rep);

$sql = "INSERT INTO liste(libelle) VALUES ('$rep')";
$result = mysqli_query($con,$sql);

?>*/

