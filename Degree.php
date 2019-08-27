<html>
<head>
  <title></title>
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
$DName = $_POST['DName'];
$Fee=$_POST['Fee'];

$insert =mysql_query("INSERT INTO `drecord`(`DName`, `Fee`)
VALUES ('$DName','$Fee')");
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
    <label for="DName">Degree Name</label>
    <input type="text" name="DName" placeholder="Degree Name">
    <label for="Fee">Fee</label>
    <input type="text" name="Fee" placeholder="Fee">
    <input type="Submit" name="done">
  </form>
  <a href ="DegreeRecord.php">Degree Record</a>
</div>
</body>
</html>
