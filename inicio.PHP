<?php
require "includes/conexion_db.php";
require "includes/fechafuncs.php";
require "includes/barracita.php";



$paginainicio = 'ok';
echo '<html>
<head>
<title>Gp WorldSeries 2.0</title>';

?>
<!--  <script language="JavaScript" type="text/JavaScript">parent.document.getElementsByTagName("frameset")[0].cols="*,";</script>-->
<script> 
if (window != parent) 
parent.location.href=location.href 
</script>
<? echo ' </head>

<body bgcolor="#000000" text="#FFFFFF" vlink="#FFFFFF" alink="#FFFFFF" leftmargin="0">
<link href="estilo.css" rel="stylesheet" type="text/css">
<p>
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="1010" height="204">
    <param name="movie" value="Templates/menu.swf">
    <param name="quality" value="high">
    <embed src="Templates/menu.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="1021" height="204"></embed></object>
</p>
<br>
<table width="95% border="0" align="center">
<tr>';
//zona izq
//vermsgpriv
$privmsg = mysql_query("SELECT * FROM mensajesprivados WHERE destino = '$_SESSION[usuario]' and leida = 'no'");
$privmsg_num = mysql_num_rows($privmsg);

//verofertasman
$negomanman = mysql_query ("SELECT * FROM negociacionmm WHERE destino = '$_SESSION[usuario]' and leida = 'no'");
$negomanman_num = mysql_num_rows ($negomanman);

$negomanpil = mysql_query ("SELECT * FROM negociacionmp WHERE destino = '$_SESSION[usuario]' and piloto != '$_SESSION[usuario]' and leida='no'");
$negomanpil_num = mysql_num_rows($negomanpil);

$negorenmp = mysql_query("SELECT * FROM negociacionrenp WHERE destino = '$_SESSION[usuario]' and piloto != '$_SESSION[usuario]' and leida = 'no'");
$negorenmp_num = mysql_num_rows($negorenmp);

$negoman_num = $negomanman_num + $negomanpil_num + $negorenmp_num ;

//verofertaspil
$negopilman = mysql_query ("SELECT * FROM negociacionmp WHERE destino = '$_SESSION[usuario]' and piloto = '$_SESSION[usuario]' and leida = 'no'");
$negopilman_num = mysql_num_rows($negopilman);

$negorenpm = mysql_query ("SELECT * FROM negociacionrenp WHERE destino = '$_SESSION[usuario]' and piloto = '$_SESSION[usuario]' and leida = 'no'");
$negorenpm_num = mysql_num_rows($negorenpm);

$negopil_num = $negopilman_num + $negorenpm_num;

echo '<td width="20%">
<table width="80%" height="52" align="left" border="1" bordercolor="#6666FF" bgcolor="222222"><tr bordercolor="222222">
<td width="33%" align="center"><a href="inicio.php?seccion=loginusers/viewmenprivados">';

if ($privmsg_num >= '5')
{
echo '<img src="imagenes/grl/newmsgani.gif" width="36" height="36" alt="5+ mensajes sin leer" border="0">';
}elseif(($privmsg_num >= '1') && ($privmsg_num <= '4'))
{
echo '<img src="imagenes/grl/newmsg.gif" width="36" height="36" alt="Nuevo Mensaje" border="0">';
}else{
echo '<img src="imagenes/grl/nonewmsg.gif" width="36" height="36" alt="Sin mensajes" border="0">';
}

//fin msgpriv
echo '</a></td>
<td width="33%" align="center"><a href="inicio.php?seccion=managers/negoresumenentrada">';
//negoman
if ($negoman_num >= '5')
{
echo '<img src="imagenes/grl/msgmanani.gif" width="36" height="36" alt="5+ ofertas sin leer (manager)" border="0">';
}elseif(($negoman_num >= '1') && ($negoman_num <= '4'))
{
echo '<img src="imagenes/grl/msgman.gif" width="36" height="36" alt="Nueva Ofertas (manager)" border="0">';
}else{
echo '<img src="imagenes/grl/nomsgman.gif" width="36" height="36" alt="Sin Ofertas (manager)" border="0">';
}
//finnegoman
echo '</a></td>
<td width="33%" align="center"><a href="inicio.php?seccion=pilotos/negoresumen">';
//negopil
if ($negopil_num >= '5')
{
echo '<img src="imagenes/grl/msgpilani.gif" width="36" height="36" alt="5+ ofertas sin leer (piloto)" border="0">';
}elseif(($negopil_num >= '1') && ($negopil_num <= '4'))
{
echo '<img src="imagenes/grl/msgpil.gif" width="36" height="36" alt="Nueva Oferta (piloto)" border="0">';
}else{
echo '<img src="imagenes/grl/nomsgpil.gif" width="36" height="36" alt="Sin Ofertas (piloto)" border="0">';
}
//finnegopil
echo '</td>
</tr></table>
</td>';
//fin zon izq
//----------------------------------------------------------------------------------------------------------------------------

