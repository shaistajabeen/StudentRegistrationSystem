<?php
include "db.php";
 $id =$_GET['id'];

$cdelete =mysql_query("DELETE FROM `crecord` WHERE C_ID='$id'");
header("location:CourseRecord.php");

?>
