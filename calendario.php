<html>
   <head>
<style type="text/css">
div#AD, div#ADHEAD, div#ADIMG, div#fdiv1146, div#adcreative, .adstyle1 {
visibility:hidden;
display:none;
position:absolute;
font-size:1px;
text-align:left;
height:1px;
width:1px;
top:0px;
left:0px;
}
.noads {
position:absolute;
width:100%;
top:0px;
left:0px;
background: /*Aquí colocar el color Y/O imagen de fondo de su página, si no usa colocar #FFFFFF */;
}
</style>

<script language="javascript">
window.onload = new Function(null)
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>


   </head>
<?
include ("includes/config.php");
require ("includes/functions.php");

$anno = stripslashes($_GET["anno"]);
$anno = strip_tags($anno);
$anno = trim ($anno);

if ($anno == '')
{
$annoactual = date('Y');
}else{
$annoactual = $anno;
}

$mesactual = date ("n");
$diaactual = date ("j");

//limpiar datos
$apt = stripslashes($_GET["apt"]);
$apt = strip_tags($apt);
$apt = trim ($apt);

if ($apt == '1D')
{
$tipoapt = '1 Dormitorio - 50m2 - 2pax';
$pax = '2';

$noche = $noche1d ;
$finde = $finde1d;
$semana = $semana1d ;
$quince = $quince1d ;
$mes = $mes1d;

$scnoche = $scnoche1d ;
$scfinde = $scfinde1d;
$scsemana = $scsemana1d ;
$scquince = $scquince1d ;
$scmes = $scmes1d;

$grnoche = $grnoche1d ;
$grfinde = $grfinde1d;
$grsemana = $grsemana1d ;
$grquince = $grquince1d ;
$grmes = $grmes1d;

$gpsnoche = $gpsnoche1d ;
$gpsfinde = $gpsfinde1d;
$gpssemana = $gpssemana1d ;
$gpsquince = $gpsquince1d ;
$gpsmes = $gpsmes1d;

}elseif ($apt == '2D')
{
$tipoapt = '2 Dormitorios-84m2-max 3 pax';
$pax = '3';

$noche = $noche2d ;
$finde = $finde2d;
$semana = $semana2d ;
$quince = $quince2d ;
$mes = $mes2d;

$scnoche = $scnoche2d ;
$scfinde = $scfinde2d;
$scsemana = $scsemana2d ;
$scquince = $scquince2d ;
$scmes = $scmes2d;

$grnoche = $grnoche2d ;
$grfinde = $grfinde2d;
$grsemana = $grsemana2d ;
$grquince = $grquince2d ;
$grmes = $grmes2d;

$gpsnoche = $gpsnoche2d ;
$gpsfinde = $gpsfinde2d;
$gpssemana = $gpssemana2d ;
$gpsquince = $gpsquince2d ;
$gpsmes = $gpsmes2d;
}else{
$apt = '1D';
$tipoapt = '1 Dormitorio';
$pax = '2';

$noche = $noche1d ;
$finde = $finde1d;
$semana = $semana1d ;
$quince = $quince1d ;
$mes = $mes1d;

$scnoche = $scnoche1d ;
$scfinde = $scfinde1d;
$scsemana = $scsemana1d ;
$scquince = $scquince1d ;
$scmes = $scmes1d;

$grnoche = $grnoche1d ;
$grfinde = $grfinde1d;
$grsemana = $grsemana1d ;
$grquince = $grquince1d ;
$grmes = $grmes1d;

$gpsnoche = $gpsnoche1d ;
$gpsfinde = $gpsfinde1d;
$gpssemana = $gpssemana1d ;
$gpsquince = $gpsquince1d ;
$gpsmes = $gpsmes1d;
}

?>

<body background="background.gif" bgcolor="#000000">
<table width="70" height="570" align="left">
<br><br><br><br><br><br><br>
<img src="prohibido animales.jpg" width="74" align="center" height="74">
</table></br>

