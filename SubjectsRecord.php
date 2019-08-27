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
  <th>B_ID</th>
  <th>Degree</th>
  <th>Subject</th>
  <th>Edit</th>
  <th>Delete</th>
  <th>Assign Students</th>
</tr>
<?php
$record=mysql_query("SELECT * FROM `brecord`");
while($data=mysql_fetch_array($record))
{
  ?>
<tr>
  <td><?php echo $data['B_ID'];?></td>
  <td><?php echo $data['Degree'];?></td>
<td><?php echo $data['Subject'];?></td>
<td><a href="EditSubject.php?id=<?php echo $data['B_ID'];?>">Edit</a></td>

<td><a href="SubjectDelete.php?id=<?php echo $data['B_ID'];?>">Delete</a></td>

<tr>
  <?php
}
?>
</table>
<a href ="Subjects.php">Subjects</a>
</body>
</html>
