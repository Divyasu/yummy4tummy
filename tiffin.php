<?php 
	session_start();
	$connect= mysqli_connect("localhost", "root", "", "db_menu");
?>
<!Doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=divice-width, initial-scale=1">
		<title>yummy4tummy
		</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<Body>
		<?php $page='tiffin.php';include'index.php';?>
		<h3 style="padding:10px; text-align:center;">Order Details</h3>  
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
					$_SESSION['sum']=$total;
                          		}  
                          	?>  
                     	</table> 
		</div>
		<button onClick="window.location.href='payment.php'">Proceed Payment
		</button>
	</Body>
</html>