<table border="1" align="center" bgcolor="#E7D79C" width="80%">
<tr height="10">
<td colspan="29" align ="center" valign="top" bgcolor="<? echo "$calendartop"; ?>"><b><font color="<? echo "$calendartopname" ;?> ">Disponibilidad año <? echo ''.$annoactual.'&nbsp &nbsp &nbsp ( '.$tipoapt. ')'; ?>&nbsp &nbsp Fechas en <FONT COLOR="#CC0033" ><B>rojo</B></FONT> = Ocupado)</font></b></td><td colspan="3" align ="center" valign="top"><form name="saltoanno">
    <select name="saltoanno" onChange="MM_jumpMenu('parent',this,0)">
      <option value="calendario.php?apt=<? echo "$apt"; ?>&anno=2008" <? if ($annoactual == '2008') {echo "selected";} ?>>2008</option>
      <option value="calendario.php?apt=<? echo "$apt"; ?>&anno=2009" <? if ($annoactual == '2009') {echo "selected";} ?>>2009</option>
    </select>
  </form></td></tr>
<?
$mesprocc = 1;
$annopres = date("Y");

while($mesprocc <= 12)
{
$messig = $mesprocc + 1 ;
$numdias = strftime("%d", mktime(0, 0, 0, $messig, 0, $annoactual));
$diaproc = 1 ;
?>
<tr height="20">
<?
//DIAS YA SOBREPASADOS
if (($mesprocc < $mesactual) && ($annoactual <= $annopres))
{
echo '<td align="center" bgcolor="'.$calendarmes.'"><b><font color="'.$calendarmesname.'">';
nombremes($mesprocc);
echo '</font></b></td>';

while ($diaproc <= $numdias)
{
echo '<td width="20" align="center" bgcolor="'.$calendardiares.'"><font color="'.$calendardiaresname.'">'.$diaproc.'</font></td>';
$diaproc ++;
}//while



//MES ACTUAL
}elseif (($mesprocc == $mesactual) && ($annoactual <= $annopres))
{
echo '<td align="center" bgcolor="'.$calendarmes.'"><b><font color="'.$calendarmesname.'">';
nombremes($mesprocc);
echo '</font></b></td>';

while ($diaproc < $diaactual)
{
echo '<td width="20" align="center" bgcolor="'.$calendardiares.'"><font color="'.$calendardiaresname.'">'.$diaproc.'</font></td>';
$diaproc ++;
}//while
if (strlen($mesprocc) == '1')
{
$mesdate = '0'.$mesprocc ;
}else{
$mesdate = $mesprocc ;
}

$fechaen = ''.$annoactual.'-'.$mesdate.'-'.$diaproc.'';
$fechasa = ''.$annoactual.'-'.$mesdate.'-'.$numdias.'';

//listarreservados

$verdiasresev = mysql_query("SELECT fechaen,fechasa FROM reservas WHERE ((fechaen >= '$fechaen' and fechaen <= '$fechasa') or (fechasa >= '$fechaen' and fechasa <= '$fechasa') or (fechaen <= '$fechaen' and fechasa >= '$fechasa')) and reserved = 'si' and apartamento = '$apt'");
while ($verdiasresev_ok = mysql_fetch_array($verdiasresev))
{

$mesen = substr($verdiasresev_ok[fechaen], 5, 2);
$diaen = substr($verdiasresev_ok[fechaen], -2, 2);

$messa = substr($verdiasresev_ok[fechasa], 5, 2);
$diasa = substr($verdiasresev_ok[fechasa], -2, 2);

if ($mesen == $mesdate)
{
if ($messa == $mesdate)
{
//msimo mes
while ($diaen <= $diasa)
{
$diasres[] = $diaen ;
$diaen++;
}//while
}else{

// para mes siguiente
while ($diaen <= $numdias)
{
$diasres[] = $diaen ;
$diaen++;
}//while
}
}elseif ($messa == $mesdate){

//mes anterior
$diaen = '01';
while ($diaen <= $diasa)
{
$diasres[] = $diaen ;
$diaen++;
}//while
}else{

//entremes
$diaen = '01';
while ($diaen <= $numdias)
{
$diasres[] = $diaen ;
$diaen++;
}//while
}
}//while


//listarpendientes
$verdiaspend = mysql_query("SELECT fechaen,fechasa FROM reservas WHERE ((fechaen >= '$fechaen' and fechaen <= '$fechasa') or (fechasa >= '$fechaen' and fechasa <= '$fechasa') or (fechaen <= '$fechaen' and fechasa >= '$fechasa')) and reserved = 'pendiente' and apartamento = '$apt'");
while ($verdiaspend_ok = mysql_fetch_array($verdiaspend))
{

$mesen = substr($verdiaspend_ok[fechaen], 5, 2);
$diaen = substr($verdiaspend_ok[fechaen], -2, 2);

$messa = substr($verdiaspend_ok[fechasa], 5, 2);
$diasa = substr($verdiaspend_ok[fechasa], -2, 2);

if ($mesen == $mesdate)
{
if ($messa == $mesdate)
{
//msimo mes
while ($diaen <= $diasa)
{
$diaspen[] = $diaen ;
$diaen++;
}//while
}else{

// para mes siguiente
while ($diaen <= $numdias)
{
$diaspen[] = $diaen ;
$diaen++;
}//while
}
}elseif ($messa == $mesdate){

//mes anterior
$diaen = '01';
while ($diaen <= $diasa)
{
$diaspen[] = $diaen ;
$diaen++;
}//while
}else{

//entremes
$diaen = '01';
while ($diaen <= $numdias)
{
$diaspen[] = $diaen ;
$diaen++;
}//while
}
}//while


//mostrar calendario
while ($diaproc <= $numdias)
{

$fecha = ''.$annoactual.'-'.$mesdate.'-'.$diaproc.'';

if (in_array("$diaproc", $diasres))
{
echo '<td width="20" align="center" bgcolor="'.$calendardiares.'"><font color="'.$calendardiaresname.'">'.$diaproc.'</font></td>';

}elseif(in_array("$diaproc", $diaspen))
{
echo '<td width="20" align="center" bgcolor="'.$calendardiapend.'"><font color="'.$calendardiapendname.'"><a href="reservas.shtml">'.$diaproc.'</a></font></td>';

}else{
echo '<td width="20" align="center" bgcolor="'.$calendardia.'"><font color="'.$calendardianame.'"><a href="reservas.shtml">'.$diaproc.'</a></font></td>';
}
$diaproc ++;
}//while



//MESES VENIDEROS
}else{
echo '<td align="center" bgcolor="'.$calendarmes.'"><b><font color="'.$calendarmesname.'">';
nombremes($mesprocc);
echo '</font></b></td>';

$diasres = '';
$diaspen = '';



if (strlen($mesprocc) == '1')
{
$mesdate = '0'.$mesprocc ;
}else{
$mesdate = $mesprocc ;
}

$fechaen = ''.$annoactual.'-'.$mesdate.'-01';
$fechasa = ''.$annoactual.'-'.$mesdate.'-'.$numdias.'';

//listarreservados


$verdiasresev = mysql_query("SELECT fechaen,fechasa FROM reservas WHERE ((fechaen >= '$fechaen' and fechaen <= '$fechasa') || (fechasa >= '$fechaen' and fechasa <= '$fechasa') || (fechaen <= '$fechaen' and fechasa >= '$fechasa')) && (reserved = 'si') && (apartamento = '$apt')");
/*$verdiasresev = mysql_query("SELECT fechaen,fechasa FROM reservas WHERE ((fechaen >= '$fechaen' and fechaen <= '$fechasa') or (fechasa >= '$fechaen' and fechasa <= '$fechasa')) and (reserved = 'si'");*/
while ($verdiasresev_ok = mysql_fetch_array($verdiasresev))
{
$mesen = substr($verdiasresev_ok[fechaen], 5, 2);
$diaen = substr($verdiasresev_ok[fechaen], -2, 2);

$messa = substr($verdiasresev_ok[fechasa], 5, 2);
$diasa = substr($verdiasresev_ok[fechasa], -2, 2);

if ($mesen == $mesdate)
{
if ($messa == $mesdate)
{
//msimo mes
while ($diaen <= $diasa)
{
$diasres[] = $diaen ;
$diaen++;
}//while
}else{

// para mes siguiente
while ($diaen <= $numdias)
{
$diasres[] = $diaen ;
$diaen++;
}//while
}
}elseif ($messa == $mesdate){

//mes anterior
$diaen = '01';
while ($diaen <= $diasa)
{
$diasres[] = $diaen ;
$diaen++;
}//while
}else{

//entremes
$diaen = '01';
while ($diaen <= $numdias)
{
$diasres[] = $diaen ;
$diaen++;
}//while
}
}//while



//listarpendientes
$verdiaspend = mysql_query("SELECT fechaen,fechasa FROM reservas WHERE ((fechaen >= '$fechaen' and fechaen <= '$fechasa') or (fechasa >= '$fechaen' and fechasa <= '$fechasa') or (fechaen <= '$fechaen' and fechasa >= '$fechasa')) and reserved = 'pendiente' and apartamento = '$apt'");
while ($verdiaspend_ok = mysql_fetch_array($verdiaspend))
{

$mesen = substr($verdiaspend_ok[fechaen], 5, 2);
$diaen = substr($verdiaspend_ok[fechaen], -2, 2);

$messa = substr($verdiaspend_ok[fechasa], 5, 2);
$diasa = substr($verdiaspend_ok[fechasa], -2, 2);

if ($mesen == $mesdate)
{
if ($messa == $mesdate)
{
//msimo mes
while ($diaen <= $diasa)
{
$diaspen[] = $diaen ;
$diaen++;
}//while
}else{

// para mes siguiente
while ($diaen <= $numdias)
{
$diaspen[] = $diaen ;
$diaen++;
}//while
}
}elseif ($messa == $mesdate){

//mes anterior
$diaen = '01';
while ($diaen <= $diasa)
{
$diaspen[] = $diaen ;
$diaen++;
}//while
}else{

//entremes
$diaen = '01';
while ($diaen <= $numdias)
{
$diaspen[] = $diaen ;
$diaen++;
}//while
}
}//while


//mostrar calendario
while ($diaproc <= $numdias)
{

$fecha = ''.$annoactual.'-'.$mesdate.'-'.$diaproc.'';
if (in_array("$diaproc", $diasres))
{
echo '<td width="20" align="center" bgcolor="'.$calendardiares.'"><font color="'.$calendardiaresname.'">'.$diaproc.'</font></td>';

}elseif(in_array("$diaproc", $diaspen))
{
echo '<td width="20" align="center" bgcolor="'.$calendardiapend.'"><font color="'.$calendardiapendname.'"><a href="reservas.shtml">'.$diaproc.'</a></font></td>';

}else{
echo '<td width="20" align="center" bgcolor="'.$calendardia.'"><font color="'.$calendardianame.'"><a href="reservas.shtml">'.$diaproc.'</a></font></td>';
}

$diaproc ++;
}//while
}
$mesprocc ++ ;
?>
</tr>
<?
}//while
?>
</table>
<br>
<table border="1" align="center" bgcolor="#E7D79C">
<tr>
	<td colspan="12" align="center">Precios año 2008</td>
