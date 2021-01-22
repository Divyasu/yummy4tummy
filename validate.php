<?php

	$con=new mysqli("localhost","root","","db_menu");

	if(isset($_POST["submit"])){
		$uname=$_POST["uname"];
		$pwd=$_POST["psw"];
		$sql="select * from users where username='$uname' and password='$pwd'";
		$r=$con->query("$sql");
		if($r->num_rows>0)
		{
			while($row = $r->fetch_assoc()){
		
?>
<script>
	alert("Logged in successfully");
	window.location.href="home.php";
</script>

<?php
			}
		}
		else{ 
?>
<script>
			alert("Not Logged");
			window.location.href="home.php";
</script>
<?php
		}
	}
	if(isset($_POST["signup"])){
		$uname=$_POST["uname"];
		$pwd=$_POST["psw"];
		$email=$_POST["email"];
		$sql="select * from users where username='$uname'";
    		$t=$con->query("$sql");
		if($t->num_rows==0){
			$sql="INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES (NULL, '$uname', '$pwd', '$email');";
			$con->query("$sql");
?>
		
<script>
	alert("Registered Successfully");
	window.location.href="home.php";
</script> 
<?php
		}
	}
?>