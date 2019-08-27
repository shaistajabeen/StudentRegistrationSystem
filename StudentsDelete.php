<?php
include "db.php";
 $id =$_GET['id'];

$sdelete =mysql_query("DELETE FROM `srecord` WHERE S_ID='$id'");
header("location:StudentsRecord.php");

?>
