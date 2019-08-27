<?php
include "db.php";
 $id =$_GET['id'];

$bdelete =mysql_query("DELETE FROM `brecord` WHERE B_ID='$id'");
header("location:SubjectsRecord.php");

?>
