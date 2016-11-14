<?php

  modDatabase();

  function modDatabase() {

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
      return;
      }

    $sql = "SELECT Presentations.PID, pTitle, dept, sessionNo, COUNT( DISTINCT judgeName ) AS judgeAmount, AVG( DP1 + DP2 + DP3 + DP4 + DP5 + DP6 + DP7 + DP8 + C1 + C2 + C3 + C4) AS avgScore FROM Presentations INNER JOIN Scores ON Presentations.PID = Scores.PID GROUP BY PID ORDER BY sessionNo, dept";

    // $sql = "SELECT * FROM Comments ORDER BY date_added DESC LIMIT 10";

    $result = $con->query($sql);
    if (!$result)
    {
      die('Error: ' . mysqli_error($con));
    }

    $rows = array();
    while($r = mysqli_fetch_assoc($result)) {
      $rows[] = $r;
    }
    echo json_encode($rows);

    mysqli_close($con);

  }


?>
