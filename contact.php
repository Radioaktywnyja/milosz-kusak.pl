<?php
require_once('template.php');

html_open_noindex();
menu_gora('contact');
panel_menu();
?>
			<div class="panel main">
				<span class="tytul">DANE KONTAKTOWE:</span>
				<ul class="kontakt">
					<li><label>Imię i nazwisko: </label>Miłosz Kusak</li>
					<li><label>Miejscowość: </label>Bulowice (woj. Małopolskie)</li>
					<li><label>Adres e-mail: </label><a href="mailto:kusak.milosz@gmail.com">kusak.milosz@gmail.com</a></li>
					<li><label>Strona www: </label><a href="http://www.milosz-kusak.pl">www.milosz-kusak.pl</a></li>
					<li><label>GitHub: </label><a href="https://github.com/Radioaktywnyja">www.github.com/Radioaktywnyja</a></li>
				</ul>
			</div>
<?php
panel_widgety();
html_close();
?>
		