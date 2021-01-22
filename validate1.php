<?php
	session_start();
	$con=mysqli_connect("localhost","root","","db_menu");
	$total=$_SESSION['sum'];
	
	if ($con) {
    		/*echo "connected";*/
	}
	$sql="insert into tbl_billing_address VALUES('$_POST[firstname]', '$_POST[email]', '$_POST[address]', '$_POST[city]', '$_POST[state]', '$_POST[zip]')";
	if (mysqli_query($con, $sql)) {
    		/*echo "New record created successfully";*/
	} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($con);

	}
	

	$sql1="insert into tbl_payment(Name_on_Card, Credit_card_number, Exp_Month, Exp_Year, CVV, amount) VALUES('$_POST[cardname]', '$_POST[cardnumber]', '$_POST[expmonth]', '$_POST[expyear]','$_POST[cvv]', $total)";
	
	if(mysqli_query($con,$sql1)){
		/*echo "New record created successfully";*/
	}
	else {
    		echo "Error: " . $sql1 . "<br>" . mysqli_error($con);
	}
/*customer ac*/
	$bal="Select Balance from customer_ac order by id desc";
	$query=mysqli_query($con,$bal);
	$row=mysqli_fetch_assoc($query);

	$balance=$row['Balance'];
	/*echo "$balance";*/
	
	$date=date("y-m-d");

	
	$new_bal=$balance-$total;
	$date=date("y-m-d");
	$sql2="INSERT INTO customer_ac(id,Account_no,Date,Debit_Credit,Amount,Balance) VALUES(NULL,2000,'$date','Debit',$total,$balance-$total)";
	if(mysqli_query($con,$sql2)){
		/*echo "New record created successfully";*/
	}
	else {
    		echo "Error: " . $sql2 . "<br>" . mysqli_error($con);
	}
	
/*  SBI customer bank*/
	$bal1="Select Balance from sbi_customer_bank order by id desc";
	$query1=mysqli_query($con,$bal1);
	$row1=mysqli_fetch_assoc($query1);

	$balance1=$row1['Balance'];
	


	$sql3="insert into sbi_customer_bank VALUES(NULL,110000,'$date','credit',$total,$balance1+$total,'City',3001)";
	if(mysqli_query($con,$sql3)){
		/*echo "New record created successfully";*/
	}
	else{
		echo "Error:" . $sql3 . "<br>" . mysqli_error($con);
	}
	
	$sql4="insert into sbi_customer_bank VALUES(NULL,110000,'$date','debit',$total,$balance1+$total-$total,'City',3001)";
	if(mysqli_query($con,$sql4)){
		/*echo "New record created successfully";*/
	}
	else{
		echo "Error:" . $sql4 . "<br>" . mysqli_error($con);
	}
/*citi_merchant_bank*/
	$bal2="Select Balance from citi_merchant_bank order by id desc";
	$query2=mysqli_query($con,$bal2);
	$row2=mysqli_fetch_assoc($query2);
	
	$balance2=$row2['Balance'];
		
	$sql5="insert into citi_merchant_bank VALUES(NULL,110000,'$date','credit',$total,$balance2+$total,'City',3001)";
	if(mysqli_query($con,$sql5)){
		/*echo "New record created successfully";*/
	}
	else{
		echo "Error:" . $sql5 . "<br>" . mysqli_error($con);
	}

	$sql6="insert into citi_merchant_bank VALUES(NULL,110000,'$date','debit',$total,$balance2+$total-$total,'City',3001)";
	if(mysqli_query($con,$sql6)){
		/*echo "New record created successfully";*/
	}
	else{
		echo "Error:" . $sql6 . "<br>" . mysqli_error($con);
	}

/*supplier_ac*/
	$bal3="Select Balance from supplier_ac order by id desc";
	$query3=mysqli_query($con,$bal3);
	$row3=mysqli_fetch_assoc($query3);

	$balance3=$row3['Balance'];
	
	$sql7="insert into supplier_ac VALUES(NULL,131111,$date,'credit',$total,$balance3+$total)";
	if(mysqli_query($con,$sql7)){
		/*echo "New record created successfully";*/
	}
	else{
		echo "Error:" . $sql7. "<br>" . mysqli_error($con);
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
			.thank{
				font-size:150px;
				text-align:center;
				margin-top:150px;
			}
			.cancle{
				font-size:18px;
				text-align:center;
			}
			.refund{
				display: flex; justify-content: center; 
				background-color: #4CAF50; /* Green */
  				border: none;
  				color: white;
 	 			padding: 15px 32px;
  				text-align: center;
				text-decoration: none;
  				display: inline-block;
  				font-size: 16px;
				margin-left:900px;
				
			}
			
			
		</style>
	</head>
	
	<body>
		<p class="thank">Thanks for ordering!!!
		<p class="cancle">Not happy with what you just ordered? Dont worry we have cancel option.
		<form action="validate2.php" method="post">
			<button class="refund" >Cancel order</button>
		</form>
	</body>



</html>

