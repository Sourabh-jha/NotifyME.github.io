<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>SB Admin - Start Bootstrap Template</title>
        <link href="login/abootstrap.min.css" rel="stylesheet">-->
        <!-- Custom fonts for this template-->
        <link href="login/font.css" rel="stylesheet" type="text/css">
        <!--Custom styles for this template-->
        <link href="login/alogin.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    </head>
    <?php 
    if(isset($_POST['login']))
    {
        if($_POST['email']=="hello@umail.com" && $_POST['pswd']=="login")
        {
            header("location:admin_dashboard.php");
        }
        else
        {
            echo "<script>alert('Invalid username or password! Please try again.');</script>";		
        }
    }
    ?>-->

    <body class="bg-dark" background="login/bg1.jpg">
        <div class="container">
            <div class="card card-login mx-auto mt-5">
                <div class="card-header">Login</div>
                <div class="card-body" style="background-color: darkgray">
                    <form method="post" action="alogin.php">
                        <div class="form-group">
                            <label >Email address</label>
                            <input class="form-control" name="email" type="text" aria-describedby="emailHelp" placeholder="Enter email" required/>
                        </div>
                        <div class="form-group">
                            <label >Password</label>
                            <input class="form-control" name="pswd" type="password" placeholder="Password" required/>
                        </div>
                        <input class="btn btn-primary btn-block" type="submit" name="login" value="Login" />
                        <a class="btn btn-primary btn-block" style="width:48%;float:left;margin-right:1px;" href="home.php">Back</a>
                        <input class="btn btn-primary btn-block" type="reset" style="width:48%;float:right;margin-left: 1px;" name="Reset" value="Reset"> 
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
