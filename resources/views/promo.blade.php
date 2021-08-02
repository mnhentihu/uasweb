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
			header, section, footer, aside, nav, article, figure, figcaption {
				display: block;}
			body {
				color: #666666;
				background-color: #f9f8f6;
				background-image: url("images/Background.jpg");
				background-size: cover;
				background-position: center;
				font-family: krabby_patty;
				line-height: 1.4em;
				margin: 0px;}
			.wrapper {
				width: 940px;
				margin: 20px auto 20px auto;
				border: 2px solid #000000;
				background-color: #FFD700;}
			header {
				height: 160px;
				background-image: url("images/header.jpg");}
			h1 {
				text-indent: -9999px;
				width: 940px;
				height: 130px;
				margin: 0px;}
			nav, footer {
				clear: both;
				color: #ffffff;
				background-color: #000000;
				height: 30px;}
			nav ul {
				margin: 0px;
				padding: 5px 0px 5px 30px;}
			nav li {
				display: inline;
				margin-right: 40px;}
			nav li a {
				color: #ffffff;}
			nav li a:hover, 
			nav li a.current {
				color: #FFD700;}
			section.courses {
				float: left;
				width: 659px;
				border-right: 1px solid #eeeeee;}
			article {
				clear: both;
				overflow: auto;
				width: 100%;}
			hgroup {
				margin-top: 40px;}
			figure {
				float: left;
				width: 290px;
				height: 220px;
				padding: 5px;
				margin: 20px;
				border: 1px solid #eeeeee;}
			figcaption {
				font-size: 90%;
				text-align: left;}
			a {
				color: #de6581;
				text-decoration: none;}
			h1, h2, h3 {
				font-weight: normal;}
			h2 {
				margin: 10px 0px 5px 0px;
				padding: 0px;}
			h3 {
				margin: 0px 0px 10px 0px;
                color: #de6581;}
            .mySlides {
			    margin-left: auto;
			    margin-right: auto;
			    width: 85%;
			    padding: 20px;
			    display: none;
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
			aside h2 {
				padding: 30px 0px 10px 0px;
				color: #de6581;}
			footer {
				font-size: 80%;
				padding: 7px 0px 0px 0px;}
		</style>
		
	</head>
	<body>
		<div class="wrapper">
			<header>
				<h1>Krabby Patty</h1>
				<nav>
					<ul>
						<li><a href="beranda">Beranda</a></li>
						<li><a href="menu"  >Menu</a></li>
						<li><a href="" class="current">Promo</a></li>
						<li><a href="profil">Profil</a></li>
						<li><a href="layanan">Layanan</a></li>
					</ul>
				</nav>
			</header>
			<div class="w3-content w3-display-container" style="max-width:800px">
				<img class="mySlides" src="images/promo1.jpg" style="width:100%">
				<img class="mySlides" src="images/promo2.jpg" style="width:100%">
				<img class="mySlides" src="images/promo3.jpg" style="width:100%">
				<img class="mySlides" src="images/promo4.jpg" style="width:100%">
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
			setTimeout(carousel, 3000); // Change image every 2 seconds
		}
	</script>
	</body>
</html>