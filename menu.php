<?php 
	session_start();
	$connect= mysqli_connect("localhost", "root", "", "db_menu");
	if(isset($_POST["add_to_order"]))  
 	{  
      		if(isset($_SESSION["shopping_cart"]))  
      		{  
           		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           		if(!in_array($_GET["id"], $item_array_id))  
           		{  
                		$count = count($_SESSION["shopping_cart"]);  
                		$item_array = array(  
                     			'item_id'               =>     $_GET["id"],  
                     			'item_name'               =>     $_POST["hidden_name"],  
                     			'item_price'          =>     $_POST["hidden_price"],  
                     			'item_quantity'          =>     $_POST["quantity"]  
                		);  
                		$_SESSION["shopping_cart"][$count] = $item_array;  
           		}  
           		else  
           		{  
                		echo '<script>alert("Item Already Added")</script>';  
                		echo '<script>window.location="menu.php"</script>';  
           		}  
      		}  
      		else  
      		{  
           		$item_array = array(  
                		'item_id'               =>     $_GET["id"],  
                		'item_name'               =>     $_POST["hidden_name"],  
                		'item_price'          =>     $_POST["hidden_price"],  
                		'item_quantity'          =>     $_POST["quantity"]  
          		);  
          		$_SESSION["shopping_cart"][0] = $item_array;  
      		}  
	}  
	if(isset($_GET["action"]))  
 	{  
      		if($_GET["action"] == "delete")  
      		{  
           		foreach($_SESSION["shopping_cart"] as $keys => $values)  
           		{  
                		if($values["item_id"] == $_GET["id"])  
                		{  
                     			unset($_SESSION["shopping_cart"][$keys]);  
                     			echo '<script>alert("Item Removed")</script>';  
                     			echo '<script>window.location="menu.php"</script>';  
                		}  
           		}  
      		}  
 	}   
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=divice-width, initial-scale=1">
		<title>yummy4tummy
		</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<style>
			.btn{
				width:100%;
				text-align:center;
				color:lightgreen;
				margin-top:5px;
			}
		</style>
	</head>
	<body>
		<?php $page='menu';include'index.php';?>
		<div class="container" style="width:1250px;">
			<?php 
				$query = "select * from tbl_product";
				$result= mysqli_query($connect, $query);
				if(mysqli_num_rows($result)>0)
				{	
					while($row=mysqli_fetch_array($result))
					{
			?>
			<div class="col-md-4">
				<form method="post" action="menu.php?action=add&id=<?php echo $row["id"];?>">
					<div style="background-color:#f1f1f1; padding:16px;" align="center">
						<img src="<?php echo $row["product_image"];?>" class="img-responsive" style="width:100%; height:250px;"/><br>
						<h4 class="text-info"><?php echo $row["product_name"];?></h4>
						<h4 class="text-danger">Rs.<?php echo $row["product_price"] ?></h4>
						<input type="text" name="quantity" class="form-control" value="1"/><br>
						<input type="hidden" name="hidden_name" value="<?php echo $row["product_name"];?>"/>
						<input type="hidden" name="hidden_price" value="<?php echo $row["product_price"];?>"/>
						<input type="submit" name="add_to_order" style="margin-top:5px"; class="btn btn-success" value="Add to Order"/>
					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
			<div style="clear:both"></div>  
                	<br/> 
                </div>
	</body>
</html>