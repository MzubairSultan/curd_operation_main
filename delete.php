<?php
include("connection.php");
$delId = $_GET['id'];

  $delqueryy = "DELETE FROM `register3` WHERE id='$delId'";
  $data =mysqli_query($conn,$delqueryy);
  if($data){
    echo "Record Deleted";
    ?>
    <meta http-equiv = "refresh" content = "0; url = http://localhost/php-course/curd_operation3/disply.php" />
    <?php
  }
  else{
    echo "querry failed";
  }
    
?>