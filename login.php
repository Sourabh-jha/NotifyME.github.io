<?php
include 'dbconnect.php';
session_start();
if(isset($_POST['slogin']))
{
    $user_id = mysqli_real_escape_string($connection,$_POST['email']);
    $password =mysqli_real_escape_string($connection,$_POST['pswd']);
    $sql="SELECT * FROM student WHERE email='$user_id' and password='$password'";
    $result= mysqli_query($connection,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if($count==1)
    {
        $_SESSION['login_student']=$user_id;
        header("location:s_dashboard.php");
    }
    else
    {
        echo "<script>alert('Invalid username or password! Please try again.');</script>";		
    }}

else if(isset($_POST['tlogin']))
{
    $user_id = mysqli_real_escape_string($connection,$_POST['email']);
    $password =mysqli_real_escape_string($connection,$_POST['pswd']);
    $sql="SELECT * FROM teacher WHERE email='$user_id' and password='$password'";
    $result= mysqli_query($connection,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if($count==1)
    {
        $_SESSION['login_faculty']=$user_id;
        header("location:f_dashboard.php");
    }
    else
    {
        echo "<script>alert('Invalid username or password! Please try again.');</script>";		
    }}
else if(isset($_POST['signup']))
{
    $sname = $_POST['name'];
    $mail = $_POST['email'];
    $pswrd = $_POST['pwd'];
    $null=null;
    $phn = $_POST['phn'];
    $branch=$_POST['branch'];
    $course =$_POST['course'];
    $sql = "INSERT INTO student VALUES ('".$sname."','".$mail."','".$phn."','".$branch."','".$course."','".$pswrd."')";
    if( mysqli_query($connection, $sql)){
        echo "<script>alert('Sign_up completed.');</script>";	

    }
    else
    {
        echo "<script>alert('Something went wrong try again latter.');</script>";
    }
}

?>