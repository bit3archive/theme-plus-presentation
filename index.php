<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=1024" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <title>Theme+ Präsentation - Contao Konferenz 2012 - by Tristan Lins, InfinitySoft</title>
    
    <meta name="description" content="Theme+ Präsentation - Contao Konferenz 2012" />
    <meta name="author" content="Tristan Lins, InfinitySoft" />

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:regular,semibold,italic,italicsemibold|PT+Sans:400,700,400italic,700italic|PT+Serif:400,700,400italic,700italic|PT+Mono" rel="stylesheet" />

	<script src="syntaxhighlighter_3.0.83/scripts/shCore.js"></script>
    <link href="syntaxhighlighter_3.0.83/styles/shCore.css" rel="stylesheet" />
    <link href="syntaxhighlighter_3.0.83/styles/shThemeDefault.css" rel="stylesheet" />
	<script src="syntaxhighlighter_3.0.83/scripts/shBrushPhp.js"></script>
	<script src="syntaxhighlighter_3.0.83/scripts/shBrushCss.js"></script>
	<script src="syntaxhighlighter_3.0.83/scripts/shBrushJScript.js"></script>
	<script src="syntaxhighlighter_3.0.83/scripts/shBrushXml.js"></script>
	<script src="syntaxhighlighter_3.0.83/scripts/shBrushPlain.js"></script>

    <link href="css/style.css" rel="stylesheet" />
</head>

<body class="impress-not-supported">

<div class="fallback-message">
    <p>Your browser <b>doesn't support the features required</b> by impress.js, so you are presented with a simplified version of this presentation.</p>
    <p>For the best experience please use the latest <b>Chrome</b>, <b>Safari</b> or <b>Firefox</b> browser.</p>
</div>

<?php
$x = 0;
$y = 0;

function right($by = 1000) {
	global $x, $y;
	$x += $by;
	same();
}

function left($by = 1000) {
	global $x, $y;
	$x -= $by;
	same();
}

function up($by = 750) {
	global $x, $y;
	$y -= $by;
	same();
}

function down($by = 750) {
	global $x, $y;
	$y += $by;
	same();
}

$page = 0;

function page() {
	global $page;
	printf('<span class="page">%d</span>', ++$page);
}

function same() {
	global $x, $y;

	printf(' data-x="%d" data-y="%d"', $x, $y);
}

function he($s) {
	return htmlentities($s, null, 'UTF-8');
}
?>

<a href="https://github.com/InfinitySoft/ThemePlus" target="_blank"><img style="position: fixed; top: 0; right: 0; border: 0; z-index: 2;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_green_007200.png" alt="Fork me on GitHub"></a>

