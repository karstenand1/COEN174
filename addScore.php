<?php
ini_set('display_errors','On');
error_reporting(E_ALL);
$db_host = "dbserver.engr.scu.edu";
$db_user = "kanderse";
$db_pass = "00000918652";
$db_name = "sdb_kanderse";
$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


  // echo $_POST['firstname'];
  // echo "other stuff";



  $sql="SELECT * FROM Presentations WHERE PID = '$_POST[PID]'";
  $result = $con->query($sql);
  if (!$result)
  {
    die('Error: ' . mysqli_error($con));
  }

  $sql="INSERT INTO Users (PID, judgeId, judgeName, DP1, DP2, DP3, DP4, DP5, DP6, DP7, DP8, P1, P2, P3, P4, C1, C2, C3, C4, C5, C6, C7, comments) VALUES ('$_POST[PID]','$_POST[judgeId]','$_POST[judgeName]','$_POST[DP1]','$_POST[DP2]','$_POST[DP3]','$_POST[DP4]','$_POST[DP5]','$_POST[DP6]','$_POST[DP7]','$_POST[DP8]','$_POST[P1]','$_POST[P2]','$_POST[P3]','$_POST[P4]','$_POST[C1]','$_POST[C2]','$_POST[C3]','$_POST[C4]','$_POST[C5]','$_POST[C6]','$_POST[C7]','$_POST[comments]')";

  $result = $con->query($sql);
  if (!$result)
  {
    die('Error: ' . mysqli_error($con));
  }
  mysqli_close($con);
?>
