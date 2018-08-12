<?php
		$uid = $_POST['uid'];
        $date=$_POST['date']
		$sql = "DELETE FROM announcements WHERE tid='".$uid"' and adate='".$date"';";
		$result = mysqli_real_query($connection, $sql);
		if($result)
			echo "1";	
?>