<?php
include('dbconnect.php');
session_start();
if(!isset($_SESSION['login_student']))
{
    header("location:ulogin.php");
}
mysqli_close($connection);
?>
<?php
include('dbconnect.php');
$row=array();
$user_check =mysqli_real_escape_string($connection,$_SESSION['login_student']);
$sql="SELECT * FROM student WHERE email='$user_check'";
$result= mysqli_query($connection,$sql);
$row = mysqli_fetch_array($result);
$name= $row['name'];
$email= $row['email'];
$phone= $row['phone'];
$course=$row['course'];
$password= $row['password'];
$data= "<h4 class='icon-user'>Name:&nbsp&nbsp&nbsp$name</h4><br><hr>
            <h4 class='icon-envelope-alt'>Email:&nbsp&nbsp&nbsp&nbsp$email</h4><br><hr>           
            <h4 class='icon-phone'>Phone:&nbsp&nbsp&nbsp&nbsp$phone </h4><br><hr>
            <h4 class='icon-book'>Degree:&nbsp&nbsp&nbsp&nbsp$course</h4><br>
            ";
if(!isset($_SESSION['login_student']))
{
    header("location:ulogin.php");
}
mysqli_close($connection);
?>

<?php
include 'dbconnect.php';
$event_date="";
$message ="";
$data1="";
$user_check =mysqli_real_escape_string($connection,$_SESSION['login_student']);
$sql = "select * from announcements;";
$result = mysqli_query($connection, $sql);
while($row = mysqli_fetch_array($result)){
    $message =$row['announcement'];
    $event_date=$row['adate'];
    $data1 .="<li>
                <div class='user-thumb'><img width='40' height='40' alt='User' src='d_files/img/av1.jpg'> </div>
                <div class='article-post'><span class='user-info'>Date:".$event_date."</span>
                  <p>".$message."</p>
                </div>
              </li>";
}
mysqli_close($connection);
?>

<?php    
include('dbconnect.php');
if(isset($_POST['chcontent']))
{
    include('dbconnect.php');
    $cname = $_POST['chname'];
    $cphn = $_POST['chphone'];
    $ccourse= $_POST['chcourse'];
    $sql = "UPDATE student
                SET name = '".$cname."', phone ='".$cphn."', course ='".$ccourse."'
                WHERE email='".$email."';";
    if( mysqli_query($connection, $sql)){
        header('location:s_myprofile.php');
    }
    else
    {
        echo "<script>alert('Something went wrong try again latter.');</script>";
    }
}
mysqli_close($connection);
?>

<?php 
include('dbconnect.php');
if(isset($_POST['change']))
{
    include('dbconnect.php');
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    if($password == $password2)
    {
        $sql = "UPDATE student
                SET password = '".$password."'
                WHERE email='".$email."';";
        if( mysqli_query($connection, $sql)){
            echo "<script>alert('Password changed.');</script>";	
        }
        else
        {
            echo "<script>alert('Something went wrong try again latter.');</script>";
        }}
    else
    {
        echo "<script>alert('Please enter password correctly');</script>";
    }

}
mysqli_close($connection);

?>

