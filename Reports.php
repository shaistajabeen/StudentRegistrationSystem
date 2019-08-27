<html>
<head>
<title>Reports</title>
<link rel="stylesheet" type="text/css" href="style_4.css">
<link rel="stylesheet" type="text/css" href="style_3.css">

<link rel="shortcut icon" type="image/png" href="images/student.png">
</head>
<body>
<<?php
 include"db.php";
 include"index.php";

 ?>
 <div class="courses">
<form action="Reports.php" method="POST">
            <select name="drecord">
              <option>Degree</option>
              <?php
                $query1="SELECT * FROM drecord";
                $result1=mysql_query($query1);
                while($rows1 = mysql_fetch_array($result1)){
                  $degreeID=$rows1['D_ID'];
                  $rowsData1=$rows1['DName'];
                  ?>
                  <option value="<?php echo $degreeID ; ?>"><?php echo $rowsData1;?></option>

                  <?php
                }
                ?>
            </select>
            <select name="drecord">
                <option>Fee</option>
                <?php
                  $query2="SELECT * FROM drecord";
                  $result2=mysql_query($query2);
                  while($rows2 = mysql_fetch_array($result2)){
                    $feeID=$rows2['D_ID'];
                    $rowsData2=$rows2['Fee'];
                    ?>
                    <option value="<?php echo $feeID ; ?>"><?php echo $rowsData2;?></option>

                    <?php
                  }
                  ?>
            </select>
            <select name="crecord">
                <option>Course</option>
                <?php
                  $query3="SELECT * FROM crecord";
                  $result3=mysql_query($query3);
                  while($rows3 = mysql_fetch_array($result3)){
                    $courseID=$rows3['C_ID'];
                    $rowsData3=$rows3['CName'];
                    ?>
                    <option value="<?php echo $courseID ; ?>"><?php echo $rowsData3;?></option>

                    <?php
                  }
                  ?>
            </select>
            <input type="submit" name="submit" class="submit"/><br><br>


            <table border=2>
                     <tr>
                         <th>S_ID</th>
                         <th>SName</th>
                     </tr>

                       <?php
                       if (isset($_POST['submit'])){
                         $DName=$_POST['drecord'];
                         $fee=$_POST['drecord'];
                         $CName=$_POST['crecord'];
                       $query4="SELECT srecord.S_ID, srecord.SName
                       FROM srecord
                       WHERE srecord.degreeID= '$DName'
                       AND srecord.feeID='$fee'
                      AND srecord.courseID= '$CName'";
                       $result4=mysql_query($query4);

                       while($rows4 = mysql_fetch_array($result4))
                       {
                        // $dataID=$rows4['id'];
                         $studentID=$rows4['S_ID'];
                         $studentName=$rows4['SName'];
                         ?>
                      <tr>
                      <td><?php echo $studentID; ?></td>
                      <td><?php echo $studentName; ?></td>
                    </tr>
                         <?php
                       }
                     }
                        ?>
                        <tr>
                     </tr>

           </table>
         </form>
        </div>

    </body>
</html>
