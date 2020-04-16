<?php
include("header.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Msges</title>
</head>
<body>
	<div class="container-fluid my-4">
		<h3>Contact Messages:</h3>
		<?php 
		include("dbconnect.php");
		$sql = "SELECT * from contact";
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
			<div class="col-sm-2">
				<ul class="list-group">
				  <li class="list-group-item"><?php echo $row["name"];?></li>
				</ul>
			</div>
			<div class="col-sm-3">
				<ul class="list-group">
				  <li class="list-group-item"><?php echo $row["email"];?></li>
				</ul>
			</div>
			<div class="col-sm-2">
				<ul class="list-group">
				  <li class="list-group-item"><?php echo $row["phone"];?></li>
				</ul>
			</div>
			<div class="col-sm-3" >
				<ul class="list-group">
				  <li class="list-group-item" style="height: 100px;"><?php echo $row["msg"];?></li>
				</ul>
			</div>
			<div class="col-sm-1">
				<form method="POST" action="#">
					<input type="button" class="btn btn-outline-info" name="reply" value="reply">
				</form>
			</div>
		</div>
		<?php
		  }
	} else {
    echo "0 results";
	}
	?>
	</div>
</body>
</html>