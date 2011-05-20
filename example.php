<html>
<head>
<title>Geometrie-Klasse Beispiel</title>
<meta charset="UTF-8" />
<style>
body {
	font-family: Arial;
}
th{
	text-align: left;
	width:  150px;
}
td{
	text-align: right;
	width: 150px;
}
h2{
	border-bottom: 1px solid #ddd;
	border-top: 1px solid #ddd;
	padding:  5px 0;
	margin-top: 30px;

}
</style>
</head>
<body>
<h1>Beispiel Geometrie-Klassen</h1>
<p>Siehe den PHP-Quellcode dieser Seite an, um zu verstehen, was hier demonstriert wird.</p>
<?php

//Das ist der Kreiss Nummer eins
$Kreis = new Kreis;
$Kreis->setUmfang(100);
print '<h2>Kreis</h2>';
print '<table>';
print '<tr><th>Radius</th><td>'.$Kreis->getRadius().'</td></tr>';
print '<tr><th>Fläche</th><td>'.$Kreis->getFlaeche().'</td></tr>';
print '<tr><th>Durchmesser</th><td>'.$Kreis->getDurchmesser().'</td></tr>';
print '<tr><th>Umfang</th><td>'.$Kreis->getUmfang().'</td></tr>';
print '</table>';

//Schoenes Wetter
//Quadrat
$Quadrat = new Quadrat;
$Quadrat->setSeitenlaenge(5);
print '<h2>Quadrat</h2>';
print '<table>';
print '<tr><th>Diagonale</th><td>'.$Quadrat->getDiagonale().'</td></tr>';
print '<tr><th>Fläche</th><td>'.$Quadrat->getFlaeche().'</td></tr>';
print '<tr><th>Umfang</th><td>'.$Quadrat->getUmfang().'</td></tr>';
print '<tr><th>Seitenlänge</th><td>'.$Quadrat->getSeitenlaenge().'</td></tr>';
print '</table>';


//Autoload-Klasse
function __autoload($class){
	include_once "classes/$class.php";
}

?>
</body>
</html>