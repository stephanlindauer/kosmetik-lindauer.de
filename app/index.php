<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="keywords" content="Kosmetik, Germering" />
<title>Beauty &amp; More Kosmetik - Theresia Lindauer - Germering</title>
<link href="styles.css" rel="stylesheet" type="text/css" media="all" />
<link type="image/x-icon" href="favicon.ico" rel="shortcut icon"/>
</head>
<?php
if (!isset($_GET["go"])){
$go = 'home';
} else {
$go = $_GET["go"];
}
?>
<body <?php
	if ($go=='kontakt'){
?> onload="initialize()" onunload="GUnload()"<?php
	}
?>>
<h1  class="hidden">Beauty &amp; More Kosmetik - Theresia Lindauer - Germering</h1>
<div class="wrapper">

	 <a href="index.php?go=reiki"> <img src="reiki.png" id="reikibutton"/></a>
  <?php
	if ($go=='home'){
?>
  <div id="banner"><img src="home.jpg" height="447" width="286" border="0" /></div>

  <div class="content" >
    <h2 class="hidden">Home</h2>
    <p>Nur an sich deanken,
      sich richtig verwöhnen lassen,
      davon träumen wir alle.</p>
    <p> Leben Sie Ihre Träume und
      tanken Sie neue Energie für
      Ihren Alltag.
      Das Ergebnis können Sie sehen
      und fühlen.</p>
    <p> Fragen Sie nach unseren
      Gutscheinen! </p>
    <p>Ihre Theresia Lindauer</p>
  </div>
    <?php
	  } elseif($go=="reiki") {
?>
    <div id="banner"><img src="reikibanner.jpg" height="447" width="286" border="0" /></div>

  <div class="content" >
<h3>Reiki - die allumfassende Lebensenergie</h3>
    <img src="reikibla.png" id="reikiimg"/>
    <p> Reiki ist der japanische Name für universelle Lebensenergie. Zugleich ist es eine Methode, Lebensenergie

durch die Hände fließen zu lassen. Reiki aktiviert die Selbstheilungskräfte des Menschen und unterstützt die

persönliche Entwicklung. Als Nebeneffekt wirkt es entspannend und tut gut.
    </p><p>
    	Die universelle Lebensenergie unterstützt alles Lebendige in seiner Entfaltung und seinem Ausdruck. Es

wirkt sowohl auf den physischen Körper, auf der emotionalen, der mentalen Ebene und auf der spirituellen

Ebene. All dies ist für den Praktizierenden spürbar und erfahrbar.
    </p><p>
    	Einmal erlernt fällt es dem Praktizierenden leicht, die Energie durch seine Hände fließen zu lassen, um sich

selbst und seine Lebensumwelt zu unterstützen, Reiki entspannend und heilend wirken zu lassen.
    </p>
  </div>
  <?php
	  } elseif($go=="angebot") {
?>
  <div id="banner"><img src="angebot.jpg" height="447" width="286" border="0" /></div>
  <div class="content" >
    <h2 class="hidden">Angebot</h2>
    <h3>Face Mapping</h3>
    <p>Die traditionelle chinesische Medizin ist die Basis für das Face Mapping, eine spezielle Form der Hautanalyse Ihrer 14 Hautzonen. Erfahren Sie alles über die Vergangenheit, Gegenwart und die Zukunft Ihrer Haut.</p>
    <h3>Dermalogica</h3>
    <p>
    <ul>
      <li>ohne künstliche Farbstoffe, Duftstoffe und Weichmacher</li>
      <li>ohne Mineralöle und Lanolin</li>
      <li>ohne denaturierten Alkohol</li>
      <li>in umweltfreundlicher Verpackung</li>
      <li>ohne Tierversuche</li>
    </ul>
    </p>
    <h3>Ihr individuelles Pflegeprogramm</h3>
    <p> Alle Behandlungen werden mit Ihrer individuellen Wirkstoffkombination nach der "Face Mapping" Analyse durchgeführt! </p>
    <p>
    <ul>
      <li>Basisgesichtsbehandlung</li>
      <li>Multivitaminpower Behandlung</li>
      <li>Intensive Feuchtigkeitsbehandlung</li>
      <li>Sensitive Behandlung</li>
      <li>Pigmentregulierende Behandlung</li>
      <li>Tiefenreinigungsbehandlung</li>
      <li>Entspannende Kopfhautbehandlung</li>
      <li>Rückenmassage mit ätherischen Ölen</li>
      <li>Wimpern und Augenbrauen färben</li>
      <li>Maniküre und Handpackung</li>
      <li>Enthaarung</li>
      <li>Make Up: Braut / Gala / Foto</li>
    </ul>
    </p>
    <h3>Reiki - die allumfassende Lebensenergie</h3>
    <img src="reikibla.png" id="reikiimg"/>
    <p> Reiki ist der japanische Name für universelle Lebensenergie. Zugleich ist es eine Methode, Lebensenergie

durch die Hände fließen zu lassen. Reiki aktiviert die Selbstheilungskräfte des Menschen und unterstützt die

persönliche Entwicklung. Als Nebeneffekt wirkt es entspannend und tut gut.
    </p><p>
    	Die universelle Lebensenergie unterstützt alles Lebendige in seiner Entfaltung und seinem Ausdruck. Es

wirkt sowohl auf den physischen Körper, auf der emotionalen, der mentalen Ebene und auf der spirituellen

Ebene. All dies ist für den Praktizierenden spürbar und erfahrbar.
    </p><p>
    	Einmal erlernt fällt es dem Praktizierenden leicht, die Energie durch seine Hände fließen zu lassen, um sich

selbst und seine Lebensumwelt zu unterstützen, Reiki entspannend und heilend wirken zu lassen.
    </p>
  </div>
  <?php
}elseif($go=="uebermich") {
?>
  <div id="banner"><img src="uebermich.jpg" height="447" width="286" border="0" /></div>
  <div class="content" >
    <h2 class="hidden">UeberMich</h2>
    <h3>Theresia Lindauer</h3>
    <img id="portrait" src="lindauerklein.jpg" alt="Theresia Lindauer"/>
    <ul>
      <li>Ausbildung und Zertifikat
        als Fachkosmetikerin</li>
      <li>Friseurin und Visagistin.</li>
      <li>Reiki Zertifikat ( 1. Grad )</li>
    </ul>
  </div>
  <?php
}elseif($go=="kontakt") {
?>
  <div id="banner"> <img src="http://maps.google.com/maps/api/staticmap?center=Geschwister-Scholl-Ring+49,+82110,+Germering&zoom=14&size=286x447&maptype=roadmap&sensor=false&markers=color:red|48.129857,11.368144" height="447" width="286" border="0" /> </div>
  <div class="content" >
    <h2 class="hidden">Kontakt</h2>
    <p> Kosmetikstudio -
      Theresia Lindauer</p>
    <p> Geschwister-Scholl-Ring 49<br/>
      82110 Germering</p>
	  <p><font color="red"><b>DERZEIT GESCHLOSSEN</b></font></p>	  
    <p> Tel.: 089/ 8948718<br/>
      Fax: 089/ 8948427<br/>
      Mobil: 0171/ 3158322</p>
    <p> <a href="mailto:theresia.lindauer@gmail.com">theresia.lindauer@gmail.com</a></p>
  </div>
  <?php
}
?>
<script type="text/javascript">
function oeffnefenster (url) {
   fenster = window.open(url, 'fenster1', 'width=600,height=400,status=yes,scrollbars=yes,resizable=yes');
   fenster.focus();
}
</script>
  <div id="footer"><a href="impressum.html" onclick="javascript:oeffnefenster('impressum.html'); return false;" target="_blank"> <span class="footerlink">impressum</span></a> </div>
  <div id="logo"> <a href="index.php?go=home"><img src="logo.png" alt="beauty and more - logo" height="210" width="412" border="0" /></a></div>
  <div id="navcontainer">
    <ul>
      <li><a href="index.php?go=home">
        <?php if($go=="home"){ ?>
        <span class="aktiv">
        <?php } ?>
        <span>HOME</span>
        <?php if($go=="home"){ ?>
        </span>
        <?php } ?>
        </a></li>
      <li><a href="index.php?go=angebot">
        <?php if($go=="angebot") { ?>
        <span class="aktiv">
        <?php } ?>
        <span>ANGEBOT</span>
        <?php if($go=="angebot") { ?>
        </span>
        <?php } ?>
        </a></li>
      <li><a href="index.php?go=uebermich">
        <?php if($go=="uebermich") { ?>
        <span class="aktiv">
        <?php } ?>
        <span>ÜBER MICH</span>
        <?php if($go=="uebermich") { ?>
        </span>
        <?php } ?>
        </a></li>
      <li><a href="index.php?go=kontakt">
        <?php if($go=="kontakt") { ?>
        <span class="aktiv">
        <?php } ?>
        <span>KONTAKT</span>
        <?php if($go=="kontakt") { ?>
        </span>
        <?php } ?>
        </a></li>
        <!-- <li><a href="index.php?go=kontakt">
        <?php if($go=="kontakt") { ?>
        <span class="aktiv">
        <?php } ?>
        <span>REIKI</span>
        <?php if($go=="kontakt") { ?>
        </span>
        <?php } ?>
        </a></li> -->
    </ul>
  </div>
