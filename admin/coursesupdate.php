<?php
$id2=$_POST['delete'];
echo $id2;
$query = "DELETE FROM `courses` WHERE `code` = '$id2'";
include_once ("connection.php");
mysqli_query($dbc,$query);
?>