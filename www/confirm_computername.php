<html>

<head>
<title>Webmanage : Confirmation</title>
<link rel='stylesheet' type='text/css' href='css/style.css' />

</head>

<?php
include('func/func.php');

$arg1 = $_POST['computername'];
$arg2 = $_POST['oldcompname'];

notify("info","Informations","L'administrateur r�seau requiert votre attention");

$modcn = script(computername);
$modcn = dosencode($modcn);

if ($modcn=="OK") {
title("Action accept�e");
$rep = exec('c:\windows\system32\cscript.exe ./vbs/changecn.vbs '.$arg1);
if ($rep==1) {
text("Le changement de nom a �chou�");
back();
}
if ($rep==0) {
text("Le changement de nom est un succ�s!");
menu("reboot","reboot","Rebooter");
back();
}
}
else
{
title("Action refus�e");
if ($modcn=="")
{
$modcn = "Aucune";
}
text("Raison invoqu� : ".$modcn);
back();
}
 

?>