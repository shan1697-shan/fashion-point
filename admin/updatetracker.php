<?php
include("header.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tracker: Fashion Point</title>
</head>
<body>
	<div class="container my-4">
      <div class="row">
        
		<h1>Track Your Order: Fashion point</h1>
		<div class="col-md-8 order-md-1">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
			<form method="POST" acction="#">
				<div class="form-group">
			    <label for="orderid">Order Id:</label>
			    <input type="number" class="form-control" id="orderid" name="order_id">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Message:</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="msg">
			    </div>
			  
			  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
			</form>
		</div>
		</div>
	
		</div>
		</div>
	</div>
</div>
</body>
</html>
<?php
include("dbconnect.php");
if (isset($_POST["submit"])) {
	$order_id = $_POST['order_id'];
	$msg = $_POST['msg'];
	$sql = "INSERT INTO tracker (order_id,msg) VALUES ('$order_id','$msg')";
	if (mysqli_query($con,$sql)) {
	 	echo "<script>alert('Tracker for order id ".$order_id." has been updated Successfully.')</script>";
	 }
	 else{
	 	echo "<script>alert('Tracker Updation Failed.')</script>";
	 } 
}
?>