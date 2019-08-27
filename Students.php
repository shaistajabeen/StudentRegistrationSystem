<html>
<head>
<title>Students</title>
<link rel="stylesheet" type="text/css" href="style_4.css">
<link rel="stylesheet" type="text/css" href="style_3.css">
<link rel="shortcut icon" type="image/png" href="images/student.png">
</head>
<body>
<?php include("index.php"); ?>
<?php
include "db.php";
if(isset($_POST['done']))
{
$SName = $_POST['SName'];
$Degree=$_POST['Degree'];

$insert =mysql_query("INSERT INTO `srecord`(`SName`, `Degree`)
VALUES ('$SName','$Degree')");
if(!$insert)
{
  echo mysql_error();
}
else {
  echo"inserted";
}
}
?>
<div class ="courses">
  <form method="POST">
    <label for="SName">Student Name</label>
    <input type="text" name="SName" placeholder="Student Name">
    <label for="Degree">Degree</label>
    <input type="text" name="Degree" placeholder="Degree">
    <input type="Submit" name="done">
  </form>
  <a href ="StudentsRecord.php">Students_Records</a>
</div>
</body>
</html>
