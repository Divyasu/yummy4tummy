<?php
	session_start();
	$con=mysqli_connect("localhost","root","","db_menu");
	$total=$_SESSION['sum'];
	
	if ($con) {
    		/*echo "connected";*/
	}
/*supplier_ac*/	
	$date=date("y-m-d");
	$bal="Select Balance from supplier_ac order by id desc";
	$query=mysqli_query($con,$bal);
	$row=mysqli_fetch_assoc($query);

	$balance=$row['Balance'];
	
	$sql="insert into supplier_ac VALUES(NULL,131111,'$date','debit',$total,$balance-$total)";
	if (mysqli_query($con, $sql)) {
    		/*echo "New record created successfully";*/
	} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($con);

	}
/*citi_merchant_bank*/
	$bal1="Select Balance from citi_merchant_bank order by id desc";
	$query1=mysqli_query($con,$bal1);
	$row1=mysqli_fetch_assoc($query1);

	$balance1=$row1['Balance'];
	
	$sql1="insert into citi_merchant_bank VALUES(NULL,110000,'$date','credit',$total,$balance1+$total,'City',3001)";
	if (mysqli_query($con, $sql1)) {
    		/*echo "New record created successfully";*/
	} else {
    		echo "Error: " . $sql1 . "<br>" . mysqli_error($con);

	}
	
	$sql2="insert into citi_merchant_bank VALUES(NULL,110000,'$date','debit',$total,$balance1+$total-$total,'City',3001)";
	if (mysqli_query($con, $sql2)) {
    		/*echo "New record created successfully";*/
	} else {
    		echo "Error: " . $sql2 . "<br>" . mysqli_error($con);

	}
/*sbi_customer_bank*/
	$bal2="Select Balance from sbi_customer_bank order by id desc";
	$query2=mysqli_query($con,$bal2);
	$row2=mysqli_fetch_assoc($query2);

	$balance2=$row2['Balance'];
	
	$sql3="insert into sbi_customer_bank VALUES(NULL,131111,'$date','credit',$total,$balance2+$total,'City',3001)";
	if (mysqli_query($con, $sql3)) {
    		/*echo "New record created successfully";*/
	} else {
    		echo "Error: " . $sql3 . "<br>" . mysqli_error($con);

	}	
	
	$sql4="insert into sbi_customer_bank VALUES(NULL,131111,'$date','debit',$total,$balance2+$total-$total,'City',3001)";
	if (mysqli_query($con, $sql4)) {
    		/*echo "New record created successfully";*/
	} else {
    		echo "Error: " . $sql4 . "<br>" . mysqli_error($con);

	}
/*customer_ac*/
	$bal3="Select Balance from customer_ac order by id desc";
	$query3=mysqli_query($con,$bal3);
	$row3=mysqli_fetch_assoc($query3);

	$balance3=$row3['Balance'];
	
	$sql5="insert into customer_ac VALUES(NULL,131111,'$date','credit',$total,$balance3+$total)";
	if (mysqli_query($con, $sql5)) {
    		/*echo "New record created successfully";*/
	} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($con);

	}
	mysqli_close($con);

?>
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
			p{	
				font-size:100px;
				text-align:center;
				margin-top:150px;
			}
		</style>
	</head>
	<body>
		<p>Order canceled!!
	</body>
</html>
	
