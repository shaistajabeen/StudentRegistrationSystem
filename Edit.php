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
$m=mysql_query("Select * from crecord where C_ID='$id'");
$check=mysql_fetch_array($m);
if(isset($_POST['done']))
{
$CName = $_POST['CName'];
$CrdHrs =  $_POST['CrdHrs'];

$edit=mysql_query("UPDATE `crecord` SET `CName`='$CName',`CrdHrs`='$CrdHrs' WHERE C_ID = '$id'");
if(!$edit)
{
  echo mysql_error();
}
else {
  header("location:CourseRecord.php");
}
}
?>
<div class="courses">
<form method="POST">
    <label for="CName">Course Name</label>
  <input type="text" name="CName" value=" <?php echo $check['CName'];?>" placeholder="Course Name">
  <label for="CrdHrs">Credit Hours</label>
  <input type="text" name="CrdHrs" value=" <?php echo $check['CrdHrs'];?>"  placeholder="Credit Hours">
  <input type="submit" name="done">
</form>
</div>
</body>
</html>
