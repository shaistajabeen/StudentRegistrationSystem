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
  <th>S_ID</th>
  <th>SName</th>
  <th>Degree</th>
  <th>Edit</th>
  <th>Delete</th>
</tr>
<?php
$record=mysql_query("SELECT * FROM `srecord`");
while($data=mysql_fetch_array($record))
{
  ?>
<tr>
<td><?php echo $data['S_ID'];?></td>
<td><?php echo $data['SName'];?></td>
<td><?php echo $data['Degree'];?></td>
<td><a href="EditStudents.php?id=<?php echo $data['S_ID'];?>">Edit</a></td>
<td><a href="StudentsDelete.php?id=<?php echo $data['S_ID'];?>">Delete</a></td>
</tr>
  <?php
}
?>
</table>
<a href ="Students.php">Add Students</a>
</body>
</html>
