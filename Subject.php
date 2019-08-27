<html>
<head>
<title>Subject</title>

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
$Degree=$_POST['Degree'];
$Subject=$_POST['Subject'];
$a=implode(',',$Subject);


$insert =mysql_query("INSERT INTO `brecord`(`Degree`,`Subject`) VALUES ('$Degree','$a')");
if(!$insert)
{
  echo mysql_error();
}
else {
  echo"inserted";
}
}
?>
<div class="courses">
  <form method="post">
    <select name="Degree">
      <option>Select Degree</option>
      <option value="Computer Science">Computer Science</option>
      <option value="Software Engineering">Software Engineering</option>
      <option value="Telecommunication and Networking">Telecommunication and Networking</option>
    </select>

  <label> Select Courses </label><br><br>
  <input type="checkbox" name="Subject[]"  value="OOP"  >OOP<br>
<input type="checkbox" name="Subject[]"    value="SE-1" >SE-1<br>
<input type="checkbox" name="Subject[]"    value="SE-2" >SE-2<br>
<input type="checkbox" name="Subject[]"    value="AOOP" >AOOP<br>
<input type="checkbox" name="Subject[]"    value="Data Structure" >Data Structure<br>
<input type="checkbox" name="Subject[]"    value="Computer Communication and Networking" >Computer Communication and Networking<br>
<input type="checkbox" name="Subject[]"    value="Algorithm" >Algorithm<br>
<input type="checkbox" name="Subject[]"    value="Soft Computing" >Soft Computing<br><br>
<input type="Submit" name="done"><br>
<a href ="SubjectsRecord.php">Subjects</a>
</div>

</form>

</body>
</html>