<tr>
    
        
	<table border="1" align="center" bgcolor="#E7D79C">
<tr>
    <align="center"><td><!-- R:1 C:1 --></td>
    <align="center"><td><!-- R:1 C:1 --></td>
    <align="center"><td><!-- R:1 C:1 --><P ALIGN="CENTER">euros</P></td>
	
</tr>
<tr>
	<align="center"><td><!-- R:2 C:1 -->Estancia</td>
	<align="center"><td><!-- R:2 C:2 --><P ALIGN="CENTER"><FONT COLOR="#E7D79C" >------</FONT>Dia<FONT COLOR="#E7D79C" >------</FONT></P></td>
	<align="center"><td><!-- R:2 C:3 --><P ALIGN="CENTER">Fin de semana</td>
	<align="center"><td><!-- R:2 C:4 --><P ALIGN="CENTER"><FONT COLOR="#E7D79C" >---</FONT>Semanal<FONT COLOR="#E7D79C" >---</FONT></td>
	<align="center"><td><!-- R:2 C:5 --><P ALIGN="CENTER"><FONT COLOR="#E7D79C" >--</FONT>Quincenal<FONT COLOR="#E7D79C" >--</FONT></td>
    <align="center"><td><!-- R:2 C:6 --><P ALIGN="CENTER"><FONT COLOR="#E7D79C" >---</FONT>Mensual<FONT COLOR="#E7D79C" >---</FONT></td>
		
			
