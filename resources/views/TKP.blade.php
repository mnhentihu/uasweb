<!DOCTYPE html>
<html>
	<head>
		<title>Krusty Krab</title>
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
			aside {
				width: 230px;
				float: left;
				padding: 0px 0px 0px 20px;}
			aside section a {
				display: block;
				padding: 10px;
				border-bottom: 1px solid #eeeeee;}
			aside section a:hover {
				color: #985d6a;
				background-color: #efefef;}
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
						<li><a href="menu" class="current" >Menu</a></li>
						<li><a href="promo">Promo</a></li>
						<li><a href="profil">Profil</a></li>
						<li><a href="layanan">Layanan</a></li>
					</ul>
				</nav>
			</header>
			<section class="courses">
				<article>
					<figure>
						<img src="images/S3.jpg" alt="kraby" />
						<figcaption>Rp.80.000</figcaption>
					</figure>
					<hgroup>
						<h2>Triple Krabby Patty</h2>
						<h3>Makanan Utama</h3>
					</hgroup>
					<p>Triple Krabby Patty disini adalah burger yang berukuran tiga kali dari ukuran yang normal dengan ekstra daging sapi dan sayuran, jadi cocok sekali buat kalian yang kurang puas dengan ukuran double hehehe.</p>
				</article>    
				<article>
					<figure>
						<img src="images/A3.jpg" alt="patty" />
						<figcaption>Rp.70.000</figcaption>
					</figure>
					<hgroup>
						<h2>Triple Krabby Patty</h2>
						<h3>Makanan Utama</h3>
					</hgroup>
					<p>Triple Krabby Patty disini adalah burger yang berukuran tiga kali dari ukuran yang normal dengan ekstra daging ayam dan sayuran, jadi cocok sekali buat kalian yang kurang puas dengan ukuran double hehehe.</p>
				</article>    
			</section>
			<aside>
				<section class="popular-recipes">
					<h2>Menu Lainnya</h2>
					<a href="menu">Menu Utama</a>
					<a href="KM">Krabby Meal</a>
					<a href="DKP">Double Krabby Patty</a>
					<a href="TKP">Triple Krabby Patty</a>
					<a href="Drink">Drink</a>
				</section>
				<section class="contact-details">
					<h2>Kontak</h2>
					<p>Krusty Krab<br />
						di seluruh indonesia
						0851246723432
				</section>
			</aside>
			<footer>
				<marquee>Kami tidak pernah meragukan pelanggan meski permintaannya aneh aneh - aneh</marquee>
			</footer>
		</div>
	</body>
</html>