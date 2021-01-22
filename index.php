<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=divice-width, initial-scale=1">
		<title>yummy4tummy
		</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="login.css">
		<style>
			body{
				margin:0px;
				font-family:sans-serif;
			}
			header{
				width:100%;
				height:80px;
				max-width:100%;
				background:#00316b;
				overflow:hidden;
			}
			header h1{
				display:block;
				padding:0px;
				font-size:38px;
				color:white;
				text-align:center;
				font-family:Times New Roman Bold Italic;
			}
			header h1 span{
				color:red;
			}
			nav{
				width:100%;
				background:#00316b;
				margin:0px;
				overflow:hidden;
			}
			nav ul{
				width:100%;
				list-style-type:none;
				margin:0px;
				padding:0px;
			}
			nav ul li{
				width:25%;
				float:left;
			}
			nav ul li a{
				display:block;
				width:100%;
				text-decoration:none;
				text-align:center;
				padding:8px 0px;
				background:#00316b;
				color:white;
				font-size:15px;
				text-transform:uppercase;
			}
			.active{
				background:black;
			}
			nav ul li a:hover{
				background:dodgerblue;
			}
			.toggle{
				width:100%;
				padding 10px 20px;
				text-align:right;
				box-sizing:border-box;
				color:#fff;
				font-size:30px;
				display:none;
			} 
			@media (max-width:780px){
				.toggle{
					display:block;
				}
				ul{
					width:100%;
					display:none;
				}
				.responsive li{
					display:block;
					text-align:center;
					width:100%;
				}
				.responsive{
					display:block;
				}
			}
		</style>
		
		
	</head>
	<body>
		<header>
			<h1>yummy<span>4</span>tummy</h1>
		</header>
		
		<nav style="float: none">
			<div class="toggle">
				<i class="fa fa-bars menu" aria-hidden="true"></i>
			</div>
			<ul>
				<li><a href="home.php" class="<?php if($page=='home'){echo 'active';}?>">home</a></li>
				<li><a href="menu.php" class="<?php if($page=='menu'){echo 'active';}?>">menu</a></li>
				<li><a class="<?php if($page=='sign'){echo 'active';}?>" onclick="document.getElementById('id01').style.display='block'">sign in/sign up</a></li>
				<li><a href="tiffin.php" class="<?php if($page=='tiffin'){echo 'active';}?>">tiffin</a></li>
			</ul>
		</nav>
		
		
		<div id="id01" class="modal">
  			<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
			<!-- Modal Content -->
  			<form class="modal-content animate" action="validate.php" method="post">
   

    				<div class="container">
      					<label for="uname"><b>Username</b></label>
      					<input type="text" placeholder="Enter Username" name="uname" required>

      					<label for="psw"><b>Password</b></label>
      					<input type="password" placeholder="Enter Password" name="psw" required>

      					<button type="submit" name="submit">Login</button>
      					<label>
        					<input type="checkbox" checked="checked" name="remember"> Remember me
      					</label>
    				</div>

    				<div class="container" style="background-color:#f1f1f1">
      					<button type="submit" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel
					</button>
      					<span class="psw">New User?<a href="register.php">Register</a></span>
    				</div>
  			</form>
		</div>

		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.menu').click(function(){
					$('ul').toggleClass('responsive');
				})
			})
		</script>
		
		
		<script>
			// Get the modal
			var modal = document.getElementById('id01');


			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
    				if (event.target == modal) {
        				modal.style.display = "none";
    				}
			}
		</script>
	</body>
</html>