</tr>
<tr>
	<align="center"><td><!-- R:3 C:1 -->Tipo <? echo "2 dormitorios-"; ?>precio 2pax<FONT COLOR="#E7D79C" ></td>
	<align="center"><td><!-- R:3 C:2 --><P ALIGN="CENTER"><? echo "$noche"; ?></P></td>
	<align="center"><td><!-- R:3 C:3 --><P ALIGN="CENTER"><? echo "$finde"; ?></P></td>
	<align="center"><td><!-- R:3 C:4 --><P ALIGN="CENTER"><? echo "$semana"; ?></P></td>
	<align="center"><td><!-- R:3 C:5 --><P ALIGN="CENTER"><? echo "$quince"; ?></P></td>
    <align="center"><td><!-- R:3 C:6 --><P ALIGN="CENTER"><? echo "$mes"; ?></P></td>
		
</tr>
<tr>
	
	<align="center"><td><!-- R:5 C:1 -->Sofa cama para 2pax extra</td>
	<align="center"><td><!-- R:3 C:2 --><P ALIGN="CENTER"><? echo "$scnoche"; ?></P></td>
	<align="center"><td><!-- R:3 C:3 --><P ALIGN="CENTER"><? echo "$scfinde"; ?></P></td>
	<align="center"><td><!-- R:3 C:4 --><P ALIGN="CENTER"><? echo "$scsemana"; ?></P></td>
	<align="center"><td><!-- R:3 C:5 --><P ALIGN="CENTER"><? echo "$scquince"; ?></P></td>
    <align="center"><td><!-- R:3 C:6 --><P ALIGN="CENTER"><? echo "$scmes"; ?></P></td>
		
