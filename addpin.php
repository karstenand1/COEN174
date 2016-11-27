
<?php
$target_Path = "/";
$target_Path = $target_Path.basename( $_FILES['userFile']['name'] );
move_uploaded_file( $_FILES['userFile']['tmp_name'], $target_Path );
?>