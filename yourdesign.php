<?php
include("extnd.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Your Design:Fashion Point</title>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	 <div class="cantainer my-3">
	 	<div class="row">
	 		<div class="col-sm-3">
	 			
	 		</div>
	 		<div class="col-sm-8">
        <h2>SELECT YOUR DESIGN</h2>
	<form method="POST" action="#" enctype="multipart/form-data">
    <div class="form-row">
      <div class="form-group col-md-5">
        <label>Customer Name:</label>
        <input type="text" name="name" placeholder="Your Name" class="form-control" required>
      </div>
      <div class="form-group col-md-5">
        <label>Customer Email:</label>
        <input type="email" name="email" placeholder="Your Email" class="form-control" required>
      </div>
    </div>
  <div class="form-row">
    <div class="form-group col-md-5">
      <label >Cloth Type</label>
      <select class="form-control" name="clothtype" required>
          <option value="0">Select an Option</option>
          <option value="cotton">Cotton</option>
          <option value="silk">Silk</option>
          <option value="polyester">Polyester</option>
          <option value="nylon">Nylon</option>
      </select>
    </div>
    <div class="form-group col-md-5">
      <label for="inputPassword4">Category</label>
      <select class="form-control" name="category" required>
          <option value="0">Select an Option</option>
          <option value="shirt">Shirt</option>
          <option value="pant">Pant</option>
          <option value="salwar">Salwar Suit</option>
          <option value="kurti">Kurti</option>
          <option value="t-shirt">T-Shirt</option>
          <option value="kurta">Kurta</option>
      </select>
    </div>
  </div>
  <div class="row">

   <div class="form-group col-md-5">
      <label for="inputPassword4">Image</label>
      <input type="file" class="form-control" id="prod_image" name="prod_image" required>
    </div>
     <div class="form-group col-md-5">
    <label for="exampleFormControlSelect1">Cloth For</label>
    <select class="form-control" id="clothfor" name="clothfor" required>
      <option value="0">Select...</option>
      <option value="men">Men</option>
      <option value="women">Women</option>
      <option value="childdren">Children</option>
    </select>
  </div>
  </div>
   <div class="form-group col-md-10">
      <label for="inputPassword4">Describe Your Design</label>
      <textarea type="text" class="form-control" id="prod_desc" name="prod_desc" rows="3" required></textarea> 
    </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
	 <div class="col-sm-1">
	 	
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
	$file_store = "admin/images/".$file_name;
	echo $file_store;
	if(!move_uploaded_file($file_tem_loc, $file_store)){
		echo "<script>alert('error in uploading image');</script>";
	}
  $name = $_POST["name"];
  $email = $_POST["email"];
	$ctype = $_POST["clothtype"];
	$category = $_POST["category"];
	$clothfor = $_POST["clothfor"];
	$description = $_POST["prod_desc"];

	$sql1 = "INSERT INTO custdesign (name, email, ctype, category, image, clothfor, description) VALUES ('$name','$email','$ctype','$category','$file_store','$clothfor', '$description')";
	$success=mysqli_query($con,$sql1);
  if($success==True){
    echo "<script>alert('Your Design has been Successfully delvered. We will notify you soon.');
    window.location.replace('index.php');</script>";             
  }
  else{
    echo "<script>alert('Error');</script>";
  }
  mysqli_close($con);
}


?>