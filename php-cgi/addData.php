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



  $sql="SELECT * FROM Users WHERE email = '$_POST[email]'";
  $result = $con->query($sql);
  if (!$result)
  {
    die('Error: ' . mysqli_error($con));
  }

  if ($result->num_rows > 0) {
    echo "discount";
  }

  $sql="INSERT INTO Users (firstName, lastName, parentsName, email, phone, session, birthday, grade, gender, school, duration) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[parentname]','$_POST[email]','$_POST[phone]','$_POST[session]','$_POST[birthday]','$_POST[grade]','$_POST[gender]','$_POST[school]','$_POST[duration]')";

  $result = $con->query($sql);
  if (!$result)
  {
    die('Error: ' . mysqli_error($con));
  }
  mysqli_close($con);
?>