</div>
<?php
if($go=="kontakt") {
?>
<script src="https://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=ABQIAAAAyN3fBFcKklNo2uQRL3tqtxRwEU8DvmQtUgIoxZifszU2gN7SzRRKAPM9PThx1N4clt59P80lzrKc6g" type="text/javascript"></script>
<script type="text/javascript">
    function initialize() {
      if (GBrowserIsCompatible()) {
        var map = new GMap2(document.getElementById("banner"));
        map.setCenter(new GLatLng(48.129857,11.368144), 14);
		var point = new GLatLng(48.129857,11.368144);
		map.addOverlay(new GMarker(point));
      }
    }

    </script>
<?php
}
?>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-23025246-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


<div class="hidden">
<a href="http://www.lindauer24.de">lindauer24.de versicherungen germering</a>
<a href="http://www.punini.de">punini.de design + code</a>

<!-- Start of StatCounter Code -->
<script type="text/javascript">
var sc_project=7379735;
var sc_invisible=0;
var sc_security="d4fd24ff";
</script>
<script type="text/javascript"
src="http://www.statcounter.com/counter/counter.js"></script>
<noscript><div class="statcounter"><a title="drupal stats"
href="http://statcounter.com/drupal/" target="_blank"><img
class="statcounter"
src="http://c.statcounter.com/7379735/0/d4fd24ff/0/"
alt="drupal stats"></a></div></noscript>
<!-- End of StatCounter Code -->

</div>


</body>
</html>
