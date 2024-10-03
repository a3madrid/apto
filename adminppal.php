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

   </head>

<?

include ("../includes/config.php");
include ("../includes/functions.php");

if (!isset($_SESSION[adminname]))
{

echo '<body>
<script LANGUAGE="JavaScript">

var pagina="adminlogin.php"
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 100);

</script></body>';


}else{


?> 
<body background="../background.gif" bgcolor="#000000">
<table width="90%" align="center">
<tr>
<td colspan="7" height="20" align="center" valign="middle" bgcolor="<? echo "$formtop"; ?>"><b><font color ="<? echo "$formtopname"; ?>">Menu Administracion</font></b></td></tr>
<tr>
<td colspan="7" height="20" bgcolor="#000000"></td></tr>
<tr>
<td width="25%" align="center" valign="middle" bgcolor="<? echo "$formleft"; ?>"><font color ="<? echo "$formleftname"; ?>"><a href="addreserva.php">Añadir Reserva</a></font></td>
<td width="25%" align="center" valign="middle" bgcolor="<? echo "$formleft"; ?>"><font color ="<? echo "$formleftname"; ?>">Calendario <a href="../calendario.php?apt=1D">1D</a> <a href="../calendario.php?apt=2D">2D</a></font></td>
<td width="25%" align="center" valign="middle" bgcolor="<? echo "$formleft"; ?>"><font color ="<? echo "$formleftname"; ?>">Opcion3</font></td>
<td width="25%" align="center" valign="middle" bgcolor="<? echo "$formleft"; ?>"><font color ="<? echo "$formleftname"; ?>">Opcion4</font></td></tr>
<tr>
<td width="25%" align="center" valign="middle" bgcolor="<? echo "$formleft"; ?>"><font color ="<? echo "$formleftname"; ?>">Listar Reservas<a href="listarreservas.php?apt=1D">1D</a> <a href="listarreservas.php?apt=2D">2D</a></font></td>
<td width="25%" align="center" valign="middle" bgcolor="<? echo "$formleft"; ?>"><font color ="<? echo "$formleftname"; ?>">Opcion6</font></td>
<td width="25%" align="center" valign="middle" bgcolor="<? echo "$formleft"; ?>"><font color ="<? echo "$formleftname"; ?>">Opcion7</font></td>
<td width="25%" align="center" valign="middle" bgcolor="<? echo "$formleft"; ?>"><font color ="<? echo "$formleftname"; ?>"><a href="adminlogout.php">Logout</a></font></td></tr>

</body>

<?
}
?>
<noframes><iframe><noscript><xmp><pre>

<NOEMBED>