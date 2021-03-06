<html>
	<head>
		<title>Our Menu | Warehouse Buffet</title>
		<link rel="icon" type="image/png" href="../favicon.png">

		<!-- Import css libraries -->
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    	<link href='http://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>
    	<link href='http://fonts.googleapis.com/css?family=Karla' rel='stylesheet' type='text/css'>
    	<link href='http://fonts.googleapis.com/css?family=Yatra One' rel='stylesheet' type='text/css'>
    	<link href='http://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet' type='text/css'>
    	<link href='menu.css' rel='stylesheet'>
    	<link href='../css/hover-min.css' rel='stylesheet'>
    	<link href='scrollAnimation.css' rel='stylesheet'>
    	<link href='../css/transition.css' rel='stylesheet'>

    	<!-- Include jQuery libraries from Google, loads jQuery-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<!-- The write our code for menu -->
		<script src="../js/moreMenu.js"></script>
		<script src="../js/transition.js"></script>
	<head>

	<body class="fade-out">
		
		<!-- Beginning of Main Navigation Bar -->
		<div class="navigation-bar">
			<!-- Begin Nav Main menu -->
			<div id="main-menu-block">
				<!-- Logo of WB -->
				<div class="wbLogo"><img src="../images/wbLogo.jpg"></div>
				<!-- The main menu list -->
				<ul id="main_menu_list"> 
					<li class="main_menu_home"><a href="../index.html"class="hvr-float-shadow">Home</a></li>
					<li class="main_menu_menu"><a href="menu.php"class="hvr-float-shadow">Menu</a></li>
					<li class="main_menu_location"><a href="../location/location.html"class="hvr-float-shadow">Location</a></li>
					<li class="main_menu_aboutus"><a href="../about/about.html"class="hvr-float-shadow">About Us</a></li>
					<!--li class="more_menu"><img src="images/menu-icon.png"class="hvr-float-shadow"></li-->
				</ul>
				<div class="more_menu"><img src="../images/menu-icon.png"class="hvr-float-shadow"></div>

			</div>
		</div>
		<!-- End of Main Navigation Bar -->

		<!-- Beginning of Side Navigation Bar-->
		<div class="menu">

			<!-- The Close Menu icon (The X)-->
			<div class="icon-close">
				<img src="../images/icon_close.png">
			</div>
			<!-- Menu -->
			<ul>
				<!-- a href is a link to something placeholer #-->
				<li id="menu_home"><a href="../index.html"class="hvr-float-shadow">Home</a></li>
				<li id="menu_menu"><a href="menu.php"class="hvr-float-shadow">Menu</a></li>
				<li id="menu_location"><a href="../location/location.html"class="hvr-float-shadow">Location</a></li>
				<li id="menu_aboutus"><a href="../about/about.html"class="hvr-float-shadow">About Us</a></li>
			</ul>
		</div> 
		<!-- end of Side Menu Nav-->

		<!-- This is the top part of the menu page -->
		<div class="bgimg-1">
			<div class="wb-menu-block">
				<span class="border">Our Menu</span>
				<br>
				<span class="descript">Freshly Selected and Authentic</span>
				<div class="arrow bounce"></div>
			</div>
		</div>
		<!-- End of top menu page -->

		<!-- Beginning of Menu -->
		<div class="menu-container">
			<div class="kbbq-menu-title"> All You Can Eat KBBQ</div>
			<p class="kbbq-lunch-menu-1">
			COMING SOON!
			<!-- php code that parses the menu text file -->
			<!--<?php 
			    $previous_encoding = mb_internal_encoding();
			    mb_internal_encoding('UTF-8');
			    mb_internal_encoding($previous_encoding);
				$myKbbqMenu = fopen("../txt/kbbqMenu.txt", "r") or die("Connection Problem");
				while(!feof($myKbbqMenu)){
					echo fgets($myKbbqMenu) . "<br>";
				}
				fclose($myKbbqMenu);
			?>-->
		</p>
		</div>
		<!-- End of menu -->

		<!-- Beginning of footer -->
		<hr></hr>
		<div class="footer-container">
			<div class="copyright">Copyright &copy; 2016 Warehouse Buffet. All rights reserved.</div>
		</div>	
		<!-- End of Footer -->

	</body>


<html>