</tr>
<tr>
	<align="center"><td><!-- R:6 C:1 -->Garaje 1 coche</td>
	<align="center"><td><!-- R:3 C:2 --><P ALIGN="CENTER"><? echo "$grnoche"; ?></P></td>
	<align="center"><td><!-- R:3 C:3 --><P ALIGN="CENTER"><? echo "$grfinde"; ?></P></td>
	<align="center"><td><!-- R:3 C:4 --><P ALIGN="CENTER"><? echo "$grsemana"; ?></P></td>
	<align="center"><td><!-- R:3 C:5 --><P ALIGN="CENTER"><? echo "$grquince"; ?></P></td>
    <align="center"><td><!-- R:3 C:6 --><P ALIGN="CENTER"><? echo "$grmes"; ?></P></td>
	
</tr>
<tr>
<align="center"><td><!-- R:7 C:1 -->GPS (para coche o bolsillo)</td>
	<align="center"><td><!-- R:3 C:2 --><P ALIGN="CENTER"><? echo "$gpsnoche"; ?></P></td>
	<align="center"><td><!-- R:3 C:3 --><P ALIGN="CENTER"><? echo "$gpsfinde"; ?></P></td>
	<align="center"><td><!-- R:3 C:4 --><P ALIGN="CENTER"><? echo "$gpssemana"; ?></P></td>
	<align="center"><td><!-- R:3 C:5 --><P ALIGN="CENTER"><? echo "$gpsquince"; ?></P></td>
    <align="center"><td><!-- R:3 C:6 --><P ALIGN="CENTER"><? echo "$gpsmes"; ?></P></td>
	
</tr>
<tr>
</table>
<P ALIGN="CENTER"><img src="arrow.gif" width="67" height="39" border="0" alt="arrow.gif - 1412 Bytes"><FONT SIZE="+3" ><B><FONT COLOR="#FF9933" ><FONT SIZE="1" COLOR="BLACK">..........</FONT><a href="index.html"><B><I><FONT COLOR="#E7D79C" >atrás</FONT></I></B></a></FONT></B></FONT>
</body>
<noframes><iframe><noscript><xmp><pre>

<NOEMBED>

