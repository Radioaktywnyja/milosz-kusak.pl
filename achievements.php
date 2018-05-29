<?php
require_once('template.php');

html_open_noindex();
menu_gora('achievements');
panel_menu();
?>
			<div class="panel main achieve">
				<span class="tytul">
					DOTYCHCZASOWE REALIZACJE:
				</span>
				<ul>
					<li><label><a href="http://www.milosz-kusak.pl/domowy-budzet/web/budzet">www.milosz-kusak.pl/domowy-budzet/web/budzet</a></label> - narzędzie do kontroli domowego budżetu napisane w Symfony 3.4 z wykorzystaniem Doctrine. Strona jest cały czas rozwijana ale podstawy już działają.</li>
					<li><label><a href="http://www.milosz-kusak.pl/kreator_cv">www.milosz-kusak.pl/kreator_cv</a></label> - przeglądarkowy kreator CV. Napisany w PHP i jQuery. Wykończenie frontendu zostało tymczasowo odłożone na rzecz nauki symfony.</li>
					<li><label><a href="http://www.milosz-kusak.pl">www.milosz-kusak.pl</a></label> - karta postaci pewnego początkującego Web Developera. Strona napisana z wykorzystaniem PHP i skryptów jQuery.</li>
					<li><label><a href="http://www.joannaczarnik.cba.pl">www.joannaczarnik.cba.pl</a></label> - strona firmowa mobilnego salonu fryzjerskiego. Galeria autorska napisana w jQuery, bez wykorzystania dostępnych szablonów.</li>
					<li><label><a href="http://www.photosd.webd.pl/arabic2roman">www.photosd.webd.pl/arabic2roman</a></label> - autorski konwerter liczb arabskich na rzymskie - jeden z niewielu obługujacych liczby powyżej 4000. Strona stworzona wspólnie z Eldamiani, napisana w ReactJS z zastosowaniem reaktywnego web designu. Podczas tworzenia zależało nam na przystępności, stąd też tlumaczenie "na żywo" (bez klikania żadnych buttonów) oraz objaśnienia jak liczba powstała.</li>
				</ul>
			</div>
<?php
panel_widgety();
html_close();
?>
		