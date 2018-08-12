<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
   <link href="login/abootstrap.min.css" rel="stylesheet">-->
  <!-- Custom fonts for this template-->
<link href="login/afont.css" rel="stylesheet" type="text/css">
  <!--Custom styles for this template-->
  <link href="login/alogin.css" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    </head>
<body class="bg-dark" background="login/back1.jpg">
    <?php include 'login.php'; ?>
    
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form method="post" action="">
          <div class="form-group">
            <label >Email address</label>
            <input class="form-control" name="email" type="text" aria-describedby="emailHelp" placeholder="Enter email" required/>
          </div>
          <div class="form-group">
            <label >Password</label>
            <input class="form-control" name="pswd" type="password" placeholder="Password" required/>
          </div>
          <input class="btn btn-primary btn-block" type="submit" name="slogin" value="Student Login" />
            <input class="btn btn-info btn-block"  type="submit" name="tlogin" value="Faculty Login" />
		  <a class="btn btn-warning btn-block" style="width:48%;float:left;margin-right:1px;" href="home.php">Back</a>
          <input class="btn btn-danger btn-block" type="reset" style="width:48%;float:right;margin-left: 1px;" name="Reset" value="Reset"> 
        </form>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <!--<script src="admin/vendor/jquery/jquery.min.js"></script>
  <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   Core plugin JavaScript-->
  <!--<script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>-->
</body>

</html>
