<?php
include("extnd.php");
?>
<div class="container my-4">
    <div class="row">
        <div class="col-sm-2">

        </div>

        <div class="col-lg-8 col-md-8 contact-form-txt">
            <h3>Contact Us</h3>
            <form action="#" method="POST">
              <div class="w3pvt-wls-contact-mid">
                <div class="form-group contact-forms">
                    <label for="name">Name:</label><br>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="">
                </div>
                <div class="form-group contact-forms">
                    <label for="email">Email:</label><br>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
                </div>
                <div class="form-group contact-forms">
                    <label for="phone">Phone Number:</label><br>
                  <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone" required="">
                </div>
                <div class="form-group contact-forms">
                    <label for="msg">Your Message:</label><br>
                  <textarea class="form-control" id="msg" placeholder="Message" name="msg" rows="3" required=""></textarea>
                </div>
                <input  type="submit"  name ="submit" class="btn btn-success" value="send">
              </div>
            </form>
        </div>

    </div>
</div>
<?php
include("footer.php");
include("dbconnect.php");
if(isset($_POST["submit"])){
	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$msg = $_POST["msg"];
	$sql = mysqli_query($con,"INSERT INTO contact (name,email,phone,msg) VALUES ('$name','$email','$phone','$msg')") or die(mysqli_error($con));
if($sql==True){
    echo "<script>alert('Your message has been recieved. We will contact you soon!');
    window.location.replace('index.php');</script>";          
  }
  else{
    echo "Not Inserted";
  }
}
?>