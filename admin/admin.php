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

<th>Name</th>
    <th>Email</th>
    <th></th>
    <th>Time</th>
   
    </tr>

    <form action="delete1.php" method="post">
<?php
include_once "connection.php";
$query="SELECT * FROM users";
$result=mysqli_query($dbc,$query);
while($row=mysqli_fetch_assoc($result))
{?>
   
    <tr>
        <td><?php echo $row["id"];?></td>
        <td><?php echo $row["email"];?></td>
        <td><?php echo $row["time"];?></td>
        <?php echo "<td><button type='submit' value='".$row['email']."' name='delete'>Delete</button</td></tr>";
         ?>
    </tr>

   <?php
}













?>