<?php
session_start();
if (isset($_SESSION['admin'])) 
{
	header("location:main.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body class="text-center" style="background-color: var(--light);">
	<div class="container text-center" style="margin-top: 150px;">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4" style="box-shadow: 1px 1px 1px 1px; min-height: 200px;">
				<label>Admin LOGIN:</label><br>
	<form class="form-signin" method="POST" action="#">

		<input type="text" name="uname" class="form-control" placeholder="Username"><br>

		<input type="password" name="password" class="form-control" placeholder="Password"><br>
		<input class="btn btn-primary" type="submit" name="submit">
	</form>
	</div>
	<div class="col-sm-4"></div>
	</div>
	</div>
</body>
</html>
<?php
include("dbconnect.php");
if(isset($_POST["submit"])){
	
	$username = $_POST["uname"];
	$pass = $_POST["password"];
	$sql = mysqli_query($con,"SELECT count(*) as total from admin where name='".$username."' and passwrd='".$pass."'") or die(mysqli_error($con));
	$rw = mysqli_fetch_array($sql);
	if ($rw['total']>0) {
		session_start();
		$_SESSION['admin']=$username;
		echo "<script>alert('welcome');</script>";
		header("location:main.php",2);
	}
	else{
		echo "<script>alert('error');</script>";
	}
}
?>