<title>WebManage : Arr�t</title>
<?php
echo "WebManage est en cours de fermeture...<br>";
$result = shell_exec("%cd%/exe/pskill.exe /accepteula -t mysqld.exe");

$result = str_replace("Unable to kill process mysqld.exe:","Le gestionnaire de mot de passe est d�j� ferm� : ERREUR",$result);
$result = str_replace("Process does not exist."," ",$result);
echo $result;

shell_exec("%cd%/exe/pskill.exe /accepteula -t mongoose.exe");


?>