<?php
ini_set('display_errors','On');
error_reporting(E_ALL);

$txt_file    = file_get_contents('db.txt');
$row_data = explode('^', $txt_file);

$db_host = $row_data[0];
$db_user = $row_data[1];
$db_pass = $row_data[2];
$db_name = $row_data[3];
$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


  // echo $_POST['firstname'];
  // echo "other stuff";
  $sql="SELECT * FROM Presentations WHERE 'judgeId' = '$_POST[judgeId]'";
  $result = $con->query($sql);
  if (!$result)
  {
    die('Error: ' . mysqli_error($con));
  }
  if ($result->num_rows == 0) {
    $sql="SELECT * FROM Presentations WHERE 'PID' = '$_POST[PID]'";
    $result = $con->query($sql);
    if (!$result)
    {
      die('Error: ' . mysqli_error($con));
    }

    $sql="INSERT INTO Scores (PID, judgeId, judgeName, DP1, DP2, DP3, DP4, DP5, DP6, DP7, DP8, P1, P2, P3, P4, C1, C2, C3, C4, C5, C6, C7, C8, comment) VALUES ('$_POST[PID]','$_POST[judgeId]','$_POST[judgeName]','$_POST[DP1]','$_POST[DP2]','$_POST[DP3]','$_POST[DP4]','$_POST[DP5]','$_POST[DP6]','$_POST[DP7]','$_POST[DP8]','$_POST[P1]','$_POST[P2]','$_POST[P3]','$_POST[P4]','$_POST[C1]','$_POST[C2]','$_POST[C3]','$_POST[C4]','$_POST[C5]','$_POST[C6]','$_POST[C7]','$_POST[C8]','$_POST[comments]')";

    $result = $con->query($sql);
    if (!$result)
    {
      die('Error: ' . mysqli_error($con));
    }
  }
  else{
    $sql="UPDATE Scores SET PID='$_POST[PID]',judgeId='$_POST[judgeId]',judgeName='$_POST[judgeName]',DP1='$_POST[DP1]',DP2='$_POST[DP2]',DP3='$_POST[DP3]',DP4='$_POST[DP4]',DP5='$_POST[DP5]',DP6='$_POST[DP6]',DP7='$_POST[DP7]',DP8='$_POST[DP8]',P1='$_POST[P1]',P2='$_POST[P2]',P3='$_POST[P3]',P4='$_POST[P4]',C1='$_POST[C1]',C2='$_POST[C2]',C3='$_POST[C3]',C4='$_POST[C4]',C5='$_POST[C5]',C6='$_POST[C6]',C7='$_POST[C7]',C8='$_POST[C8]',comment='$_POST[comments]' WHERE 'judgeId' = '$_POST[judgeId]'";
  }
  mysqli_close($con);
?>
