<html>
<head>
<title>Courses</title>

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
$CName = $_POST['CName'];
$CrdHrs=$_POST['CrdHrs'];

$insert =mysql_query("INSERT INTO `crecord`(`CName`, `CrdHrs`)
VALUES ('$CName','$CrdHrs')");
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
    <label for="CName">Course Name</label>
    <input type="text" name="CName" placeholder="Course Name">
    <label for="CrdHrs">Credit Hours</label>
    <input type="text" name="CrdHrs" placeholder="Credit Hours">
    <input type="Submit" name="done">
  </form>
  <a href ="CourseRecord.php">RECORDS</a>
</div>
</body>
</html>
