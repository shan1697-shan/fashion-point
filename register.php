<!DOCTYPE html>
<html>
<head>
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
	<title>Register: Fashion Point</title>
	<link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/sign-in/">

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Favicons -->

<link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">

</head>
<body class="text-center" style="background-attachment: fixed; background-image: url('images/e.jpg')">
	<div class="container my-5">
		<h1>Fashion Point: Registration form</h1>
		<div class="row my-4">
			<div class="col-sm-2">
				
			</div>
			<div class="col-sm-8 cont">
				<form method="POST" action="#">
					<div class="row my-4">
						<div class="col-md-3"></div>
					   <div class="col-md-6">
					     	<input type="text" class="form-control" placeholder="First name" name="fname" required>
					    </div>
					    <div class="col-md-3"></div>
					</div>
					<div class="row">
						<div class="col-md-3"></div>
					    <div class="col-md-6">
					      	<input type="text" class="form-control" placeholder="Last name" name="lname">
					    </div>
					    <div class="col-md-3"></div>
					    </div>
						<div class="row" style="margin-top: 20px;">
							<div class="col-md-3"></div>
					    <div class="form-group col-md-6">
					      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email" required>
					    </div>
					    <div class="col-md-3"></div>
					</div>
					<div class="row">
						<div class="col-md-3"></div>
					    <div class="form-group col-md-6">
					      <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
					    </div>
					    <div class="col-md-3"></div>
					  </div>
					  <div class="row">
					  	<div class="col-md-3"></div>
					  	<div class="form-group col-md-6">
					  		<input type="date" class="form-control" name="dob" placeholder="D.O.B:YYYY-MM-DD" required>
					  	</div>
					  	<div class="col-md-3"></div>
					  </div>
					  <div class="row">
					  	<div class="col-md-3"></div>
					  	<div class="form-group col-md-6">
					  		<input type="tel" name="phone" class="form-control" placeholder="Phone Number" name="phone" required>
					  	</div>
					  	<div class="col-md-3"></div>
					  </div>
					  <button type="submit" class="btn btn-primary" name="submit">Sign Up</button>
				</form>
			</div>
			<div class="col-sm-2">
				
			</div>
		</div>
	</div>
	
</body>
</html>
</head>
<?php
include("dbconnect.php");
if (isset($_POST['submit'])) {
	$lname = $_POST['lname'];
	$fname = $_POST['fname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$dob = $_POST['dob'];
	$phone = $_POST['phone'];
	$sql = mysqli_query($con,"INSERT INTO user (fname,lname,email,password,dob,phone) VALUES ('$fname','$lname','$email','$password','$dob','$phone')") or die(mysqli_error($con));
	 if($sql==True){
    echo "<script>alert('Inserted Successfully');</script>";
    header("location:index.php");            
  }
  else{
    echo "<script>alert('Error-Registration Failed!!');</script>";
  }
}
?>