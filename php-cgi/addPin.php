<?php


    ini_set('display_errors','On');
    error_reporting(E_ALL);

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
      }
    }
  }

    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <style>
      #btn{
        color:'white';
        background-color:#a5cea5;
      }
      #sBox{
        color:'white';
        background-color:#a5cea5;
      }
    </style>
    </head>
    <body>

    <div class="container" style="margin-top:20px; margin-bottom:20px;padding:10px;">
    <?php
    	if(!empty($message))
    	{
    ?>
    <div class="btn-<?php echo $class;?>" id="sBox" style="width:30%;padding:10px;margin-bottom:20px;">
    <?php
    		echo $message;

     ?>
    </div>
    <?php } ?>

    <form role="form" action="<?php echo $_SERVER['REQUEST_URI'];?>" method="post" enctype="multipart/form-data">
    <fieldset class="form-group">
    	<div class="form-group">
    	<input type="file" name="fileToUpload" id="fileToUpload">
    	<label for="image upload" class="control-label"> <br> Only .csv files are allowed. <br> </label>
    	</div>
    	<div class="form-group">
        <input type="submit" class="btn" id="btn" value="Import Pins" name="import">
    	</div>
    	</fieldset>
    </form>
    </div>
    </body>
    </html>
