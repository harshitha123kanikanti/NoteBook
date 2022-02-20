<?php
$id1=$_POST['delete'];
echo $id1;
$query = "DELETE FROM `users` WHERE `email` = '$id1'";
include_once ("connection.php");
mysqli_query($dbc,$query);
?>