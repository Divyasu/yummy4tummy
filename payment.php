<?php 
	session_start();
	$connect= mysqli_connect("localhost","root","", "db_menu");
?>
<html>
	<head>
		<title>payment</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<style>
			.row {
				  display:-ms-flexbox; /* IE10 */
				  display:
flex;
				  -ms-flex-wrap: wrap; /* IE10 */
				  flex-wrap: wrap;
				  margin: 0 -16px;
			}

			.col-25 {
				  -ms-flex: 25%; /* IE10 */
				  flex: 25%;
			}

			.col-50 {
				  -ms-flex: 50%; /* IE10 */
				  flex: 50%;
			}

			.col-75 {
				  -ms-flex: 75%; /* IE10 */
				  flex: 75%;
			}

			.col-25,
			.col-50,
			.col-75 {
				  padding: 0 16px;
			}

			.container {
				  background-color: #f2f2f2;
				  padding: 5px 20px 15px 20px;
				  border: 1px solid lightgrey;
				  border-radius: 3px;
			}

			input[type=text] {
				  width: 100%;
				  margin-bottom: 20px;
				  padding: 12px;
				  border: 1px solid #ccc;
				  border-radius: 3px;
			}

			label {
				  margin-bottom: 10px;
				  display: block;
			}

			.icon-container {
				  margin-bottom: 20px;
				  padding: 7px 0;
				  font-size: 24px;
			}

			.btn {
				  background-color: #4CAF50;
				  color: white;
				  padding: 12px;
				  margin: 10px 0;
				  border: none;
				  width: 100%;
				  border-radius: 3px;
				  cursor: pointer;
				  font-size: 17px;
			}

			.btn:hover {
				  background-color: #45a049;
			}

			span.price {	
				  float: right;
				  color: grey;
			}

		</style>
	</head>
	<body>
	 	<div class="row">
	 	 <div class="col-75">
	 	   <div class="container">
	 	     <form action="validate1.php" method="post">
	
	 	       <div class="row">
	 	         <div class="col-50">
	 	           <h3>Billing Address</h3>
	 	           <label for="fname"><i class="fa fa-user"></i> Full Name</label>
	 	           <input type="text" id="fname" name="firstname" placeholder="Full Name">
	 	           <label for="email"><i class="fa fa-envelope"></i> Email</label>
	 	           <input type="text" id="email" name="email" placeholder="Email">
	 	           <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
	 	           <input type="text" id="adr" name="address" placeholder="Address">
	 	           <label for="city"><i class="fa fa-institution"></i> City</label>
	 	           <input type="text" id="city" name="city" placeholder="City">
	
	 	           <div class="row">
	 	             <div class="col-50">
	 	               <label for="state">State</label>
	 	               <input type="text" id="state" name="state" placeholder="State">
	 	             </div>
	 	             <div class="col-50">
	 	               <label for="zip">Pincode</label>
	 	               <input type="text" id="zip" name="zip" placeholder="Pincode">
	 	             </div>
	 	           </div>
	 	         </div>
		
	 	         <div class="col-50">
	 	           <h3>Payment</h3>
	 	           <label for="fname">Accepted Cards</label>
	 	           <div class="icon-container">
	 	             <i class="fa fa-cc-visa" style="color:navy;"></i>
	 	             <i class="fa fa-cc-amex" style="color:blue;"></i>
	 	             <i class="fa fa-cc-mastercard" style="color:red;"></i>
	 	             <i class="fa fa-cc-discover" style="color:orange;"></i>
	 	           </div>
	 	           <label for="cname">Name on Card</label>
	 	           <input type="text" id="cname" name="cardname" placeholder="Name on Card">
	 	           <label for="ccnum">Credit card number</label>
	 	           <input type="text" id="ccnum" name="cardnumber" placeholder="Credit card number">
	 	           <label for="expmonth">Exp Month</label>
	 	           <input type="text" id="expmonth" name="expmonth" placeholder="Exp month">

	 	           <div class="row">
	 	             <div class="col-50">
	 	               <label for="expyear">Exp Year</label>
	 	               <input type="text" id="expyear" name="expyear" placeholder="Exp year">
	 	             </div>
	 	             <div class="col-50">
	 	               <label for="acc">CVV</label>
	 	               <input type="text" id="cvv" name="cvv" placeholder="CVV">
	 	             </div>
	 	           </div>
	 	         </div>

	 	       </div>
	 	       <label>
	 	         <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
	 	       </label>
	 	       <button onClick="window.location.href='refund.php'" class=btn>Continue to Checkout
		</button>
	 	     </form>
	 	   </div>
	 	 </div>
	
	

  <div class="col-25">
    <div class="container">
      <h4>Cart
        <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i>
        </span>
      </h4>
     		 <div class="table-responsive">  
                     	<table class="table table-bordered" style="margin:20px; width:80%;">  
                          	<tr>  
                               		<th width="40%">Item Name</th>  
                               		<th width="10%">Quantity</th>  
                               		<th width="20%">Price</th>  
                               		<th width="15%">Total</th>  
                               		<th width="5%">Action</th>  
                          	</tr>  
                          		<?php   
                          		if(!empty($_SESSION["shopping_cart"]))  
                          		{  
                               			$total = 0;  
                               			foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               			{  
                          		?>  
                          	<tr>  
                               		<td><?php echo $values["item_name"]; ?></td>  
                               		<td><?php echo $values["item_quantity"]; ?></td>  
                               		<td>Rs.<?php echo $values["item_price"]; ?></td>  
                               		<td>Rs.<?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                               		<td><a href="menu.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          	</tr>  
                          		<?php  
                                    			$total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               			}  
                          		?>  
                          	<tr>  
                               		<td colspan="3" align="right">Total</td>  
                               		<td align="right">Rs. <?php echo number_format($total, 2); ?></td>  
                               		<td></td>  
                          	</tr>  
                          	<?php  
                          		}  
                          	?>  
                     	</table> 
		</div>
    </div>
  </div>
</div> 
</body>
</html>	
