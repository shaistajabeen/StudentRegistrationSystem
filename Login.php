
<html>
<head>
  <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="style_1.css">
    <link rel="shortcut icon" type="image/png" href="images/student.png">
<body>
  <?php
  session_start();
  include "db.php";

  if (isset($_REQUEST["submit"]))
  {
    $username=$_REQUEST["username"];
    $password=$_REQUEST["password"];
    $query=  mysql_query("select * from loginform where User='$username' && Pass='$password'");
    $rowcount=mysql_num_rows($query);
    if($rowcount==true)
    {
      $_Session["username"]=$user;
      header('location:Home.php');
    }
    else
      {
        echo "Password is incorrect";
      }
    
  }

  ?>

  <div class ="loginbox">
    <img src="images/admin.png" class="avatar">
    <h1>Login Here</h1>
    <form method="POST" action="Home.php">
      <p>Username</p>
      <input type="text" name="username" placeholder="Enter UserName">
      <p>Password</p>
      <input type="password" name="password" placeholder="Enter Password"><br>
      <input type="submit" name="submit" value="Login"><br>
      <a href="#">Lost your Password?</a><br>
    </form>
  </div>
</body>
</head>
</html>
