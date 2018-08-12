<?php
include 'DBController.php';
echo "<script>alert('in');</script>";
$psd =mysqli_real_escape_string($connection,$_POST['psd']);
$cnfp =mysqli_real_escape_string($connection,$_POST['cnfd']);
echo "<script>alert("$_POST[");</script>";
if(!empty($_POST['psd']) && !empty($_POST['cnfp'])) {
    $psd= $_POST['psd'];
    $cnfp =$_POST['cnfp'];
    echo "<script>alert('Invalid username or password! Please try again.');</script>";
		echo "Invalid username or password! Please try again";		
if($psd == $cnfp) {
      echo "<span class='status-not-available'>password matched.</span>";
  }
    else{
      echo "<span class='status-available'> password not matching.</span>";
  }
}
?>