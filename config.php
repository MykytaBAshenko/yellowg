<?php
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("490464219649-ilb1v9ehblguhlhc7l9is78v7cstg0gi.apps.googleusercontent.com");
	$gClient->setClientSecret("gIjy_pnhcHcIeEAwf7PDAH41");
	$gClient->setApplicationName("CPI Login Tutorial");
	$gClient->setRedirectUri("http://qwertyuiop.hostenko.net/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
