<?php    
include('dbconnect.php');
if(isset($_POST['upload']))
{
    $scode =$_POST['scode'];
    $course=$_POST['course'];
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
                $fileNameenew= $scode.$dis.".".$fileActualExt ;
                $filedest='tuploads/'.$fileNameenew;
                move_uploaded_file($fileTmpName,$filedest);
            } 
            else {
                echo 'file too big';
            }

        }else {
            echo 'error';
        }
  

    //$fileAsString = base64_encode(file_get_contents('".$note."'));
    $sql = "INSERT INTO notes (sub,course,description,t_mail,notes) VALUES ('".$scode."','".$course."','".$dis."','".$user_check."','".$filedest."');";
    if( mysqli_query($connection, $sql)){
        echo "<script>alert('Published');</script>";
        header('location:f_notes.php');
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