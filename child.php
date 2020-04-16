<?php
include("extnd.php")
?>
<head>
	<title>Children: Fashion Point</title>
</head>
<body>
	<div class="container">
		<div class="row my-4" style="text-align: center; margin-left: 50px;">
			<?php
			include("dbconnect.php");
			$sql = "SELECT * from product WHERE clothfor='children'";
			$result = mysqli_query($con,$sql);
			if (mysqli_num_rows($result) > 0) {
    		// output data of each row
    		while($row = mysqli_fetch_assoc($result)) {
    			?>
				<div class="col-sm-3 mx-3 my-2">
					<div class="card" style="width: 18rem;">
  					<img src="<?php echo $row["image"];?>" class="card-img-top" alt="..." style="max-height:250px; max-width:85%; margin-left:7%;">
  					<div class="card-body">
    				<h5 class="card-title" id="namepr<?php echo $row['id']?>"><?php echo substr($row["name"],0,20);?>...</h5>
    				<p class="card-text">₹ <span id="pricepr<?php echo $row['id']?>"><?php echo $row["price"];?></span></p>
    				<p class="card-text"><?php echo substr($row["description"],0,20);?>...</p>
    				<div class="row" style="margin-left: 15px;">
    				<span id="divpr<?php echo $row['id']?>" class="divpr">
    					<button class="btn btn-primary cart" id="pr<?php echo $row['id']?>">Add To Cart</button>
    				</span>
    				<form method="POST" action="checkout.php">
    				<input type="hidden" name="fet" value="<?php echo $row['id'];?>">
    				<button class="btn btn-primary mx-1" type="submit" name="submit">Buy Now</button>
    				</form>
    				</div>
  					</div>
					</div>
					</div>
			<?php
			 }
	} else {
    echo "0 results found";
	}
	
	if (isset($_POST["submit"])) {
		$buyid = $_POST["fet"];
		
	}
	?>
		
		</div>
	</div>

</body>
</html>
<?php
include("footer.php")
?>
<script type="text/javascript">
		console.log("working");
		if (localStorage.getItem('cart') == null) {
    var cart = {};
} 
else {
    cart = JSON.parse(localStorage.getItem('cart'));
    //document.getElementById('cart').innerHTML = Object.keys(cart).length;
    //$("button").click(function() {
    //location.reload(true);
    //});
    update(cart);
}
// $('.cart').click(function() {
$('.divpr').on('click', 'button.cart', function(){

    var idstr = this.id.toString();
    console.log(idstr);
    if (cart[idstr] != undefined) {
        qty = cart[idstr][0] + 1;
        name = cart[idstr][1];
        cart[idstr] = [qty, name];
    } else {
      qty = 1;
      name = document.getElementById('name'+ idstr).innerHTML;
      price = document.getElementById('price'+ idstr).innerHTML;
      cart[idstr] = [qty, name, parseInt(price)];
    }
    update(cart);
    localStorage.setItem('cart', JSON.stringify(cart));
    document.getElementById('cart').innerHTML = Object.keys(cart).length;

	});
	$("#pcart").popover();
	//document.getElementById("pcart").setAttribute("data-content", '<h5>Cart</h5>');
	updatepopover(cart);
	function updatepopover(cart){
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
	  $.fn.tooltip.Constructor.Default.whiteList.button = [];
	}
	function update(cart) {
	    var sum=0;
	    for (var item in cart) {
	      sum = sum+cart[item][0];
	    }
	    localStorage.setItem('cart', JSON.stringify(cart));
	    document.getElementById('cart').innerHTML = sum;
	    updatepopover(cart);
	}
	 function clearcart(){
      localStorage.clear();
      cart = {};
      
    }

	//If + or - button is clicked change the value
	$('.divpr').on("click","button.minus",function()
	{
	  a=this.id.slice(7, );
	  cart['pr'+a][0] = cart['pr'+a][0] -1;
	  cart['pr'+a][0] = Math.max(0, cart['pr'+a][0]);
	  document.getElementById('valpr'+a).innerHTML=cart['pr'+a][0];
	  update(cart);
	});
	$('.divpr').on("click","button.plus",function()
	{
	  a=this.id.slice(6, );
	  cart['pr'+a][0] = cart['pr'+a][0] +1;
	  document.getElementById('valpr'+a).innerHTML=cart['pr'+a][0];
	  update(cart);
	});

	</script>

	