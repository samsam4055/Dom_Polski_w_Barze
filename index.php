<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Dom Polski w Barze</title>
	<meta name="keywords" content="Dom Polski w Barze, Bar, Polacy Barscy, w Domu Polskim w Barze, Strona internetowa Domu Polskiego w Barze, Zespół folklorystyczno–taneczny Aksamitki, Chór młodzieżowy Młode Liście, Chór kameralny Cantica Anima, Nauka języka polskiego">
	<meta name="description" content="Dom Polski w Barze — centrum kultury i języka polskiego na Podolu">
	<link rel="shortcut icon" href="img/dp-logo-min.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/ideal-image-slider.css">
	<link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/ideal-image-slider.min.js"></script>
</head>

<body>
	<div class="container">
		<header>
			<?php include ('header.html'); ?>
		</header>

		<main>
			<div id="slider">
 				<img src="img/sli2.jpg" alt="Slide 2">
 				<img src="img/sli3.jpg" alt="Slide 3">
				<img src="img/sli1.jpg" alt="Slide 1">
			</div>
			<section class="info">
				<div class="info-block">
					<h2>Podziękowanie</h2>
					<hr>
					<p>Dla <a href="http://www.wspolnota-polska.org.pl/" target="_blank">Stowarzyszenia „ Wspólnota Polska”</a>, Urzędów Miast <a href="http://www.kwidzyn.pl/" target="_blank">Kwidzyn</a> i <a href="http://www.rybnik.pl/" target="_blank">Rybnik</a>, <a href="http://www.powiat.starachowice.pl/" target="_blank">Starostwa Powiatowego w Starachowicach</a>, <a href="http://winnica.msz.gov.pl/pl/winnica_ua_k_1" target="_blank">Konsulatu Generalnego RP w Winnicy</a> oraz dla wszystkich przyjaciół, którzy wspierali dzieło budowy Domu Polskiego w Barze</p>
					<p class="sign">Z wyrazami szacunku składają Polacy Barscy</p>
				</div>
				<div class="info-block">
					<h2>Co robimy?</h2>
					<hr>
					<h3>W Domu Polskim w Barze:</h3>
					<ul>
						<li>poznajemy kulturę, tradycje i historię Polski;</li>
						<li>uczymy się śpiewać, tańczyć i mówić po polsku;</li>
						<li>organizujemy imprezy i uroczystości kulturalne;</li>
						<li>prowadzimy kursy, konferencje, sesje popularnonaukowe;</li>
						<li>miło spędzamy wolny czas.</li>
					</ul>
				</div>
			</section>
			<h2><a href="news.php">Aktualności</a></h2>
			<hr>
			<section class="news">
                               				
				<div class="news-block">
					<p>ууууууууууу</p>
				</div>
				<div class="news-block">
					<p>текст 2</p>
				</div>
				<div class="news-block">
					<p>06.12.2017 r. w Domu Polskim odbędzie się spotkanie ze Świętym Mikołajem i dzieciństwem.</p>
				</div>
				<div class="news-block">
					<p>28-29 października 2017r. Odbędzie się Międzynarodowa Naukowo-Historyczna Konferencja „Zbrodnia Winnicka w 80-tą rocznicę tragicznych wydarzeń”.</p>
				</div>
			</section>
			<section class="contact-us">
				<div class="main-adress">
					<p>23-000</p>
					<p>Bar, ul.Gagarina 4</p>
					<p>obwód Winnicki, Ukraina</p>
				</div>
				<div class="main-phones">
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
			<div class="map" id="yandex-map">
				<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=0bQkhh704vz4f1We9k-DfSw0lrJp7usq&amp;width=1200&amp;height=300&amp;lang=pl_PL&amp;sourceType=constructor&amp;scroll=true;id=yandex-map"></script>
			</div>
		</main>

		<footer>
			<?php include ('footer.html'); ?>
		</footer>

	</div>
	<a href="#" class="up"></a>
	<script type="text/javascript">
		var slider = new IdealImageSlider.Slider({
	    selector: '#slider',
	    height: 350, // Required but can be set by CSS
	    interval: 6000,
		transitionDuration: 1000
		});
		slider.start();
	</script>
	<script type="text/javascript" src="js/search-up.js"></script>
</body>

</html>
