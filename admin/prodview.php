<?php
// session_start();
// require_once('checksession.php');
include("header.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN:Manage Product</title>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container my-4">
		<h3>Products Available:</h3>
		<?php 
		include("dbconnect.php");
		$sql = "SELECT * from product";
		$result = mysqli_query($con,$sql);
		if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
  	?>
		<div class="row my-4">
			<div class="col-sm-1">
			<ul class="list-group">
			  <li class="list-group-item"><?php echo $row["id"];?></li>
			</ul>
			</div>
			<div class="col-sm-3">
				<ul class="list-group">
			  <li class="list-group-item"><?php echo $row["name"];?></li>
			</ul>
			</div>
			<div class="col-sm-1">
				<ul class="list-group">
			  <li class="list-group-item"><?php echo $row["clothfor"];?></li>
			</ul>
			</div>
			<div class="col-sm-1">
				<ul class="list-group">
			  <li class="list-group-item"><?php echo $row["price"];?></li>
			</ul>
			</div>
			<div class="col-sm-4">
				<ul class="list-group">
			  <li class="list-group-item"><?php echo $row["description"];?></li>
			</ul>
			</div>
			<div class="col-sm-2">
				<form method="POST" action="#">
					<input type="hidden" name="identity" value='<?php echo $row["id"];?>'>
					<input type="hidden" name="nam" value='<?php echo $row["name"];?>'>
					<button type="submit" class="btn btn-danger" name="delete">Delete</button>
				</form>
			</div>
		</div>
		<?php
		  }
	} else {
    echo "0 results";
	}
        if(isset($_POST['delete'])){
	 	$identity = $_POST['identity'];
	 	$nam = $_POST['nam'];
	 	$del  = "DELETE FROM product WHERE id=$identity";
	 	if (mysqli_query($con,$del)) {
	 		echo "Deleted ".$nam." from products";
	 		echo "<script>window.location.replace('prodview.php');</script>";
	 	}
	 	else{
	 		echo "<script>alert('Could not Deleted')</script>";
	 	}
    }
	?>
	</div>
</body>
</html>
