<?php
$ip_admin = $_SERVER['REMOTE_ADDR'];
$WshShell = new COM("WScript.Shell");
$ip_admin = 'cmd /C notifu.exe /t warn /p "Alerte S�curit�" /m "Connexion depuis l\'adresse IP: ' . $ip_admin. '"';
exec($ip_admin);
$WshShell->Run($ip_admin, 0, false);


echo '<meta http-equiv="refresh" content="1; URL=accueil.php">';
?>