<div id="impress">

	<!-- Start-Slide ----------------------------------------------------------------------------------------------- -->
	<div id="start" class="step"<?php same(); ?>>
		<p>
			<img src="images/theme+.svg" alt="Theme+" width="70%">
		</p>
		<p>
			CSS und JavaScript extrem!
			<em>&hellip;und noch ein bisschen mehr&hellip;</em>
		</p>
		<p>
			<a href="http://www.contao-konferenz.de" target="_blank"><img src="images/contao_konferenz_logo2012.svg" alt="Contao Konferenz 2012" width="30%"></a>
			<a href="http://www.infinitysoft.de" target="_blank"><img src="images/infinitysoft-logo.svg" alt="InfinitySoft" width="30%"></a>
		</p>
	</div>

	<div class="step slide center"<?php right(); ?> data-rotate-y="-40">
		<h1>Vorwort</h1>
		<p>Diese Präsentation bezieht sich auf Theme+ Version 3.</p>
		<p>Die meisten Angaben sind jedoch ebenso für<br>
			Theme+ Version 2 gültig.</p>
		<p>Diese Präsentation kann jederzeit online unter<br>
			<a href="http://www.themeplus.de">www.themeplus.de</a> angeschaut werden.</p>
		<p>Diese Präsentation wurde auf der<br><a href="http://www.contao-konferenz.de" target="_blank">Contao Konferenz 2012</a> vorgetragen.</p>

		<p style="font-size: 65%; margin: 1em 0 0;"><a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/de/" target="_blank"><img
			alt="Creative Commons Lizenzvertrag" style="border-width:0"
			src="http://i.creativecommons.org/l/by-sa/3.0/de/88x31.png"/></a><br/><span
			xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/Text" property="dct:title"
			rel="dct:type">Diese Präsentation</span> von <a xmlns:cc="http://creativecommons.org/ns#"
		                                                     href="http://www.infinitysoft.de"
		                                                     property="cc:attributionName" rel="cc:attributionURL" target="_blank">InfinitySoft</a> steht unter einer <a rel="license"
		                                          href="http://creativecommons.org/licenses/by-sa/3.0/de/" target="_blank">Creative
			Commons Namensnennung-Weitergabe unter gleichen Bedingungen 3.0 Deutschland Lizenz</a>.</p>
	</div>

	<div class="step slide center"<?php right(); ?> data-rotate-y="-40">
		<h1>Impressum</h1>
		<p>Diese Präsentation ist Teil des Online Angebots von</p>
		<p><a href="http://www.infinitysoft.de/impressum.html" target="_blank"><img src="images/infinitysoft-logo.svg" alt="InfinitySoft" width="30%"></a></p>
		<p>Alle Details finden Sie hier: <a href="http://www.infinitysoft.de/impressum.html" target="_blank">www.infinitysoft.de/impressum.html</a></p>
	</div>

	<!-- Inhaltsverzeichnis ---------------------------------------------------------------------------------------- -->
    <div class="step slide"<?php right(); ?> data-rotate-y="-40">
		<h1>Inhaltsverzeichnis</h1>
        <ol style="font-size: 75%;">
			<li>
				Über Theme+
				<ul>
					<li>Was ist Theme+ <em>&bull; Idee &amp; Geschichte</em></li>
					<li>Was kann Theme+ <em>&bull; Funktionen</em></li>
				</ul>
			</li>
			<li>
				Theme+ im Einsatz
				<ul>
					<li>Installation</li>
					<li>Variablen</li>
					<li>Dateien</li>
					<li>Zuweisen von Dateien</li>
					<li>Minimierung und Komprimierung</li>
					<li>LessCSS Support</li>
					<li>Bilder in CSS einbetten</li>
					<li>Was man noch wissen sollte?!</li>
				</ul>
			</li>
			<li>
				Optimierung
				<ul>
					<li>Automatische gzip Komprimierung</li>
					<li>Framework Wrapper</li>
					<li>JavaScript Load Blocking verhindern</li>
					<li>JavaScript Execution Blocking verhindern</li>
				</ul>
			</li>
	        <li>
		        API für Entwickler
		        <ul>
			        <li>Die Klassen</li>
			        <li>Dateien und Snipptes im Template einbinden</li>
			        <li>Verfügbare HOOKs</li>
		        </ul>
	        </li>
        </ol>
    </div>

	<!-- Über Theme+ ----------------------------------------------------------------------------------------------- -->
    <div class="step center"<?php right(); ?>>
		<?php echo page(); ?>
	    <h1>Über Theme+</h1>
        <h2>Was ist Theme+?</h2>
	</div>

    <div class="step slide"<?php right(); ?> data-rotate-y="40">
		<?php echo page(); ?>
	    <h1>Über Theme+</h1>
        <h2>Was ist Theme+?</h2>
	    <ul>
		    <li>Theme+ ist eine Erweiterung des Core Framework.</li>
		    <li>Theme+ soll den Umgang mit CSS und JavaScript Dateien vereinfachen.</li>
		    <li>Theme+ soll CSS und JavaScript Dateien zusammenführen, minimieren und komprimieren.</li>
	    </ul>
    </div>

    <div class="step center"<?php right(); ?> data-rotate-y="40">
		<?php echo page(); ?>
	    <h1>Über Theme+</h1>
        <h2>Die Idee</h2>
	</div>

    <div class="step slide"<?php right(); ?> data-rotate-y="40">
		<?php echo page(); ?>
	    <h1>Über Theme+</h1>
        <h2>Die Idee</h2>
	    <ul>
	        <li>CSS und JavaScript Dateien sollen möglichst einfach über das Backend verwaltet werden können.</li>
		    <li>CSS und JavaScript Dateien sollen automatisch komprimiert werden (gzip).</li>
		    <li>CSS und JavaScript Dateien sollen automatisch minimiert werden (cssmin/jsmin/yui).</li>
		    <li>CSS und JavaScript Dateien sollen automatisch zusammengeführt werden.</li>
		    <li>Umfangreiche API für Entwickler sollte vorhanden sein.</li>
	    </ul>
    </div>

    <div class="step center"<?php right(); ?> data-rotate-y="40">
		<?php echo page(); ?>
	    <h1>Über Theme+</h1>
        <h2>Die Entstehungsgeschichte</h2>
	</div>

    <div class="step slide"<?php right(); ?> data-rotate-y="40">
		<?php echo page(); ?>
	    <h1>Über Theme+</h1>
	    <h2>Die Entstehungsgeschichte</h2>
	    <p>Theme+ ist der Nachfolger von layout_additional_sources.</p>
	    <p class="center"><img src="images/historie.svg" width="70%"></p>
    </div>

    <div class="step center"<?php right(); ?> data-rotate-y="40">
		<?php echo page(); ?>
	    <h1>Über Theme+</h1>
        <h2>Funktionen</h2>
	</div>

    <div class="step slide"<?php right(); ?> data-rotate-y="40">
		<?php echo page(); ?>
	    <h1>Über Theme+</h1>
	    <h2>Funktionen</h2>
	    <ul>
		    <li>Lokale/Externe CSS und JavaScript Dateien oder Snippets definierem und einem Layout zuweisen.</li>
		    <li>Dateien Filtern mit Media Queries, Conditional Comments oder Server Side Browser Filter.</li>
		    <li>Filtern von CSS/JS Dateien aus Erweiterungen.</li>
		    <li>WYSIWYG Integration der Dateien.</li>
	    </ul>
    </div>

    <div class="step slide"<?php right(); ?> data-rotate-y="40">
		<?php echo page(); ?>
	    <h1>Über Theme+</h1>
	    <h2>Funktionen</h2>
	    <ul>
		    <li>Code Minimierung mit<br>
			    cssMinimizer (cssmin),<br>
			    jsMinimizer (jsmin),<br>
			    Dean Edwards Packer (DeanEdwardsPacker),<br>
			    YUI Compressor (yui-compressor).</li>
		    <li>Code Komprimierung mit gzip.</li>
		    <li>Zusammenführen mehrere Dateien zu einer.</li>
	    </ul>
    </div>

    <div class="step slide"<?php right(); ?> data-rotate-y="40">
		<?php echo page(); ?>
	    <h1>Über Theme+</h1>
	    <h2>Funktionen</h2>
	    <ul>
		    <li>Deaktivieren der Contao Core CSS.</li>
		    <li>JavaScript Lazy Load Support.</li>
		    <li>YAML Integration mit xYAML<br>
			    (andere Frameworks modular möglich).</li>
		    <li>Unterstützung mehrerer JavaScript Frameworks<br>
			    (jquery Integration mit theme_plus_jquery).</li>
	    </ul>
    </div>

    <div class="step slide"<?php right(); ?> data-rotate-y="40">
		<?php echo page(); ?>
	    <h1>Über Theme+</h1>
	    <h2>Funktionen</h2>
	    <ul>
		    <li>Bilder in CSS Dateien automatisch einbetten.</li>
		    <li>Less CSS Support<br>
			    (mit lessphp oder less.js, auch via Node.js).</li>
		    <li>Variablen in CSS und JavaScript Dateien verwenden.</li>
		    <li>Insert-Tags in CSS und JavaScript Dateien verwenden.</li>
		    <li>Objekt Orientierte API für Entwickler.</li>
	    </ul>
    </div>


	<!-- Theme+ im Einsatz ----------------------------------------------------------------------------------------- -->
    <div class="step center"<?php right(); ?>>
		<?php echo page(); ?>
	    <h1>Theme+ im Einsatz</h1>
        <h2>Installation</h2>
	</div>

	<div class="step slide"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
		<h1>Theme+ im Einsatz</h1>
		<h2>Installation</h2>
		<ul>
			<li>über das ER: <strong>theme_plus</strong></li>
			<li class="hide">layout_additional_sources für Contao &lt; 2.10</li>
			<li>Version 2.2 stable für Contao = 2.10</li>
			<li>Version 3.0 rc1 für Contao &ge; 2.10</li>
			<li>über github: <a href="https://github.com/InfinitySoft/ThemePlus">github.com/InfinitySoft/ThemePlus</a></li>
		</ul>
	</div>

	<div class="step screen"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
		<img src="images/contao_theme.png">
	</div>

	<div class="step screen"<?php same(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
		<img src="images/contao_theme_b.png">
	</div>

    <div class="step center"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
	    <h1>Theme+ im Einsatz</h1>
        <h2>Variablen</h2>
	</div>

	<div class="step slide"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
		<h1>Theme+ im Einsatz</h1>
		<h2>Variablen</h2>
		<ul>
			<li>werden pro Theme festgelegt (nicht pro Datei)</li>
			<li>Zugriff in Datei: <strong>$variablename</strong></li>
			<li>Verwendung in CSS und JavaScript möglich</li>
		</ul>
	</div>

	<div class="step screen"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
		<img src="images/contao_variable.png">
	</div>

    <div class="step center"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
	    <h1>Theme+ im Einsatz</h1>
        <h2>Dateien</h2>
	</div>

	<div class="step slide"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
		<h1>Theme+ im Einsatz</h1>
		<h2>Dateien</h2>
		<ul>
			<li>werden pro Theme festgelegt</li>
			<li>können Themeübergreifend verwendet werden<br>
				(nutzen aber die Variablen des Themes, in dem sie definiert wurden)</li>
			<li>3 Arten von Dateien:
				<ul>
					<li>Lokale Datei (aus tl_files, änderbar via DCA)</li>
					<li>Externe URL</li>
					<li>Code Snippet</li>
				</ul>
			</li>
		</ul>
	</div>

	<div class="step screen"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
		<img src="images/contao_files.png">
	</div>

	<div class="step screen"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
		<img src="images/contao_file1.png">
	</div>

	<div class="step screen"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
		<img src="images/contao_file2.png">
	</div>

	<div class="step screen"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
		<img src="images/contao_file3.png">
	</div>

	<div class="step screen"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
		<img src="images/contao_file4.png">
	</div>

	<div class="step screen"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
		<img src="images/contao_file5.png">
	</div>

    <div class="step center"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
	    <h1>Theme+ im Einsatz</h1>
        <h2>Zuweisen von Dateien</h2>
	</div>

	<div class="step slide"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
		<h1>Theme+ im Einsatz</h1>
		<h2>Zuweisen von Dateien</h2>
		<ul>
			<li>Dateien können auf 3 Ebenen zugewiesen werden:
				<ul>
					<li>im Layout</li>
					<li>pro Seite (nur eine Seite)</li>
					<li>pro Seitenzweig (eine Seite zzgl. ihrer Unterseiten)</li>
				</ul>
			</li>
		</ul>
	</div>

	<div class="step screen"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
		<img src="images/contao_layout1.png">
	</div>

	<div class="step screen"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
		<img src="images/contao_layout1_a.png">
	</div>

	<div class="step screen"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
		<img src="images/contao_layout2_a.png">
	</div>

	<div class="step screen"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
		<img src="images/contao_layout3_c.png">
	</div>

	<div class="step screen"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
		<img src="images/contao_page1.png">
	</div>

	<div class="step screen"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
		<img src="images/contao_page2.png">
	</div>

	<div class="step screen"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
		<img src="images/contao_page3.png">
	</div>

    <div class="step center"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
	    <h1>Theme+ im Einsatz</h1>
        <h2>Minimierung und Komprimierung</h2>
	</div>

	<div class="step slide"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
		<h1>Theme+ im Einsatz</h1>
		<h2>Minimierung und Komprimierung</h2>
		<ul>
			<li>Wird global in den Systemeinstellungen aktiviert.</li>
			<li>Die Minimierung benötigt weitere Pakete mit einem Minimizer.</li>
			<li>(Zusammenführen ist immer aktiviert und kann nicht global deaktiviert werden).</li>
		</ul>
	</div>

	<div class="step screen"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
		<img src="images/contao_systemsettings_a.png">
	</div>

    <div class="step center"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
	    <h1>Theme+ im Einsatz</h1>
        <h2>LessCSS Support</h2>
	</div>

	<div class="step slide"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
		<h1>Theme+ im Einsatz</h1>
		<h2>LessCSS Support</h2>
		<ul>
			<li>Ermöglicht den Einsatz von LessCSS Syntax.</li>
			<li>Dateien mit der Endung *.less werden evaluiert.</li>
			<li>Benötigt einen Less Compiler, dieser wird über weitere Pakete
				(<a href="http://www.contao.org/erweiterungsliste/view/lesscss.de.html" target="_blank">lesscss</a> und
				<a href="http://www.contao.org/erweiterungsliste/view/phpless.de.html" target="_blank">phpless</a>) bereitgestellt.</li>
		</ul>
	</div>

	<div class="step slide"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
		<h1>Theme+ im Einsatz</h1>
		<h2>LessCSS Syntax (Details siehe <a href="http://lesscss.org/" target="_blank">lesscss.org</a>)</h2>
		<pre class="brush:css">section {
  background: #000;
  padding: 20px;
  border-radius: 10px;

  article {
    background: #fff;

    .blue {
      color: #00f;
    }
  }
}</pre>
	</div>

	<div class="step screen"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
		<img src="images/contao_systemsettings_b.png">
	</div>

	<div class="step slide"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
		<h1>Theme+ im Einsatz</h1>
		<h2>LessCSS Support</h2>
		<p>Die Erweiterung <a href="http://www.contao.org/erweiterungsliste/view/phpless-extension.de.html" target="_blank">phpless-extension</a>
			erweitert die Funktion des phpless Compiler um automatisches hinzufügen von Browser Prefixen und fügt eine Hilfsfunktionen hinzu, z.B.:</p>
		<pre class="brush:css">.verlauf {
  gradient: #000000 10% #ffffff 90%;
}</pre>
	</div>

    <div class="step center"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
	    <h1>Theme+ im Einsatz</h1>
        <h2>Bilder in CSS einbetten</h2>
	</div>

	<div class="step slide"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
		<h1>Theme+ im Einsatz</h1>
		<h2>Bilder in CSS einbetten</h2>
		<ul>
			<li>Alternative zu Sprites.</li>
			<li>Bei kleinen Dateien sehr effizient.</li>
			<li>Produziert Overhead wenn die gleiche Datei oft wieder verwendet wird.</li>
			<li>InternetExplorer &le; 7 unterstützt keine eingebetteten Bilder.</li>
		</ul>
	</div>

	<div class="step screen"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
		<img src="images/contao_systemsettings_c.png">
	</div>

    <div class="step center"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
	    <h1>Theme+ im Einsatz</h1>
        <h2>Was man noch wissen sollte?!</h2>
	</div>

	<div class="step slide"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
		<h1>Theme+ im Einsatz</h1>
		<h2>Theme+ <strong>kompiliert</strong> alle Dateien!</h2>
		<ul>
			<li>Theme+ setzt einen eigenen <code>@media</code> Block, wenn der Media-Query gesetzt wurde!</li>
			<li><strong>Alle</strong> Dateien kommen aus <code>system/scripts/</code>!</li>
			<li>Insert-Tags werden ausgewertet.</li>
		</ul>
	</div>

	<div class="step slide"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
		<h1>Theme+ im Einsatz</h1>
		<h2>Bekannte Probleme</h2>
		<ul>
			<li>cssmin versteht kein <code>@media all</code>!</li>
			<li>lessphp versteht kein <code>@media</code>!</li>
			<li><code>@import</code> wird nicht unterstützt!</li>
			<li><code>@font-face</code> muss mit bedacht eingesetzt werden! (Stichwort: Media-Query)</li>
			<li>Die Filter funktionieren (noch) nicht in Verbindung mit dem Seitencache!</li>
		</ul>
	</div>

	<div class="step slide"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
		<h1>Theme+ im Einsatz</h1>
		<h2>Entwicklermodus!</h2>
		<ul>
			<li>Ist aktiv sobald man im Backend angemeldet ist!</li>
			<li>Wird deaktiviert sobald man sich abmeldet!</li>
			<li>Kein Debug/Entwickler Flag notwendig/vorhanden!</li>
		</ul>
	</div>

	<div class="step screen"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
		<img src="images/contao_html1.png">
	</div>

	<div class="step screen"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
		<img src="images/contao_html2.png">
	</div>

	<div class="step screen"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
		<img src="images/contao_html5.png">
	</div>

	<div class="step screen"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
		<img src="images/contao_html6.png">
	</div>

	<!-- Optimierung ----------------------------------------------------------------------------------------------- -->
    <div class="step center"<?php right(); ?>>
		<?php echo page(); ?>
	    <h1>Optimierung</h1>
	</div>

    <div class="step slide"<?php right(); ?> data-rotate-y="40">
		<?php echo page(); ?>
        <h1>Optimierung</h1>
	    <ul>
		    <li>Automatische gzip Komprimierung</li>
		    <li>Framework Wrapper</li>
		    <li>JavaScript Load Blocking verhindern</li>
		    <li>JavaScript Execution Blocking verhindern</li>
	    </ul>
    </div>

    <div class="step slide"<?php right(); ?> data-rotate-y="40">
		<?php echo page(); ?>
        <h1>Optimierung</h1>
	    <h2>Automatische gzip Komprimierung</h2>
	    <p>Ladezeit von CSS und JavaScript Dateien ohne höhere Systemlast.</p>
	    <p>Contao 2.10+ setzt auf mod_deflate.</p>
    </div>

	<div class="step screen"<?php right(); ?> data-rotate-y="40">
		<?php echo page(); ?>
		<img src="images/10k.png" width="960" style="margin-top:49px;">
	</div>

	<div class="step screen"<?php right(); ?> data-rotate-y="40">
		<?php echo page(); ?>
		<img src="images/50k.png" width="960" style="margin-top:49px;">
	</div>

    <div class="step slide"<?php right(); ?> data-rotate-y="40">
		<?php echo page(); ?>
        <h1>Optimierung</h1>
	    <h2>Automatische gzip Komprimierung</h2>
	    <p>Benötigt Anpassung der .htaccess Datei.</p>
	    <div style="font-size: 80%;">
	        <pre class="brush: plain">##
# If you cannot use mod_deflate, uncomment the
# following lines to load a compressed .gz version
# of the bigger Contao JavaScript and CSS files.
##
AddEncoding gzip .gz
&lt;FilesMatch "\.js\.gz$"&gt;
  AddType "text/javascript" .gz
&lt;/FilesMatch&gt;
&lt;FilesMatch "\.css\.gz$"&gt;
  AddType "text/css" .gz
&lt;/FilesMatch&gt;
RewriteCond %{HTTP:Accept-encoding} gzip
RewriteCond %{REQUEST_FILENAME} \.(js|css)$
RewriteCond %{REQUEST_FILENAME}.gz -f
RewriteRule ^(.*)$ $1.gz [QSA,L]</pre>
	    </div>
    </div>

    <div class="step slide"<?php right(); ?> data-rotate-y="40">
		<?php echo page(); ?>
        <h1>Optimierung</h1>
	    <h2>Framework Wrapper</h2>
	    <p>Ermöglicht den (nahezu) konfliktlosen Einsatz mehrerer Frameworks parallel.</p>
    </div>

	<div class="step screen"<?php right(); ?> data-rotate-y="40">
		<?php echo page(); ?>
		<img src="images/contao_file6.png">
	</div>

	<div class="step slide"<?php right(); ?> data-rotate-y="40">
		<?php echo page(); ?>
		<h1>Optimierung</h1>
		<h2>Framework Wrapper</h2>
		<h3>MooTools</h3>
		<pre class="brush: js">(function($, $$){
	// Original file content
})(document.id, document.search);</pre>
		<h3>jQuery</h3>
		<pre class="brush: js">(function($) {
	// Original file content
})(jQuery);</pre>
	</div>

    <div class="step slide"<?php right(); ?> data-rotate-y="40">
		<?php echo page(); ?>
        <h1>Optimierung</h1>
	    <h2>JavaScript Load Blocking verhindern</h2>
	    <p>JavaScripts vom HEAD an das Ende der Seite verschieben.</p>
	    <p>Verhindert Blockieren des Seitenaufbaus beim <strong>laden</strong> der JavaScript Dateien.</p>
    </div>

	<div class="step screen"<?php right(); ?> data-rotate-y="40">
		<?php echo page(); ?>
		<img src="images/contao_file7.png">
	</div>

	<div class="step screen"<?php right(); ?> data-rotate-y="40">
		<?php echo page(); ?>
		<img src="images/contao_layout3_a.png">
	</div>

	<div class="step slide"<?php right(); ?> data-rotate-y="40">
		<?php echo page(); ?>
		<h1>Optimierung</h1>
		<h2>Position im HEAD</h2>
		<pre class="brush: xhtml"><?php echo he('<html>
  <head>
    …
    <script src="script.js">
      </script>
  </head>
  <body>
    …
  </body>
</html>'); ?></pre>
	</div>

	<div class="step slide"<?php right(); ?> data-rotate-y="40">
		<?php echo page(); ?>
		<h1>Optimierung</h1>
		<h2>Position am Ende des BODY</h2>
		<pre class="brush: html"><?php echo he('<html>
  <head>
    …
  </head>
  <body>
    …
    <script src="script.js">
      </script>
  </body>
</html>'); ?></pre>
	</div>

    <div class="step slide"<?php right(); ?> data-rotate-y="40">
		<?php echo page(); ?>
        <h1>Optimierung</h1>
	    <h2>JavaScript Execution Blocking verhindern</h2>
	    <p>JavaScripts werden asynchron nachgeladen.</p>
	    <p>Verhindert Blockieren des Seitenaufbaus beim <strong>ausführen</strong> der JavaScript Dateien.</p>
    </div>

	<div class="step screen"<?php right(); ?> data-rotate-y="40">
		<?php echo page(); ?>
		<img src="images/contao_layout3_b.png">
	</div>

	<div class="step screen"<?php right(); ?> data-rotate-y="40">
		<?php echo page(); ?>
		<img src="images/contao_html4.png">
	</div>

	<!-- API ------------------------------------------------------------------------------------------------------- -->
    <div class="step center"<?php right(); ?>>
		<?php echo page(); ?>
	    <h1>API für Entwickler</h1>
	</div>

    <div class="step slide"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
        <h1>API für Entwickler</h1>
	    <ul>
		    <li>Die Klassen</li>
		    <li>Dateien und Snipptes im Template einbinden</li>
		    <li>Verfügbare HOOKs</li>
	    </ul>
    </div>

    <div class="step slide"<?php right(); ?> data-rotate-y="-40" style="width: 1015px">
		<?php echo page(); ?>
        <h1>API für Entwickler</h1>
	    <h2>Klassenhierarchie</h2>
		<p class="center"><img src="images/classes.png" style="margin: 0 -60px;"></p>
    </div>

    <div class="step slide"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
        <h1>API für Entwickler</h1>
	    <h2>Klassen für lokale Dateien</h2>
	    <ul>
		    <li>LocalCssFile</li>
		    <li>LocalLessCssFile</li>
		    <li>LocalJavaScriptFile</li>
	    </ul>
    </div>

    <div class="step slide"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
        <h1>API für Entwickler</h1>
	    <h2>LocalThemePlusFile</h2>
	    <div style="font-size: 50%">
	        <pre class="brush:php">abstract class LocalThemePlusFile
    extends ThemePlusFile {
  public function __construct($strFile);

  public function getOriginFile();
  public function getFile();

  public function setAggregation($strAggregation);
  public function getAggregation();

  public function setAggregationScope($strAggregationScope);
  public function getAggregationScope();

  public function setTheme(Database_Result $objTheme);
  public function getTheme();

  public function isAggregateable();

  public function setCc($strCc);
  public function getCc();

  public function getEmbeddedHtml($blnLazy = false);
  public function getIncludeHtml($blnLazy = false);
}</pre>
	    </div>
    </div>

    <div class="step slide"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
        <h1>API für Entwickler</h1>
	    <h2>LocalCssFile</h2>
	    <div style="font-size: 50%">
		    <pre class="brush:php">class LocalCssFile
    extends LocalThemePlusFile
    implements CssFile {
  public function setMedia($strMedia);
  public function getMedia();

  public function setAbsolutizePage($objAbsolutizePage);
  public function getAbsolutizePage();
}</pre>
		</div>
    </div>

    <div class="step slide"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
        <h1>API für Entwickler</h1>
	    <h2>LocalJavaScriptFile</h2>
	    <div style="font-size: 50%">
		    <pre class="brush:php">class LocalJavaScriptFile
    extends LocalThemePlusFile
    implements JavaScriptFile {
  const JQUERY = 'jquery';
  const MOOTOOLS = 'mootools';

  public function setPosition($strPosition);
  public function getPosition();

  public function setFrameworkContext($strFrameworkContext);
  public function getFrameworkContext();
}</pre>
		</div>
    </div>

    <div class="step slide"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
        <h1>API für Entwickler</h1>
	    <h2>Klassen für externe Dateien</h2>
	    <ul>
		    <li>ExternalCssFile</li>
		    <li>ExternalLessCssFile</li>
		    <li>ExternalJavaScriptFile</li>
	    </ul>
    </div>

    <div class="step slide"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
        <h1>API für Entwickler</h1>
	    <h2>ExternalThemePlusFile</h2>
	    <div style="font-size: 50%">
	        <pre class="brush:php">abstract class ExternalThemePlusFile
    extends ThemePlusFile {
  public function __construct($strUrl);

  public function getUrl()

  public function setCc($strCc);
  public function getCc();

  public function getEmbeddedHtml($blnLazy = false);
  public function getIncludeHtml($blnLazy = false);
}</pre>
	    </div>
    </div>

    <div class="step slide"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
        <h1>API für Entwickler</h1>
	    <h2>ExternalCssFile</h2>
	    <div style="font-size: 50%">
		    <pre class="brush:php">class ExternalCssFile
    extends ExternalThemePlusFile
    implements CssFile {
  public function setMedia($strMedia);
  public function getMedia();
}</pre>
		</div>
    </div>

    <div class="step slide"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
        <h1>API für Entwickler</h1>
	    <h2>ExternalJavaScriptFile</h2>
	    <div style="font-size: 50%">
		    <pre class="brush:php">class ExternalJavaScriptFile
    extends ExternalThemePlusFile
    implements JavaScriptFile {
  public function setPosition($strPosition);
  public function getPosition();
}</pre>
		</div>
    </div>

    <div class="step slide"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
        <h1>API für Entwickler</h1>
	    <h2>Klassen für Code Snippets</h2>
	    <ul>
		    <li>CssCode</li>
		    <li>JavaScriptCode</li>
	    </ul>
    </div>

    <div class="step slide"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
        <h1>API für Entwickler</h1>
	    <h2>CssCode</h2>
	    <div style="font-size: 50%">
		    <pre class="brush:php">class CssCode
    extends LocalCssFile {
  public function __construct($strCode, $strReference = 'undefined');

  public function getCode();
}</pre>
		</div>
    </div>

    <div class="step slide"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
        <h1>API für Entwickler</h1>
	    <h2>JavaScriptCode</h2>
	    <div style="font-size: 50%">
		    <pre class="brush:php">class JavaScriptCode
    extends LocalJavaScriptFile {
  public function __construct($strCode, $strReference = 'undefined');

  public function getCode();
}</pre>
		</div>
    </div>

    <div class="step slide"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
        <h1>API für Entwickler</h1>
	    <h2>Klassen für Aggregation</h2>
	    <ul>
		    <li>FileAggregator</li>
		    <li>CssFileAggregator</li>
		    <li>JavaScriptCode</li>
	    </ul>
    </div>

    <div class="step slide"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
        <h1>API für Entwickler</h1>
	    <h2>FileAggregator</h2>
	    <div style="font-size: 50%">
		    <pre class="brush:php">abstract class FileAggregator
    extends LocalThemePlusFile {
  public function __construct($strScope);

  public function getScope();
}</pre>
		</div>
    </div>

    <div class="step slide"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
        <h1>API für Entwickler</h1>
	    <h2>CssFileAggregator</h2>
	    <div style="font-size: 50%">
		    <pre class="brush:php">class CssFileAggregator
    extends FileAggregator {
  public function add(LocalCssFile $objFile);
}</pre>
		</div>
    </div>

    <div class="step slide"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
        <h1>API für Entwickler</h1>
	    <h2>JavaScriptFileAggregator</h2>
	    <div style="font-size: 50%">
		    <pre class="brush:php">class JavaScriptFileAggregator
    extends FileAggregator {
  public function add(LocalJavaScriptFile $objFile);
}</pre>
		</div>
    </div>

    <div class="step slide"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
        <h1>API für Entwickler</h1>
	    <h2>Dateien und Snippets im Template definieren</h2>
	    <div style="font-size: 50%">
		    <pre class="brush:php">&lt;?php
$objFile = new CssCode('body {
  font-family: Verdana, sans;
}', 'BodyFont');

$GLOBALS['TL_CSS'][] = $objFile;
?&gt;</pre>
		</div>
	    <p>Das funktioniert auch Analog mit den anderen Klassen.</p>
    </div>

    <div class="step slide"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
        <h1>API für Entwickler</h1>
	    <h2>Zusätzliche globale Variablen</h2>
	    <p><code>$GLOBALS['TL_JAVASCRIPT_BODY']</code>, JavaScripts die geziehlt im <code>&lt;body&gt;</code> anstatt im <code>&lt;head&gt;</code> eingefügt werden sollen.</p>
	    <div style="font-size: 50%">
		    <pre class="brush:php">&lt;?php
$objFile = new LocalJavaScriptFile('tl_files/scripts/script.js');

$GLOBALS['TL_JAVASCRIPT_BODY'][] = $objFile;
?&gt;</pre>
		</div>
    </div>

    <div class="step slide"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
        <h1>API für Entwickler</h1>
	    <h2>Zusätzliche globale Variablen</h2>
	    <p><code>$GLOBALS['TL_JAVASCRIPT_CODE_BODY']</code>, JavaScript Code der geziehlt im <code>&lt;body&gt;</code> anstatt im <code>&lt;head&gt;</code> eingefügt werden sollen.</p>
	    <div style="font-size: 50%">
		    <pre class="brush:php">&lt;?php
$GLOBALS['TL_JAVASCRIPT_CODE_BODY'][] = 'tl_files/scripts/dojo.js';
?&gt;</pre>
		</div>
    </div>

    <div class="step slide"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
        <h1>API für Entwickler</h1>
	    <h2>Zusätzliche globale Variablen</h2>
	    <p><code>$GLOBALS['TL_JAVASCRIPT_FRAMEWORK']</code>, JavaScripts die zum Framework gehören, diese werden immer zuerst eingebunden (vor <code>$GLOBALS['TL_JAVASCRIPT']</code>).</p>
	    <div style="font-size: 50%">
		    <pre class="brush:php">&lt;?php
$GLOBALS['TL_JAVASCRIPT_CODE_BODY'][] = '$(function() {
  alert("I'm a code run at the end of &lt;body&gt;!");
});';
?&gt;</pre>
		</div>
    </div>

	<?php /*
    <div class="step slide"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
        <h1>API für Entwickler</h1>
	    <h2>HOOK TL_JAVASCRIPT_FRAMEWORK</h2>
	    <code>$GLOBALS['TL_JAVASCRIPT_CODE_BODY']</code>, JavaScript Code der geziehlt im <code>&lt;body&gt;</code> anstatt im <code>&lt;head&gt;</code> eingefügt werden sollen.
	    <div style="font-size: 50%">
		    <pre class="brush:php">&lt;?php
$GLOBALS['TL_JAVASCRIPT_CODE_BODY'][] = '$(function() {
  alert("I'm a code run at the end of &lt;body&gt;!");
});';
?&gt;</pre>
		</div>
    </div>
    */ ?>

    <div class="step slide"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
        <h1>API für Entwickler</h1>
	    <h2>HOOK <code>$GLOBALS['TL_HOOKS']['generateFrameworkCss']</code></h2>
	    <p>Kann zum Generieren des Framework CSS Codes genutzt werden (Definition von linker/rechter Spalte).</p>
	    <div style="font-size: 50%">
		    <pre class="brush:php">&lt;?php
$GLOBALS['TL_HOOKS']['generateFrameworkCss'][] =
    array('MyClass', 'hookGenerateFrameworkCss');

class MyClass
{
  public function hookGenerateFrameworkCss($objPage, $objLayout, $objPageRegular)
  {
    // generate a new css or return false
    return false;
  }
}
?&gt;</pre>
		</div>
    </div>

    <div class="step slide"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
        <h1>API für Entwickler</h1>
	    <h2>HOOK <code>$GLOBALS['TL_HOOKS']['renderVariable']</code></h2>
	    <p>Rendert eine Variable und gibt den Code zurück mit dem die Variable ersetzt wird.</p>
	    <div style="font-size: 50%">
		    <pre class="brush:php">&lt;?php
$GLOBALS['TL_HOOKS']['renderVariable'][] =
    array('MyClass', 'hookRenderVariable');

class MyClass
{
  public function hookRenderVariable($arrRow, $strPath)
  {
    // generate a new code or return false
    return false;
  }
}
?&gt;</pre>
		</div>
    </div>

    <div class="step slide"<?php right(); ?> data-rotate-y="-40">
		<?php echo page(); ?>
        <h1>API für Entwickler</h1>
	    <h2>HOOK <code>$GLOBALS['TL_HOOKS']['replaceUndefinedVariable']</code></h2>
	    <p>Wird aufgerufen wenn eine Variable nicht gefunden wurde.</p>
	    <div style="font-size: 50%">
		    <pre class="brush:php">&lt;?php
$GLOBALS['TL_HOOKS']['replaceUndefinedVariable'][] =
    array('MyClass', 'hookReplaceUndefinedVariable');

class MyClass
{
  public function hookReplaceUndefinedVariable($strName)
  {
    // return the missing variable content or false
    return false;
  }
}
?&gt;</pre>
		</div>
    </div>

    <div class="step slide center"<?php right(); ?>>
        <h1>Das wars&hellip;</h1>
	    <p>Irgendwann hat alles mal ein Ende und so auch diese Präsentation.</p>
	    <p>;-)</p>
	    <p>Für mehr Infos, schaut doch mal auf unserer <a href="http://www.infinitysoft.de" target="_blank">Website</a> vorbei
		    und folgt uns auf <a href="https://plus.google.com/b/108556102165269291996/108556102165269291996/posts" target="_blank">Google+</a>,
		    <a href="https://www.facebook.com/InfinitySoft" target="_blank">Facebook</a> oder
		    <a href="https://twitter.com/#!@InfinitySoftGer" target="_blank">Twitter</a>.
		    Oder schaut in das <a href="https://www.contao-community.de/forumdisplay.php?127-theme_plus" target="_blank">Forum</a> zu Theme+.</p>
    </div>
</div>

<script src="js/impress.js"></script>
<script>impress().init();</script>
<script>SyntaxHighlighter.all()</script>

</body>
</html>
