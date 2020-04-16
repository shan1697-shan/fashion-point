<?php
include("header.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add New Product</title>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	 <div class="cantainer">
	 	<div class="row">
	 		<div class="col-sm-2">
	 			
	 		</div>
	 		<div class="col-sm-8">
	<form method="POST" action="#" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="text" class="form-control" id="prod_name" name="prod_name" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Category</label>
      <input type="text" class="form-control" id="prod_cat" name="prod_cat" required>
    </div>
  </div>
  <div class="row">
   <div class="form-group col-md-6">
      <label for="inputPassword4">Price</label>
      <input type="number" class="form-control" id="prod_price" name="prod_price" required>
    </div>

   <div class="form-group col-md-6">
      <label for="inputPassword4">Image</label>
      <input type="file" class="form-control" id="prod_image" name="prod_image" required>
    </div>
    </div>
     <div class="form-group">
    <label for="exampleFormControlSelect1">Cloth For</label>
    <select class="form-control" id="clothfor" name="clothfor">
      <option value="0">Select...</option>
      <option value="men">Men</option>
      <option value="women">Women</option>
      <option value="childdren">Children</option>
    </select>
  </div>
   <div class="form-group col-md-12">
      <label for="inputPassword4">Description</label>
      <textarea type="text" class="form-control" id="prod_desc" name="prod_desc" rows="3" required></textarea> 
    </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
	 <div class="col-sm-2">
	 	
	 </div>
	 	</div>
	 </div>

</body>
</html>
<?php
include("dbconnect.php");
if (isset($_POST["submit"])) {
	$file_name = $_FILES['prod_image']['name'];
	$file_tem_loc = $_FILES['prod_image']['tmp_name'];
	$file_store = "images/".$file_name;
	echo $file_store;
	if(!move_uploaded_file($file_tem_loc, $file_store)){
		echo "<script>alert('error in uploading image');</script>";
	}
	$name = $_POST["prod_name"];
	$category = $_POST["prod_cat"];
	$price = $_POST["prod_price"];
	$clothfor = $_POST["clothfor"];
	$description = $_POST["prod_desc"];

	$sql1 = "INSERT INTO product (name, category, image, price, clothfor, description) VALUES ('$name','$category','admin/"."$file_store', '$price','$clothfor', '$description')";
	$success=mysqli_query($con,$sql1);
  if($success==True){
    echo "<script>alert('Inserted Successfully');</script>";             
  }
  else{
    echo "Not Inserted";
  }
  mysqli_close($con);
}


?>