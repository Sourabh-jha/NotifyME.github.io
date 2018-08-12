<!DOCTYPE html>
<html>
<head>
<title>SingUP</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
    .status-available{color:#2FC332;}
.status-not-available{color:#D60202;}
</style>

<link href="signup/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
function checkAvailability() {
	$("#loaderIcon").show();
	jQuery.ajax({
	url: "signup/check_availability.php",
	data:'email='+$("#email").val(),
	type: "POST",
	success:function(data){
		$("#user-availability-status").html(data);
		$("#loaderIcon").hide();
	},
	error:function (){}
	});
    
}

   // }
    
    var check=function(){
        if(document.getElementById('psd').value == document.getElementById('cnfp').value ){
            document.getElementById('passwordcheck').style.color='green';
            document.getElementById('passwordcheck').innerHTML='<b>Matched</b>';
        }
        else
            {
            document.getElementById('passwordcheck').style.color='red';
            document.getElementById('passwordcheck').innerHTML='<b>Not Matching</b>';
    }
    }
    
    
</script>
    
    </head>

<body style="background-image:url(signup/bg.jpg);">
     <?php include 'login.php'; ?>
	<!-- main -->
	<div class="main main-agileits">
		<h1>Sign Up</h1>
		<div class="main-agilerow"> 
			<div class="signup-wthreetop">
				<h2>Welcome to Registration</h2>
				<p>Enter your credentials...</p>
			</div>	
			<div class="contact-wthree">
				<form action="signup.php" method="post">
					<div class="form-w3step1">
						<input type="text" name="name" placeholder="Your Name" required=""> 
						<input type="email" id="email" class="email" name="email" placeholder="Email" required="" required="" onBlur="checkAvailability()"><span id="user-availability-status"></span>
                        <p><img src="LoaderIcon.gif" id="loaderIcon" style="display:none" /></p> 
						<input type="password" id="psd" name="pwd"  placeholder="Password" onkeyup='check();' required="">
                        <input type="password" id="cnfp" class="" name="cpwd" placeholder="Confirm Password" onkeyup='check();' required="" ><span id="passwordcheck"></span><p></p>
						<input type="text" name="phn" placeholder="Mobile number" required="">
                        <input type="text" name="branch" placeholder="Branch (e.g, CSE|ISE|ME|EEE)" required="">
                        <div class="checkbox" style="color: white" >
                        <label><input type="checkbox" value="B.E" name="course" >B.E</label>
                        <label><input type="checkbox" value="M.E" name="course" >M.E</label>
                        <label><input type="checkbox" value="BCA" name="course">BCA</label>
                        <label><input type="checkbox" value="MCA" name="course">MCA</label>
                        </div>
					</div>
					<div class="agileits-row2 w3ls-formrow2">
						<input type="checkbox" id="brand2" value="" required>
						<label for="brand2"><span></span>I accept the terms of Use</label> 
					</div>  
					<input type="submit" value="SingUP" name="signup">
				</form>
			</div>  
		</div>	
	</div>	
</body>
</html>