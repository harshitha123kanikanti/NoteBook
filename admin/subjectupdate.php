<?php
$id2=$_POST['delete'];
echo $id2;
$query = "DELETE FROM `subjects` WHERE `subjcode` = '$id2'";
include_once ("connection.php");
mysqli_query($dbc,$query);
?>