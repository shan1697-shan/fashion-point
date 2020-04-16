<?php
include("extnd.php");
include ("dbconnect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tracker: Fashion Point</title>
</head>
<body>
	<div class="container my-4">
      <div class="row">
		<div class="col-md-8 order-md-1">
			<h1>Track Your Order: Fashion point</h1>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
			<form method="POST" acction="#">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email address:</label>
			    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
			    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>
			  <div class="form-group">
			    <label for="orderid">Order Id:</label>
			    <input type="number" class="form-control" id="orderid" name="order_id">
			  </div>
			  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
			</form>
		</div>
		</div>
		<div class="row my-4">
		<h1>Your Order Status is:</h1>
	</div>
	
		
		<?php
		if (isset($_POST["submit"])) {
			$email = $_POST["email"];
			$order_id = $_POST["order_id"];
			$sql = "SELECT id,msg FROM tracker where order_id= '".$order_id."'";
			$query = mysqli_query($con,$sql);
			if (mysqli_num_rows($query) > 0) {
    // output data of each row
				$i = 1;
		    while($row = mysqli_fetch_assoc($query)) {
		    	echo '<div class="row my-2"><nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item active" aria-current="page">'.$i.'. '.$row["msg"].'</li>
		  </ol>
		</nav></div>';
			$i++;	}
			}
		}
		?>
		
		</div>
		</div>
		<div class="col-md-4 order-md-2 my-2">
			<h3>Your Orders:</h3>
			<?php
			include("dbconnect.php");
			if (isset($_POST["submit"])) {
				$email = $_POST["email"];
				$order_id = $_POST["order_id"];
				$sql1 = "SELECT allitems FROM orders where id='".$order_id."'";
				$query1 = mysqli_query($con,$sql1);
				if (mysqli_num_rows($query1)>0) {
					while ($row = mysqli_fetch_assoc($query1)) {
						echo $row["allitems"];
						
			}
		}
	}
	?>

		<li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">${name}</h6>
                <small class="text-muted">Quantity: ${qty}</small>
              </div>
              <span class="text-muted">₹ ${price}</span>
            </li>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>
</body>
</html>