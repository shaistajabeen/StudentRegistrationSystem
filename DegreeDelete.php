<?php
include "db.php";
 $id =$_GET['id'];

$ddelete =mysql_query("DELETE FROM `drecord` WHERE D_ID='$id'");
header("location:DegreeRecord.php");

?>
