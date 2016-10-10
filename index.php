<?php
require_once('template.php');

html_open();
menu_gora('index');
panel_menu();
?>
			<div class="panel main">
				<div class="profil-okno">
					<span class="name">Miłosz Kusak</span>
					<div class="avatar-main">
						<img src="pliki/avatar.png" alt="avatar" />
					</div>
					<div class="staty">
						<ul>
							<li><label>Płeć: </label>Mężczyzna</li>
							<li><label>Rasa: </label>Człowiek</li>
							<li><label>Klasa: </label>Web Developer</li>
							<li><label>Poziom (wiek): </label>26</li>
							<li><label>Charakter: </label>Praworządny neutralny</li>
							<li><label>Lokalizacja: </label>Bulowice</li>
						</ul>
					</div>
				</div>
				<div class="odnosniki">
					<ul>
						<li>Umiejętności:<br /><span class="tooltip-act" tool=".t-umiej">+ kliknij by rozwinąć</span></li>
						<li>Osiągnięcia:<br /><span class="tooltip-act" tool=".t-osia">+ kliknij by rozwinąć</span></li>
						<li>Doświadczenie (Nauka):<br /><span class="tooltip-act" tool=".t-nauk">+ kliknij by rozwinąć</span></li>
						<li>Historia:<br /><span class="tooltip-act" tool=".t-hist">+ kliknij by rozwinąć</span></li>
						<li>Doświadczenie (Praca):<br /><span class="tooltip-act" tool=".t-prac">+ kliknij by rozwinąć</span></li>
						<li>Hobby:<br /><span class="tooltip-act" tool=".t-zain">+ kliknij by rozwinąć</span></li>		
					</ul>
				</div>
				<div class="tooltip t-umiej">
					<ul>
						<li>HTML</li>
						<li>CSS</li>
						<li>jQuery</li>
						<li>ReactJS</li>
						<li>PHP</li>
						<li>MySQL</li>
						<li>Git</li>
						<li>Administracja</li>
						<li>Grafika rastrowa</li>
						<li>Grafika wektorowa</li>
						<li>Język angielski</li>
						<li>Język niemiecki</li>
					</ul>
					<p><a href="skills.php">+ WIĘCEJ</a></p>
					<span class="tooltip-hide">- kliknij by zwinąć</span>
				</div>
				<div class="tooltip t-hist">
					<ul>
						<li>O mojej z kodowaniem przygodzie słów kilka...</li>
					</ul>
					<p><a href="history.php">+ WIĘCEJ</a></p>
					<span class="tooltip-hide">- kliknij by zwinąć</span>
				</div>
				<div class="tooltip t-zain">
					<ul>
						<li>Literatura oraz film fantasy</li>
						<li>Sesje RPG - i jako gracz, i jako mistrz gry</li>
						<li>Siatkówka, Pływanie</li>
					</ul>
					<span class="tooltip-hide">- kliknij by zwinąć</span>
				</div>
				<div class="tooltip t-prac">
					<ul>
						<li>06.2013–obecnie - NTG System - Specjalista ds. technicznych</li>
						<li>08.2011–06.2013 - PUH NSGiB - Specjalista ds. technicznych</li>
					</ul>
					<p><a href="quests.php">+ WIĘCEJ</a></p>
					<span class="tooltip-hide">- kliknij by zwinąć</span>
				</div>
				<div class="tooltip t-nauk">
					<ul>
						<li>Kurs grafiki komputerowej</li>
						<li>Kurs "Zaawansowane tworzenie stron WWW [...]"</li>
						<li>UR Kraków - Inżynieria Środowiska</li>
						<li>LO im. Wyspiańskiego w Kętach</li>
					</ul>
					<p><a href="quests.php">+ WIĘCEJ</a></p>
					<span class="tooltip-hide">- kliknij by zwinąć</span>
				</div>
				<div class="tooltip t-osia">
					<ul>
						<li><label><a href="http://www.milosz-kusak.pl">www.milosz-kusak.pl</a></label></li>
						<li><label><a href="http://www.joannaczarnik.cba.pl">www.joannaczarnik.cba.pl</a></label></li>
						<li><label><a href="http://www.photosd.webd.pl/arabic2roman">www.photosd.webd.pl/arabic2roman</a></label></li>
					</ul>
					<p><a href="achievments.php">+ WIĘCEJ</a></p>
					<span class="tooltip-hide">- kliknij by zwinąć</span>
				</div>
			</div>
<?php
panel_widgety();
html_close();
?>
		