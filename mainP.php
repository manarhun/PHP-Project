<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->
<head>
	<meta charset="UTF-8">
	<title>fellowship Library</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
</head>
<body>
	<div id="wrapper">
		<div class="owl-carousel" id="slider-area">
			<div style="background-image: url(img/1.jpg)"></div>
			<div style="background-image: url(img/2.jpg)"></div>
			<div style="background-image: url(img/3.jpg)"></div>
		</div>
		<div class="nav-area">
			<div class="nav">
				<a href="#">about</a> 
				<a href="search.php">Search</a> 
				<a href="update.php">Update</a> 
				<a href="add.php">Add</a>
                <a href="delete.php">Delate</a>
			</div>
		</div>
		<div class="slider-text">
			<h2>fellowship <span>Library</span></h2>
			<p>The Place Where Y ou can Find Your Favorite Books And Rent Your Own</p><a href="regP.php">Sign up</a> <a class="btn" href="loginP.php">Login</a>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> 
	<script>
	$('#slider-area').owlCarousel({
	   loop: true,
	   autoplay: true,
	   responsive: {
	       0: {
	           items: 1
	       },
	       600: {
	           items: 1
	       },
	       1000: {
	           items: 1
	       }
	   }
	})        
	</script>
</body>
</html>
<?php 
$conn=new mysqli("localhost","root","root","fellowship Library"); 
?>