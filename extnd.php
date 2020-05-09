<?php
session_start();
include("checksession.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/carousel/">

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Favicons -->

<link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="index.php">Fashion Point</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tracker.php">Tracker</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactus.php">Contact Us</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Category
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="men.php">Men</a>
          <a class="dropdown-item" href="women.php">Women</a>
          <a class="dropdown-item" href="child.php">Children</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="yourdesign.php">Your Design</a>
          <a class="dropdown-item" href="booktailor.php">Book Tailor</a>
        </div>
      </li>
      <form class="form-inline mt-2 mt-md-0 mx-2" action="search.php" method="POST">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Search</button>
      </form>
      </ul>
      <?php
      if ($logio=="LogIn/SignUp") {
         echo "<a href='login.php'><button class='btn btn-outline-info my-2 my-sm-0 mx-2' type='submit'>".$logio."</button></a>";
       }
       else{
          echo "<span style='color:white'>Welcome ".$_SESSION['name']."</span> <a href='logout.php'><button class='btn btn-outline-danger my-2 my-sm-0 mx-2' type='submit'>".$logio."</button></a>";
       }
       ?>
       <button type="button" class="btn btn-primary mx-1" id="pcart" data-container="body" data-toggle="popover" data-html="true" data-placement="bottom" data-trigger="focus" title="Your Cart" data-content="Vivamus
        sagittis lacus vel augue laoreet rutrum faucibus.">
                Cart(<span id="cart">0</span>)
            </button>
    </div>

  </nav>
</header>

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</html>
<script type="text/javascript">
   $('.dropdown').click(function(){

       $('.dropdown-menu').toggleClass('show');

   });
</script>
<script type="text/javascript">
  if (localStorage.getItem('cart') == null) {
        var cart = {};
    } 
    else {
        cart = JSON.parse(localStorage.getItem('cart'));
        var sum=0;
        for (var items in cart) {
          sum += cart[items][0]
        }
        document.getElementById('cart').innerHTML = sum;
        var popstr="";
        popstr = popstr + "<div class='mx-2 my-2'>";
        var i=1;
        for(var item in cart){
          var check = cart[item];
            popstr = popstr + "<b>" + i + ". </b>";
            popstr = popstr + cart[item][1].slice(0,20) +"... Qty: " + cart[item][0] + "<br>";
            i =i +1;
        }
        popstr = popstr + '</div> <a href="checkout.php"><button class="btn btn-primary" id="checkout">CheckOut</button></a>  <button class="btn btn-primary" onclick="clearcart()" id="clearcart">Clear Cart</button>';
        document.getElementById("pcart").setAttribute("data-content", popstr);
        $("#pcart").popover('show');
    }
    function clearcart(){
      localStorage.clear();
      cart = {};
    }
</script>
