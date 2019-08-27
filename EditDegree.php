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
$m=mysql_query("Select * from drecord where D_ID='$id'");
$check=mysql_fetch_array($m);
if(isset($_POST['done']))
{
$DName = $_POST['DName'];
$Fee =  $_POST['Fee'];

$edit=mysql_query("UPDATE `drecord` SET `DName`='$DName',`Fee`='$Fee' WHERE D_ID = '$id'");
if(!$edit)
{
  echo mysql_error();
}
else {
  header("location:DegreeRecord.php");
}
}
?>
<div class="courses">
<form method="POST">
    <label for="DName">Degree Name</label>
  <input type="text" name="DName" value=" <?php echo $check['DName'];?>" placeholder="Degree Name">
  <label for="Fee">Fee</label>
  <input type="text" name="Fee" value=" <?php echo $check['Fee'];?>"  placeholder="Fee">
  <input type="submit" name="done">
</form>
</div>
</body>
</html>
