<?php
	require_once "config.php";

	if (isset($_SESSION['access_token']))
		$gClient->setAccessToken($_SESSION['access_token']);
	else if (isset($_GET['code'])) {
		$token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
		$_SESSION['access_token'] = $token;
	} else {
		header('Location: login.php');
		exit();
	}

	$oAuth = new Google_Service_Oauth2($gClient);
	$userData = $oAuth->userinfo_v2_me->get();

	$_SESSION['id'] = $userData['id'];
	$_SESSION['email'] = $userData['email'];
	$_SESSION['gender'] = $userData['gender'];
	$_SESSION['picture'] = $userData['picture'];
	$_SESSION['familyName'] = $userData['familyName'];
	$_SESSION['givenName'] = $userData['givenName'];
		$subject =  'Обратная связь';
    $data = $userData['email'];
    // $to = 'salesygarage@gmail.com';
    $to = 'nikita.bashenko2001@gmail.com';
    $headers = "From: mypost@mail.domain\nReply-To: no-reply@mail.domain\r\n";
    $headers.= "Content-type: text/plain; charset=UTF-8\r\n";
    $headers.= "Content-transfer-encoding: quoted-printable";
		$message = "Письмо для того что бы получить каталог \n";
		$message .= 'Имя:' .$userData['givenName'] . "\n";
    $message .= 'Фамилия:' .$userData['familyName'] . "\n";
    $message .= 'email: ' . $data . "\n";
    mail($to, $subject, $message, $headers); 

	header('Location: index.php');
	exit();
?>