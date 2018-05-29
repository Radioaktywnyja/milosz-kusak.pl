<?php
require_once('template.php');

html_open_noindex();
menu_gora('skills');
panel_menu();
?>
			<div class="panel main">
				<span class="tytul">UMIEJĘTNOŚCI:</span>
				<ul class="skills">
					<li><label>HTML5</label><span class="gwiazdy-pelne hateemel-pelne"></span><span class="gwiazdy-puste hateemel-puste"></span></li>
					<li><label>CSS3</label><span class="gwiazdy-pelne ceeses-pelne"></span><span class="gwiazdy-puste ceeses-puste"></span></li>
					<li><label>jQuery</label><span class="gwiazdy-pelne jq-pelne"></span><span class="gwiazdy-puste jq-puste"></span></li>
					<li><label>Symfony</label><span class="gwiazdy-pelne symfony-pelne"></span><span class="gwiazdy-puste symfony-puste"></span></li>
					<li><label>PHP</label><span class="gwiazdy-pelne pehape-pelne"></span><span class="gwiazdy-puste pehape-puste"></span></li>
					<li><label>MySQL</label><span class="gwiazdy-pelne eskuel-pelne"></span><span class="gwiazdy-puste eskuel-puste"></span></li>
					<li><label>Git</label><span class="gwiazdy-pelne git-pelne"></span><span class="gwiazdy-puste git-puste"></span></li>
					<li><label>Administracja</label><span class="gwiazdy-pelne admin-pelne"></span><span class="gwiazdy-puste admin-puste"></span></li>
					<li><label>Grafika Rastrowa</label><span class="gwiazdy-pelne rastr-pelne"></span><span class="gwiazdy-puste rastr-puste"></span></li>
					<li><label>Grafika Wektorowa</label><span class="gwiazdy-pelne wektor-pelne"></span><span class="gwiazdy-puste wektor-puste"></span></li>
					<li><label>Język angielski</label><span class="gwiazdy-pelne ang-pelne"></span><span class="gwiazdy-puste ang-puste"></span></li>
					<li><label>Język niemiecki</label><span class="gwiazdy-pelne niem-pelne"></span><span class="gwiazdy-puste niem-puste"></span></li>
                                        <li><label>ReactJS</label><span class="gwiazdy-pelne react-pelne"></span><span class="gwiazdy-puste react-puste"></span></li>
				</ul>
			</div>
<?php
panel_widgety();
html_close();
?>
		