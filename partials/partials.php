<?php
// session_start();
// if(!isset($_SESSION['username'])){
// 	header("Location: ../LoginPage/login.php");
// }
?>

<!DOCTYPE html>
<html>
<head>
<title>Foot Wear</title>
<link rel="stylesheet" type="text/css" href="/shoeapp/HomePage/footwear.css">
<script src="https://kit.fontawesome.com/5ab0a9e3fa.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="nav-container">
		<div class="icon">
	<i class="fas fa-shoe-prints"></i>
	<h3>Perfect Fit</h3>
</div>
	<ul id="list">
	 <li id="home"><a href="../HomePage/home.php">Home</a></li>
	 <li><a href="../cart/cartdetails.php">my cart</a></li>
	 <li>
	 <div class="dropdown">
	       <span>categories</span>
	        <div class="dropdown-content categories">
				    <a href="../Categories/shoecategory.php">shoes</a>
				    <a href="../Categories/clothescategory.php">clothes</a>
				    <a href="../Categories/watchcategory.php">watches</a>
            </div>
			</div>
	 </li>
	 <li>
	 <div class="userlogo">
        </div>
	    <div class="dropdown">
	       <span>
			<!-- <?php echo $_SESSION['username'];?> -->
			hemanth
		   </span>
	        <div class="dropdown-content username">
            <a href="../LoginPage/logout.php" class="logout">logout</a>
            </div>
        </div>
     </li>
	</ul>	
	<div class="ham">
		<button id = "btn"><img src="../partials/hamburger.png" alt=""></button>
	</div>
</div>
<script type="text/javascript" src="../HOMEPAGE/footwear.js"></script>