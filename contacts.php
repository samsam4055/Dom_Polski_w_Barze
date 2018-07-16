<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Dom Polski w Barze</title>
	<link rel="shortcut icon" href="img/dp-logo-min.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
</head>

<body>
	<div class="container">
		<header>
			<?php include ('header.html'); ?>
		</header>

		<main>
			<h2>Nasze kontakty</h2>
			<hr>
			<div class="breadcrumbs-block">
				<ul class="breadcrumbs">
					<li><a href="index.php">Główna</a></li>
					<li>Kontakty</li>
				</ul>
			</div>
			<section class="adress">
				<div class="main-adress">
					<h2>Adres:</h2>
					<p>23-000</p>
					<p>Bar, ul.Gagarina 4</p>
					<p>obwód Winnicki, Ukraina</p>
				</div>
				<div class="main-phones">
					<h2>Telefony:</h2>
					<p>+38 097 444 55 29</p>
					<p>+38 04341 2 35 35 (fax)</p>
          <p>info@bardompolski.org</p>
				</div>
				<div class="social-btns">
					<a href="https://www.facebook.com/bardompolski/" target="_blank">
						<img src="img/facebook-search.png" alt="fb-icon">
					</a>
				</div>
			</section>
			<h2>Jesteśmy na mapie</h2>
			<div class="map-contacts" id="yandex-map">
				<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=0bQkhh704vz4f1We9k-DfSw0lrJp7usq&amp;width=1200&amp;height=720&amp;lang=pl_PL&amp;sourceType=constructor&amp;scroll=true;id=yandex-map;id=yandex-map"></script>
			</div>
		</main>

		<footer>
			<?php include ('footer.html'); ?>
		</footer>
	</div>
	<a href="#" class="up"></a>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/search-up.js"></script>
</body>

</html>
