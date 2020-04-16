<?php
include("header.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Welcome To Admin Panel</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          
        </div>
        <div class="col-sm-4" style="margin-top: 80px;">
          <div class="row my-4">
            <div class="col-sm-6">
              <a href="addproduct.php"><button class="btn btn-primary form-control">Add New Product</button></a>
            </div>
            <div class="col-sm-6">
              <a href="prodview.php"><button class="btn btn-primary form-control">Manage Product</button></a>
            </div>
          </div>
          <div class="row my-4">
            <div class="col-sm-6">
              <a href="manageorder.php"><button class="btn btn-primary form-control">Manage Order</button></a>
            </div>
            <div class="col-sm-6">
              <a href="updatetracker.php"><button class="btn btn-primary form-control">Update Tracker</button></a>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <a href="contact.php"><button class="btn btn-primary form-control">Contact Update</button></a>
            </div>
            
          </div>
        </div>
        <div class="col-sm-4">
          
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
  </body>
</html>