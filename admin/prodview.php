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
					<input type="button" class="btn btn-danger" name="delete" value="Delete">
				</form>
			</div>
		</div>
		<?php
		  }
	} else {
    echo "0 results";
	}
	if($_POST){
    if(isset($_POST['delete'])){
        delete();
    }//elseif(isset($_GET['select'])){
        //select();
    //}
	}

    function delete()
    {
    	$delete1 =("DELETE FROM product WHERE id = '$id'");
        $result = mysqli_query($con,$delete1) or die(mysqli_error());
        
	echo "record deleted";
   
    }
	?>
	</div>
</body>
</html>