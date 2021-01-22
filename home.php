<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=divice-width, initial-scale=1">
		<title>yummy4tummy
		</title>
		<style>
			* {box-sizing: border-box;}
			body {
				font-family: Verdana, sans-serif;
				width:100%;
				max-width:100%;
				margin:0 ;
				padding:0;
			}

			button:hover{
				background-color:rgb(255,99,71);
			}
			#A{
				width:50%;
				float:left;
			}
			#B{
				width:50%;
				float:right;
			}
			#C{
				background:AntiqueWhite;
				color:coral;
				width:50%;
				float:left;
				font-size:30px;
				padding:90px 30px;
				text-align:center;
				height:243px;
			}
			#D{
				background:Crimson;
				color:Cornsilk;
				width:50%;
				float:right;
				font-size:30px;
				padding:90px 30px;
				text-align:center;
				height:243px;
			}
			#E{
				background:Lightsalmon;
				color:lightyellow;
				width:50%;
				float:left;
				font-size:30px;
				padding:90px 30px;
				text-align:center;
				height:245px;
			}
			#F{
				background:white;
				color:sandybrown;
				width:50%;
				float:right;
				font-size:30px;
				padding:70px 30px;
				text-align:center;
				height:245px;
			}
			.mySlides {
				display: none;
			}
			img {
				vertical-align: middle;
			}
	
			/* Slideshow container */
			.slideshow-container {
				max-width:100%;
				width:100%;
				position:relative;
  				margin: 0;
				padding:0;
			}
		
			/* Caption text */
			.text {
 				color:black;
  				font-size: 30px;
  				padding: 8px 12px;
  				position: absolute;
  				bottom: 8px;
  				width: 100%;
  				text-align: center;
			}

			/* The dots/bullets/indicators */
			.dot {
  				display:none;
			}

			/* Fading animation */
			.fade {
  				-webkit-animation-name: fade;
  				-webkit-animation-duration: 1.5s;
  				animation-name: fade;
  				animation-duration: 1.5s;
			}

			@-webkit-keyframes fade {
 				from {opacity: .4} 
  				to {opacity: 1}
			}

			@keyframes fade {
  				from {opacity: .4} 
  				to {opacity: 1}
			}		

			/* On smaller screens*/
			@media (max-width: 780px){
				.text {font-size: 14px;}
				#A{
					width:100%;
				}
				#B{
					width:100%;
					margin-top:10px;
				}
				#C, #D, #E, #F{
					font-size:20px;
				}
			}
			
			
		</style>
	</head>
	<body>
		<?php $page='home';include'index.php';?>
		<section id="A">
			<div class="slideshow-container">
	
				<div class="mySlides fade">
  					<img src="images/slideshow/image1.png" style="width:100%">
  					<div class="text">Hungry?<br>Order food from home queens near you</div>
				</div>
	
				<div class="mySlides fade">
  					<img src="images/slideshow/image2.png" style="width:100%">
  					<div class="text" style="color:white;">Unexpected guest?<br>Order food from home queens near you</div>
				</div>
	
				<div class="mySlides fade">
					<img src="images/slideshow/image3.jpg" style="width:100%">
  					<div class="text" style="color:white;">Cooking gone wrong?<br>Order food from home queens near you</div>
				</div>
			
				<div class="mySlides fade">
					<img src="images/slideshow/image4.png" style="width:100%">
  					<div class="text">Movie Marathon?<br>Order food from home queens near you</div>
				</div>
			</div>
			<br>
			<div style="text-align:center">
  				<span class="dot"></span> 
  				<span class="dot"></span> 
  				<span class="dot"></span>
				<span class="dot"></span>  
			</div>
	
			<button style="background:red; margin:0; padding:0; height:50px; width:100%;">Place Order!!</button>

			<script>
				var slideIndex = 0;
				showSlides();
	
				function showSlides() {
  	  				var i;
    					var slides = document.getElementsByClassName("mySlides");
    					var dots = document.getElementsByClassName("dot");
    					for (i = 0; i < slides.length; i++) {
       						slides[i].style.display = "none";  
    					}
    					slideIndex++;
    					if (slideIndex > slides.length) {slideIndex = 1}    
    					for (i = 0; i < dots.length; i++) {
        					dots[i].className = dots[i].className.replace(" active", "");
    					}
    					slides[slideIndex-1].style.display = "block";  
    					dots[slideIndex-1].className += " active";
    					setTimeout(showSlides, 2000); // Change image every 2 seconds
				}
			</script>
		</section>
		<section id="B">
			<section id="C">
				Enjoy Free Home Delivery!!
			</section>
				
			<section id="D">
				Love the Best!!<br>We are the best!!
			</section>
			<section id="E">
				Eat More!!<br>Stay Healthy!!
			</section>
			<section id="F">
				Love Cooking?<br>You are in the right place!!
			</section>
		</section>
	</body>
</html>