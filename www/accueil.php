<html>

<head>

<title>Webmanage : Accueil</title>

<link rel='stylesheet' type='text/css' href='css/style.css' />
</head>

<body>
<?php
include('func/func.php');

$computername = script("getcomputername");
$windowsver = script("windows");
$windowsver = dosencode($windowsver);

// INTERFACE
echo '<form name="accform" action="confirm_computername.php" onsubmit="return validateForm()" method="post">';

// INFORMATIONS GENERALES

title('<table align=center><td><INPUT type="text" value="'.$computername.'" name="computername">');
menu_img("shutdown","shutdown","Arr�ter WebManage");
echo '</td></table>';
text($windowsver);
// CONFIGURATION	  
	  
title('Configuration');

echo'<table align=center>';
	menu("reseau","network","Configuration R�seau");
	menu_popup("chat","messagerie","Messagerie");
	menu("lan","scan_net","Voisinage r�seau");
echo'</table>';

title('Administration');
echo'<table align=center>';
	menu("admin","admin","Utilisateurs");
echo'</table>';

submit();

echo '</form>';


?>

</body>
</html>

<SCRIPT LANGUAGE="Javascript" SRC="js/accueil.js"> </SCRIPT>
