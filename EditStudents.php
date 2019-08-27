<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style_3.css">
    <link rel="stylesheet" type="text/css" href="style_4.css">
  <link rel="shortcut icon" type="image/png" href="images/student.png">
</head>
<body>
<?php
include "db.php";
$id =$_GET['id'];
$m=mysql_query("Select * from srecord where S_ID='$id'");
$check=mysql_fetch_array($m);
if(isset($_POST['done']))
{
$SName = $_POST['SName'];
$Degree =  $_POST['Degree'];

$edit=mysql_query("UPDATE `srecord` SET `SName`='$SName',`Degree`='$Degree' WHERE S_ID = '$id'");
if(!$edit)
{
  echo mysql_error();
}
else {
  header("location:StudentsRecord.php");
}
}
?>
<div class="courses">
<form method="POST">
    <label for="SName">Student Name</label>
  <input type="text" name="SName" value=" <?php echo $check['SName'];?>" placeholder="Student Name">
  <label for="Degree">Degree</label>
  <input type="text" name="Degree" value=" <?php echo $check['Degree'];?>"  placeholder="Degree">
  <input type="submit" name="done">
</form>
</div>
</body>
</html>
