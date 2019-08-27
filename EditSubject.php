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
$m=mysql_query("Select * from brecord where B_ID='$id'");
$check=mysql_fetch_array($m);
$a=$check["Subject"];
$b=explode(",",$a);

if(isset($_POST['done']))
{
$Degree = $_POST['Degree'];
$c=$_POST["Subject"];
$d=implode(",",$c);
$edit=mysql_query("UPDATE `brecord` SET `Degree`='$Degree',`Subject`='$d' WHERE B_ID = '$id'");
if(!$edit)
{
  echo mysql_error();
}
else {
  header("location:SubjectsRecord.php");
}
}
?>
<div class="courses">
  <form method="post">
    <select name="Degree">
      <option>Select Degree</option>
      <option value="Computer Science"
<?php
if($check["Degree"=='Computer Science'])
{
  echo"selected";
}
 ?>
>Computer Science</option>
<option value="Software Engineering"
<?php
if($check["Degree"=='Software Engineering'])
{
  echo"selected";
}
?>
>Software Engineering</option>
<option value="Telecommunication and Networking"
<?php
if($check["Degree"=='Telecommunication and Networking'])
{
  echo"selected";
}
 ?>
>Telecommunication and Networking</option>
    </select>

    <label> Select Courses </label><br><br>
    <input type="checkbox" name="Subject[]"  value="OOP"
<?php
if(in_array("OOP",$b))
{
  echo "checked";
}
?>
>OOP<br>
  <input type="checkbox" name="Subject[]"  value="SE-1"
  <?php
  if(in_array("SE-1",$b))
  {
    echo "checked";
  }
  ?>
  >SE-1<br>
  <input type="checkbox" name="Subject[]"  value="SE-2"
  <?php
  if(in_array("SE-2",$b))
  {
    echo "checked";
  }
  ?>
  >SE-2<br>
  <input type="checkbox" name="Subject[]"  value="AOOP"
  <?php
  if(in_array("AOOP",$b))
  {
    echo "checked";
  }
  ?>
  >AOOP<br><br>
  <input type="Submit" name="done"><br>
  <a href ="SubjectsRecord.php">Subjects</a>
</div>

</form>
</div>
</body>
</html>
