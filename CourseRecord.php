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
  <th>C_ID</th>
  <th>CName</th>
  <th>CrdHrs</th>
  <th>Edit</th>
  <th>Delete</th>
</tr>
<?php
$record=mysql_query("SELECT * FROM `crecord`");
while($data=mysql_fetch_array($record))
{
  ?>
<tr>
<td><?php echo $data['C_ID'];?></td>
<td><?php echo $data['CName'];?></td>
<td><?php echo $data['CrdHrs'];?></td>
<td><a href="Edit.php?id=<?php echo $data['C_ID'];?>">Edit</a></td>
<td><a href="Delete.php?id=<?php echo $data['C_ID'];?>">Delete</a></td>
</tr>
  <?php
}
?>
</table>
<a href ="Courses.php">ADD COURSE</a>
</body>
</html>
