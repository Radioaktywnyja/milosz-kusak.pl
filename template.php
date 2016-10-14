<?php
//otwarcie html
function html_open() {
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Miłosz Kusak - Webdeveloper</title>
	<meta name="Description" content="Stojący przed chatą mężczyzna widząc Cię wskazuje drzwi mówiąc: - Witaj Przyjacielu, czekałem na ciebie. Wejdź i zobacz co mogę ci zaoferować.">
	<meta name="Keywords" content="Miłosz,Kusak,karta,postaci,cv">
	<link rel="stylesheet" type="text/css" href="pliki/style.css">
	<script src="pliki/jq.js" type="text/javascript"></script>
	<script src="pliki/skrypty.js" type="text/javascript"></script>
	<script src="pliki/analyticstracking.js" type="text/javascript"></script>
</head>
<body>
	<div id="kontener">	
	
<?php
}

//otwarcie html dla podstron (bez indeksowania)
function html_open_noindex() {
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Miłosz Kusak - Webdeveloper</title>
	<meta name="Description" content="Stojący przed chatą mężczyzna widząc Cię wskazuje drzwi mówiąc: - Witaj Przyjacielu, czekałem na ciebie. Wejdź i zobacz co mogę ci zaoferować.">
	<meta name="Keywords" content="Miłosz,Kusak,karta,postaci,cv">
	<meta name="robots" content="noindex">
	<link rel="stylesheet" type="text/css" href="pliki/style.css">
	<script src="pliki/jq.js" type="text/javascript"></script>
	<script src="pliki/skrypty.js" type="text/javascript"></script>
	<script src="pliki/analyticstracking.js" type="text/javascript"></script>
</head>
<body>
	<div id="kontener">	
	
<?php
}

//wyswietlenie menu
function menu_gora($tytul) {
?>
			<div id="menu-gora">
				<ul>
					<li<?php if($tytul=='index') {echo ' class="active"';} ?>><a href="index.php">Karta Postaci</a></li>
					<li<?php if($tytul=='skills') {echo ' class="active"';} ?>><a href="skills.php">Umiejętności</a></li>
					<li<?php if($tytul=='achievements') {echo ' class="active"';} ?>><a href="achievements.php">Osiągnięcia</a></li>
					<li<?php if($tytul=='quests') {echo ' class="active"';} ?>><a href="quests.php">Dziennik zadań</a></li>
					<li<?php if($tytul=='history') {echo ' class="active"';} ?>><a href="history.php">Historia Postaci</a></li>
					<li<?php if($tytul=='contact') {echo ' class="active"';} ?>><a href="contact.php">Kontakt</a></li>
				</ul>		
			</div>
<?php
}

//ustalenie mojego wieku
$wiek = date("Y") - 1989;

//wyswietlenie panelu lewego
function panel_menu() {
?>			
			<div class="panel menu-bok">
				<span class="name">Miłosz Kusak</span>
				<div class="avatar-lewy">
					<img src="pliki/avatar2.png" alt="avatar" />
				</div>
				<ul>
					<li><label>Poziom: </label><?php echo $GLOBALS['wiek']; ?></li>
					<li><label>Klasa: </label>Web Developer</li>
					<li><label>Doświadczenie:</label></li>
					<li class="pasek exp">35%</li>
					<li><label>Zdrowie:</label></li>
					<li class="pasek hp">98%</li>
					<li><label>Zaangażowanie:</label></li>
					<li class="pasek eng">110%</li>			
				</ul>
			</div>
<?php
}

//wyswietlenie panelu prawego
function panel_widgety() {
?>				
			<div class="panel widgety">
				<span class="aktualnosci-tytul">Aktualności</span>
				<div class="aktualnosci">
					<div class="news">
						<span class="news-date">Pt 05-02-2016 20:00</span>
						<p>W dniu dzisiejszym następuje oficjalne zwodowanie tej strony i wypuszczenie jej na szerokie wody internetu. Pomyślnych wiatrów i oby ci, którzy spędzą na niej kilka chwil, nie uznali ich za stracone.</p>
					</div>
				</div>
			</div>
<?php
}

//zamknięcie html
function html_close() {
?>	
		<div style="clear: both"></div>	
	</div>	
</body>
</html>

<?php
}
?>