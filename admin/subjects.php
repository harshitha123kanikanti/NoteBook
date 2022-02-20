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

    <th>code</th>
    <th>Name</th>
    <th>Delete</th>

   
    </tr>
    <form action="subjectupdate.php" method="post">
<?php
include_once "connection.php";
$query="SELECT * FROM subjects";
$result=mysqli_query($dbc,$query);
while($row=mysqli_fetch_assoc($result))
{?>
   
    <tr>
        <td><?php echo $row['subjcode'];?></td>
        <td><?php echo $row['subjname'];?></td>
        <?php echo "<td><button type='submit' value='".$row['subjcode']."' name='delete'>Delete</button</td></tr>";
       ?>
      
</tr>  

   <?php
}
