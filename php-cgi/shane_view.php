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
      return;
    }

    $class="";
    $message='';
    $error=0;
    $target_dir = dirname(__FILE__)."/Uploads/";
    if(isset($_POST["import"]) && !empty($_FILES)) {
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    	$fileType = pathinfo($target_file,PATHINFO_EXTENSION);
    	if($fileType != "csv")  // here we are checking for the file extension. We are not allowing othre then (.csv) extension .
    	{
    		$message .= "Sorry, only CSV file is allowed.<br>";
    		$error=1;
    	}
    	else
    	{
    		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    			$message .="File uploaded successfully.<br>";

    			if (($getdata = fopen($target_file, "r")) !== FALSE) {
    			   fgetcsv($getdata);
    			   while (($data = fgetcsv($getdata)) !== FALSE) {
    					$fieldCount = count($data);
    					for ($c=0; $c < $fieldCount; $c++) {
    					  $columnData[$c] = $data[$c];
    					}
              $option_one = mysqli_real_escape_string($con ,$columnData[0]);
       			 $option_two = mysqli_real_escape_string($con ,$columnData[1]);
              $option_three = mysqli_real_escape_string($con ,$columnData[2]);
       			 $option_four = mysqli_real_escape_string($con ,$columnData[3]);
              $option_five= mysqli_real_escape_string($con ,$columnData[4]);
       			 $option_six = mysqli_real_escape_string($con ,$columnData[5]);
              $option_seven = mysqli_real_escape_string($con ,$columnData[6]);
    			 $import_data[]="('".$option_one."','".$option_two."','".$option_three."','".$option_four."','".$option_five."','".$option_six."','".$option_seven."')";
    			// SQL Query to insert data into DataBase

    			 }
    			 $import_data = implode(",", $import_data);
    			 $query = "INSERT INTO Presentations VALUES $import_data;";
    			 $result = mysqli_query($con ,$query);
    			 $message .="Data imported successfully.";
    			 fclose($getdata);
    			}

    		} else {
    			$message .="Sorry, there was an error uploading your file.";
    			$error=1;
    		}
    	}
    }
    $class="warning";
    if($error!=1)
    {
    	$class="success";
    }
    ?>

    <!DOCTYPE html>
    <html>
    <head>
    <title>Shane's View</title>
    <link rel="stylesheet" type="text/css" href="../coen174/appstyle.css">
    <link rel="stylesheet" type="text/css" href="../coen174/formstyle.css">


    <style type="text/css">
    a{
      text-decoration:none;
    }
    </style>
    </head>
    <body>

      <div id="topbar">
        <h2>SCU Senior Design Conference </h2>
        <h1>Administrator Portal</h1>
        <button class=" button button1" style="width:70px; float: right; position: absolute; right: 20px; top: 10px; vertical-align:middle"><a href="login.html">Logout</a></button>

      </div>

    <div align="center">


    <button class="button button1" style=" height: 70px; vertical-align:middle"><span><a href="averages.html">Summary Score Report</a></span></button>
    <br/>
    <br/>
    <button class=" button button1" style=" height: 70px; vertical-align:middle"><span><a href="detailed1.html">Detailed Score Reports</a></span></button>
    <br/>
    <br/>
    <button class=" button button1" id="upbutton" style=" height: 70px; vertical-align:middle" onclick=show()><span>Upload Presentation Information</span></button>

    <form action="<?php echo $_SERVER['REQUEST_URI'];?>" method="post" enctype="multipart/form-data">
    	<div class="box" id="box" style="vertical-align:middle; display:none;">
       Upload Presentation Information <br/> <br/>
       <label for="image upload" class="control-label"> <br> Only .csv files are allowed. <br> Make sure your CSV file has the field names as its first row and that they match the order of the table's field names <br> (PID, dept, sessionNo, time, roomNum, advisor, pTitle)<br><br>Example:<br><br></label>
    		<input type="file" name="fileToUpload" id="fileToUpload">  <br/>
        <input type="submit" class="btn" id="btn" value="Import Data" name="import">
        <br/>

    	</div>
    </form>

    </div>

    <script>

    function show(){
      console.log("hello")
         document.getElementById('box').style= "display:inline-block";
           document.getElementById('upbutton').style= "display:none";

    }
    </script>

    </body>
    </html>
