<html>
<head>
  <title>Records</title>
  <link rel="stylesheet" type="text/css" href="style_2.css">
    <link rel="shortcut icon" type="image/png" href="images/student.png">
</head>
<body>
<?php
include("index.php");
include"db.php";
?>
<table border="2">
<tr>
  <th>D_ID</th>
  <th>DName</th>
  <th>Fee</th>
  <th>Edit</th>
  <th>Delete</th>
</tr>
<?php
$record=mysql_query("SELECT * FROM `drecord`");
while($data=mysql_fetch_array($record))
{
  ?>
<tr>
<td><?php echo $data['D_ID'];?></td>
<td><?php echo $data['DName'];?></td>
<td><?php echo $data['Fee'];?></td>
<td><a href="EditDegree.php?id=<?php echo $data['D_ID'];?>">Edit</a></td>
<td><a href="DegreeDelete.php?id=<?php echo $data['D_ID'];?>">Delete</a></td>
<tr>
  <?php
}
?>
</table>
<a href ="Degree.php">Add Degree</a>
</body>
</html>
