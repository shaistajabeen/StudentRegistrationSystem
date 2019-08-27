<?php
mysql_connect("localhost","root","");
$db=mysql_select_db("project");
if(!$db)
{
  echo"Not Connected";
}

else {
  echo"Connected";

}

?>
