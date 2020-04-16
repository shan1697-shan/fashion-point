<?php
session_start();
if (!isset($_SESSION['name'])) 
{
	$logio = "LogIn/SignUp";
	
}
else{
	$logio = "LogOut";
	header("location:index.php");
}
include("dbconnect.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Login: Fashion Point</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/sign-in/">

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Favicons -->

<link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="admin/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin" method="POST" action="#">
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
  <button class="btn btn-lg btn-primary btn-block my-2" type="submit" name="submit">Sign in</button>
  <a href="register.php" style="text-decoration:none;">Create a new Account</a>
  <p class="mt-5 mb-3 text-muted">&copy; Fashion Point 2017-2020</p>
</form>
</body>
</html>
<?php
include("dbconnect.php");
if(isset($_POST["submit"])){
	
	$username = $_POST["email"];
	$pass = $_POST["password"];
	$sql = mysqli_query($con,"SELECT count(*) as total from user where email='".$username."' and password='".$pass."'") or die(mysqli_error($con));
	$rw = mysqli_fetch_array($sql);
	if ($rw['total']>0) {
		session_start();
		$sql1= "SELECT fname from user where email='".$username."' and password='".$pass."'";
		$result = mysqli_query($con,$sql1);
		$name = mysqli_fetch_assoc($result);
		$_SESSION['name']=$name["fname"];
		echo "<script>alert('welcome');</script>";
		header("location:index.php");
	}
	else{
		echo "<script>alert('error');</script>";
	}
}
?>