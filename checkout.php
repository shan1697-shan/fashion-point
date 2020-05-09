<?php
include("extnd.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FashionPoint:Checkout</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style type="text/css">
      .container {
  max-width: 960px;
}

.lh-condensed { line-height: 1.25; }
    </style>
  </head>

  <body class="bg-light">

    <div class="container my-4">
      <div class="row">
        <div class="col-md-4 order-md-2 mb-4" >
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <?php 
            if ($logio=="LogIn/SignUp") {
               echo "<span class='text-muted'>Your cart</span>";
             }
             else{
                echo "<span class='text-muted'>".$_SESSION['name']."'s cart</span></span>";
             }
             ?>
            <span class="badge badge-secondary badge-pill" id="cartitem"></span>
          </h4>
          <ul class="list-group mb-3" id="citem">
          </ul>
          <ul class="list-group mb-3"><li class="list-group-item d-flex justify-content-between lh-condensed">
              Total <span class="text-muted">₹ <span id="cartamount"></span></span>
            </li></ul>
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Billing address</h4>
          <form class="needs-validation" action="#" method="POST" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <input type="hidden" name="allitems" id="allitems">
                <input type="hidden" name="amount" id="amount">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" name="fname" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" name="lname" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required>
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="mb-3">
              <label for="phone">Phone</label>
              <input type="tel" class="form-control" id="phone" name="phone" placeholder="9999XXXXXX" required>
              <div class="invalid-feedback">
                Please enter a valid phone number for shipping updates.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="mb-3">
              <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" name="address2" id="address2" placeholder="Apartment or suite">
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Country</label>
                <select class="custom-select d-block w-100" id="country" name="country" required>
                  <option value="">Choose...</option>
                  <option value="india">India</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">State</label>
                <select class="custom-select d-block w-100" id="state" name="state" required>
                  <option value="0">Choose...</option>
                  <option value="andhrapradesh">Andhra Pradesh</option>
                  <option value="arunachalpradesh">Arunachal Pradesh</option>
                  <option value="bihar">Bihar</option>
                  <option value="chhattisgarh">Chhattisgarh</option>
                  <option value="delhi">Delhi</option>
                  <option value="karnataka">Karnataka</option>
                  <option value="maharastra">Maharastra</option>
                  <option value="madhyapradesh">Madhya Pradesh</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" name="zip" placeholder="" required>
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
            </div>
            <hr class="mb-4">

            <h4 class="mb-3">Payment</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" value="credit" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="credit">Credit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" value="debit" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debit">Debit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="paypal" name="paymentMethod" value="paypal" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="paypal">PayPal</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="cod" name="paymentMethod" value="cod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="cod">Cash On Delivery</label>
              </div>
            </div>
           <!--  <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Name on card</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Credit card number</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                <div class="invalid-feedback">
                  Credit card number is required
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Expiration</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-cvv">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                <div class="invalid-feedback">
                  Security code required
                </div>
              </div>
            </div> -->
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Continue to checkout</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2020 Fashion Point</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
      if (localStorage.getItem('cart') == null) {
          var cart = {};
      } 
      else {
          cart = JSON.parse(localStorage.getItem('cart'));
      }
      var sum=0;
      var total =0;
      console.log(cart[0]);
      for (item in cart) {
        let name = cart[item][1];
        let qty = cart[item][0];
        let price = cart[item][2];
        sum += cart[item][0];
        total += price*qty
        mystr = `
          
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">${name}</h6>
                <small class="text-muted">Quantity: ${qty}</small>
              </div>
              <span class="text-muted">₹ ${price}</span>
            </li>
          `
          $('#citem').append(mystr);
      }
      document.getElementById("cartitem").innerHTML = sum;
      document.getElementById("cartamount").innerHTML = total;
      $('#amount').val(total);
      $('#allitems').val(JSON.stringify(cart));
    </script>

  </body>
</html>

<?php
include("dbconnect.php");
if (isset($_POST['submit'])) {
  $allitems = $_POST['allitems'];
  $amount = $_POST['amount'];
  $lname = $_POST['lname'];
  $fname = $_POST['fname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  // $address1 = $_POST['address'];
  // $address2 = $_POST['address2'];
  $address = $_POST['address'] ;
  $country = $_POST['country'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $paymode = $_POST['paymentMethod'];
  if ($amount>0) {
  
    $sql1 = "INSERT INTO orders (allitems,fname,lname,email,phone,amount,address,country,state,zip,paymode) VALUES ('$allitems','$fname','$lname','$email','$phone','$amount','$address','$country','$state','$zip','$paymode')";
    $sql = mysqli_query($con,$sql1);
     if($sql==True){
      $order_id = mysqli_insert_id($con);
      $msg = "Order has been placed";
      $sqltrack = "INSERT INTO tracker (order_id,msg) VALUES ('$order_id','$msg')";
      mysqli_query($con,$sqltrack);
      echo "<script>alert('Your order has been successfully placed. Your order id is ".$order_id."');
      </script>";
      ?>
      <script type="text/javascript">
        localStorage.clear();
        window.location.replace('index.php');

      </script>
      <?php
                  
    }
    else{
      echo "<script>alert('Your order has not been placed.');</script>";
    }
  }
  else{
    echo "<script>alert('Please select some items before checkout.');</script>";
  }
}
?>