//zona centr
barracita();
//fin zona centro
//---------------------------------------------------------------------------------------------------------------------------------------

//zona decha
echo '<td width="20%">
<table width="80%" height="52" align="right" border="1" bordercolor="#6666FF" bgcolor="222222"><tr bordercolor="222222">
<td width="33%" align="center"><a href="inicio.php?seccion=servicios/reglamento"><img src="imagenes/grl/reglamentomini.gif" width="26" height="36" alt="Reglamento" border="0"></a></td>
<td width="33%" align="center"><a href="inicio.php?seccion=servicios/viewinscritos"><img src="imagenes/grl/inscritosmini.gif" width="36" height="36" alt="Inscritos" border="0"></a></td>
<td width="33%" align="center"><a href="inicio.php?seccion=servicios/calendariooficial"><img src="imagenes/grl/calendariomini.gif" width="36" height="36" alt="Calendario Oficial" border="0"></a></td>
</tr></table>
</td>

</tr>
</table>
<br>
';
//nuevalinea
if ($_SESSION[nomequipo] != '')
{
echo '<table width="95%" border="0" align="center">
<tr><td>';
//menu saldo actual
if ($_SESSION[nomequipo] != '')
{
$versaldoactualman = mysql_query("SELECT money FROM managers WHERE nick = '$_SESSION[usuario]'");
$versaldoactualman_ok = mysql_fetch_array($versaldoactualman);

echo '<table width="25%" height="23" align="right" border="1" bordercolor="#6666FF" bgcolor="222222"><tr bordercolor="222222">
<td align="center"><table width="100%" border="0">
<tr>
<td align="left" valign="middle" class="raviereg" nowrap><img src="imagenes/grl/manmoneymini.gif" alt="Tu Saldo Actual Como Manager" width="15" height="12"></td>
<td align="left" class="raviereg" nowrap>Saldo Manager:</td>
<td align="right" class="raviecal" nowrap><font color="';
if ($versaldoactualman_ok[money] >= '0')
{
echo '#FFFFFF';
}else{
echo '#CC0000';
}			
			
echo '">'.$versaldoactualman_ok[money].'</font> G</td>
</tr>
</table></td>
</tr></table>';
}


echo '</td></tr></table><br>';
}
//zona media
echo '<br>';
$mantenimiento = 'si';

if (($mantenimiento == 'si') && (!isset($_SESSION[adminname])))
{
echo '<p align="center" class="courierpred"><b>Estamos realizando procesos de mantenimiento, en breve estara operativa. Saludos y perdon por las molestias</b></p>';
}else{
if (!isset($seccion))
{
$seccion= 'noticias';
}

if ($seccion)
{
$web="$seccion".".php";
include("$web");
}
echo '<p><div align = "center" class="raviereg"><font color="#FFFFFF">';
if (isset($_SESSION[adminname]))
{
echo '<a href=inicio.php?seccion=administradores/adminppal>Admin</a> |';
}
echo '<a href=inicio.php?seccion=loginusers/usuarios>Tu Cuenta</a> | <a href=inicio.php?seccion=managers/managerppal>Manager</a> | <a href=inicio.php?seccion=pilotos/pilotosppal>Piloto</a> | <a href=inicio.php?seccion=servicios/serviciosppal>Servicios</a> | <a href=inicio.php?seccion=resultados/resultadosppal>Resultados</a></font></div></p></body>
<p align="right" class="courierlastn">© Gp WorldSeries Team 2005 <!-- Begin Nedstat Basic code -->
<!-- Title: :::Gp WorldSeries::: -->
<!-- URL: http://membres.lycos.fr/gpworldseries/ -->
<script language="JavaScript" type="text/javascript" src="http://m1.nedstatbasic.net/basic.js">
</script>
<script language="JavaScript" type="text/javascript" >
<!--
  nedstatbasic("ADNJDQXdoKhTyQnJ5hQE8kOEcstg", 0);
// -->
</script>
<noscript>
<a target="_blank" href="http://www.nedstatbasic.net/stats?ADNJDQXdoKhTyQnJ5hQE8kOEcstg"><img
src="http://m1.nedstatbasic.net/n?id=ADNJDQXdoKhTyQnJ5hQE8kOEcstg"
border="0" width="18" height="18"
alt="Nedstat Basic - Web site estadísticas gratuito
El contador para sitios web particulares"></a><br>
<a target="_blank" href="http://www.nedstatbasic.net/">Contador gratuito</a>
</noscript>
<!-- End Nedstat Basic code -->


</p>
<div style="height:0px; visibility:hidden;"><textarea>
</html>';

}

?>
