<?php
    include 'dbconnect.php';
    if(isset($_POST['save']))
		{
		$sname = $_POST['name'];
		$mail = $_POST['email'];
        $pswrd = $_POST['pwd'];
        $sub=$_POST['sub'];
		$phn = $_POST['phn'];
        $qualification=$_POST['qual'];
    
        $sql = "INSERT INTO teacher VALUES ('".$sname."','".$mail."','".$phn."','".$qualification."','".$sub."','".$pswrd."')";
		if( mysqli_query($connection, $sql)){
			echo "<script>alert('Sign_up completed.');</script>";	
            
			}
		else
		{
		echo "<script>alert('Something went wrong try again latter.');</script>";
		}
		}
    mysqli_close($connection);
    ?>

<?php
    include 'dbconnect.php';
    if(isset($_POST['post']))
		{
		$des = $_POST['des'];
		$place = $_POST['venue'];
        $date = $_POST['date'];
        $time = $_POST['time'];
		$link = $_POST['link'];
        $sql = "INSERT INTO links(descriptn,place,event_date,event_time,link) VALUES ('".$des."','".$place."','".$date."','".$time."','".$link."')";
		if( mysqli_query($connection, $sql)){
			echo "<script>alert('Posted');</script>";	
            }
		else
		{
		echo "Error: " . $sql . "<br>" . $connection->error;
		} 
		}
    mysqli_close($connection);
    ?>