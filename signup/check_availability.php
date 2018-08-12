<?php
include 'DBController.php';

if(!empty($_POST["email"])) {
	$user_id =mysqli_real_escape_string($connection,$_POST['email']);
  $query = "SELECT * FROM student WHERE email='$user_id'";
   $result  = mysqli_query($connection, $query);
   $rowcount = mysqli_num_rows($result);
if($rowcount > 0) {
      echo "<span class='status-not-available'> Email already registered.</span>";
  }
    else{
      echo "<span class='status-available'> Correct email.</span>";
  }
}
?>