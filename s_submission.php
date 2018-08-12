<?php    
    include('dbconnect.php');
    if(isset($_POST['upload']))
		{
		$scode =$_POST['scode'];
        $dis=$_POST['dis'];
        $file= $_FILES['file'];
        $fileTmpName = $file['tmp_name'];
        $filename=$_FILES['file']['name'];
        $filesize=$_FILES['file']['size'];
        $fileerror=$_FILES['file']['error'];
        $filetype=$_FILES['file']['type'];
        $fileext=explode('.',$filename);
        $fileActualExt= strtolower(end($fileext));
        $allowed=array('pdf','docx','doc');
        if(in_array($fileActualExt,$allowed)){
        if($fileerror === 0){
            if($filesize< 10000000){
                $fileNameenew=$scode.$dis.".".$fileActualExt ;
                $filedest='suploads/'.$fileNameenew;
                move_uploaded_file($fileTmpName,$filedest);
               } 
            else {
                echo 'file too big';
            }
            
        }else {
            echo 'error';
        }
         
        
        $sql = "INSERT INTO submission (sname,s_email,subject,notes,description) VALUES ('".$name."','".$email."','".$scode."','".$filedest."','".$dis."');";
		if( mysqli_query($connection, $sql)){
            echo "<script>alert('Published');</script>";
            header('location:s_projects.php');
			}
		else
		{
		echo "Error: " . $sql . "<br>" . $connection->error;
		}
            }
    else {
        echo 'File format should be pdf or doc';    }
    
    }
		
     mysqli_close($connection);
?>