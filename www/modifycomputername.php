<?php

$arg1 = $_POST['computername'];
$arg2 = $_POST['oldcompname'];

$WshShell = new COM("WScript.Shell");
$question = 'cmd /C notifu.exe /t info /p "Informations" /m "L\'administrateur r�seau requiert votre attention"';
exec($question);
$WshShell->Run($question, 0, false);

$modcn = exec('c:\windows\system32\cscript.exe ./vbs/computername.vbs');
$modcn = mb_convert_encoding($modcn, "auto", "IBM-850");
if ($modcn=="OK") {
echo "<h1>Action accept�e</h1>";
$rep = exec('c:\windows\system32\cscript.exe ./vbs/changecn.vbs '.$arg1);
if ($rep==1) {
echo "Le changement de nom a �chou�";
echo "<a href='accueil.php' ><h2> Retour </h2></a>";
}
if ($rep==0) {
echo "Le changement de nom est un succ�s!";
echo "<a href='reboot.php' ><h2> Rebooter </h2></a>";
echo "<a href='accueil.php' ><h2> Retour </h2></a>";
}
}
else
{
echo "<h1>Action refus�e</h1>";
echo "<p>Raison invoqu� : ".$modcn."</p>";
echo "<a href='accueil.php' ><h2> Retour </h2></a>";
}
 

?>