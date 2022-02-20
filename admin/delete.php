<?php
$id=$_POST['delete'];
echo $id;
$query = "DELETE FROM `docs` WHERE `sl` = $id";
include_once ("connection.php");
mysqli_query($dbc,$query);
?>