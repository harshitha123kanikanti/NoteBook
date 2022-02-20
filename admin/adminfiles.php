<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
</head>
<body>
<div style="overflow-x:auto;">
  <table>
    <tr>
<th>ID</th>
    <th>Filename</th>
    <th>Created At</th>
    <th>Uploaded by</th>
    <th>view</th>
    <th>Delete</th>
    
    </tr>

<form action="delete.php" method="post">

<?php
include_once "connection.php";
$query="SELECT * FROM docs";
$result=mysqli_query($dbc,$query);
while($row=mysqli_fetch_assoc($result))
{?>
   
    <tr>
        <td><?php echo $row["sl"];?></td>
        <td><?php echo $row["filename"];?></td>
        <td><?php echo $row["created"];?></td>
        <td><?php echo $row["uploader"];?></td>
       <td><a href="/folder/filesupload/<?php echo $row["filename"]?>">View</a></td>
       <?php echo "<td><button type='submit' value='".$row['sl']."' name='delete'>Delete</button</td></tr>";
       ?>
    </tr>

   <?php
}













?>
</form>