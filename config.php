<?
//datos de conexion
$hostname = "localhost" ;
$user = "apartamento3";
$password = "5421572";
$databasename = "apartamento3_es_db";


//gestion de error desconocido
function mysql_die ($error="unknown")
{
echo "<H1> Error:".$error."</H1>";
exit;
}
//conexion base de datos
$db = mysql_connect ($hostname,$user,$password);
mysql_select_db ($databasename,$db);

session_start ();

//COLORES

//colores del calendario.php
$calendartop = "#E7D79C";
$calendartopname = "#000000";
$calendarmes = "#E7D79C";
$calendarmesname = "#000000";
$calendardia = "#E7D79C";
$calendardianame = "#000000";
$calendardiapend = "#FFE243";
$calendardiapendname = "#000000";
$calendardiares = "CA0500";
$calendardiaresname = "#000000";
$calendardialinkoff = "#000000";
$calendardialinkover = "#000000";
$calendardialinkvisited = "#000000";


//coloresformulario
$formtop = "#E7D79C";
$formtopname = "#000000";
$formleft = "#E7D79C";
$formleftname = "#000000";
$formright = "#E7D79C";
$formbottom = "#E7D79C";

//precios 2d
$noche2d = "98";
$finde2d = "?";
$semana2d = "?";
$quince2d = "?";
$mes2d = "?";

$scnoche2d = "n/d";
$scfinde2d = "n/d";
$scsemana2d = "n/d";
$scquince2d = "n/d";
$scmes2d = "n/d";

$grnoche2d = "7";
$grfinde2d = "?";
$grsemana2d = "?";
$grquince2d = "?";
$grmes2d = "?";

$gpsnoche2d = "15";
$gpsfinde2d = "?";
$gpssemana2d = "?";
$gpsquince2d = "?";
$gpsmes2d = "?";

//precios 1d
$noche1d = "?";
$finde1d = "?";
$semana1d = "?";
$quince1d = "?";
$mes1d = "?";

$scnoche1d = "n/d";
$scfinde1d = "n/d";
$scsemana1d = "n/d";
$scquince1d = "n/d";
$scmes1d = "n/d";

$grnoche1d = "?";
$grfinde1d = "?";
$grsemana1d = "?";
$grquince1d = "?";
$grmes1d = "?";

$gpsnoche1d = "?";
$gpsfinde1d = "?";
$gpssemana1d = "?";
$gpsquince1d = "?";
$gpsmes1d = "?";


//css para los enlaces del calendar
echo '<style type="text/css">
 A:link {
color: '.$calendardialinkoff.';
 	text-decoration: none;
}
A:visited { 
	color:'.$calendardialinkvisited.';
 	text-decoration: none;
}
A:hover {
	color:'.$calendardialinkover.';
	text-decoration: underline;
}
</style>';
?>