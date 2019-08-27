<?php

$error="";
if(isset($_POST['submit']))

{

if(empty($_POST['user'])  && empty($_POST['pass']))

{
$error="Invalid";
}

else
{
$User=$_POST['user'];
$Pass=$_POST['pass'];
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"project");
$query=mysqli_query($conn,"select * from loginform where User='$User' and Pass='$Pass'");

$rows=mysqli_num_rows($query);
if($rows == 1)
{


header("location:Home.php");
}
else
{
	echo "<script type= 'text/javascript'>alert('Invalid Password');</script>";
$error="Invalid";
}

mysqli_close($conn);
}

}
