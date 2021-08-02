<!DOCTYPE html>
<html>

<head>
	<title>Krusty Krab</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style type="text/css">
		@font-face {
    	font-family: krabby_patty;
    	src: url('/krabby_patty.ttf');
		}	
		header,
		footer,
		nav {
			display: block;
		}

		body {
			color: #666666;
			background-color: #f9f8f6;
			background-image: url("images/background.jpg");
			background-position: center;
			background-repeat: no-repeat;
			background-attachment: fixed;
			font-family: krabby_patty;
			line-height: 1.4em;
			margin: 0px;
		}

		.wrapper {
			width: 940px;
			margin: 20px auto 20px auto;
			border: 2px solid #000000;
			background-color: #FFD700;
		}

		header {
			background-image: url("images/header.jpg");
			height: 160px;
		}

		h1 {
			text-indent: -9999px;
			width: 940px;
			height: 130px;
			margin: 0px;
		}

		nav,
		footer {
			clear: both;
			color: #ffffff;
			background-color: #000000;
			height: 30px;
		}

		footer {
			font-size: 80%;
			padding: 7px 0px 0px 0px;
		}

		nav ul {
			margin: 0px;
			padding: 5px 0px 5px 30px;
		}

		nav li {
			display: inline;
			margin-right: 40px;
		}

		nav li a {
			color: #ffffff;
		}

		nav li a:hover,
		nav li a.current {
			color: #FFD700;
		}

		a {
			color: #de6581;
			text-decoration: none;
		}

		h1,
		h2,
		h3 {
			font-weight: normal;
		}

		h3 {
			padding-top: 20px;
			margin: 0px 0px 10px 0px;
			color: black;
			text-align: center;
			font-weight: bolder;
			font-family: krabby_patty;
		}

		.mySlides {
			margin-left: auto;
			margin-right: auto;
			width: 85%;
			padding: 20px;
			display: none;
		}

		.image {
			display: block;
			margin-left: auto;
			margin-right: auto;
			width: 100%;
		}

		.image2 {
			overflow: hidden;
			display: flex;
			justify-content: space-around;
			padding-top: 40px;
			padding-right: 60px;
			padding-left: 60px;
		}

		.image3:hover {
			transform: scale(1.2);
		}

		.font1 {
			overflow: hidden;
			display: flex;
			justify-content: space-around;
			padding-right: 60px;
			padding-left: 60px;
			color: black;
			font-family: krabby_patty;
		}

		.w3-left,
		.w3-right,
		.w3-badge {
			cursor: pointer
		}

		.w3-badge {
			height: 13px;
			width: 13px;
			padding: 0
		}

		.bg-colour {
			background-color: rgb(255, 228, 225, 0.5);
			margin-bottom: 100px;
			margin-top: 100px;
		}
	</style>
</head>

<body>
	<div class="wrapper">
		<header>
			<h1>Krabby Patty</h1>
			<nav>
				<ul>
					<li><a href="" class="current">Beranda</a></li>
					<li><a href="menu">Menu</a></li>
					<li><a href="promo">Promo</a></li>
					<li><a href="profil">Profil</a></li>
					<li><a href="layanan">Layanan</a></li>
				</ul>
			</nav>
		</header>
		<div>
			<div class="w3-content w3-display-container" style="max-width:800px">
				<img class="mySlides" src="images/iklan.jpg" style="width:100%">
				<img class="mySlides" src="images/iklan2.png" style="width:100%">
				<img class="mySlides" src="images/iklan3.png" style="width:100%">
			</div>
			<div class="bg-colour">
				<h3>MENU FAVORIT</h3>
				<div class="image2">
					<img class="image3" src="images/patty.png">
					<img class="image3" src="images/kentang.png">
				</div>
				<div class="font1">
					<p>Krabby Patty</p>
					<p>Kentang Goreng</p>
				</div>
			</div>
			<div>
				<img class="image" src="images/iklan4.png">
			</div>
		</div>
		<footer>
			<marquee>Kami tidak pernah meragukan pelanggan meski permintaannya aneh - aneh</marquee>
		</footer>
	</div>
	<!-- javascript -->
	<script>
		var slideIndex = 0;
		carousel();

		function carousel() {
			var i;
			var x = document.getElementsByClassName("mySlides");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";
			}
			slideIndex++;
			if (slideIndex > x.length) {
				slideIndex = 1
			}
			x[slideIndex - 1].style.display = "block";
			setTimeout(carousel, 2000); // Change image every 2 seconds
		}
	</script>
</body>

</html>