<?php
require __DIR__ . '/Vendor/autoload.php';
use Twilio\Rest\Client;
$Sid= "ACaf5abb1df636b84f3a490cae9c33bc61";
$Token= "ce3d2eeb3c32d14625dd35ab7c62071a";
$Client= new Client($Sid, $Token);

$Client->messages->create("+2348114945263", ["from"=>"+12398935768", "body"=>"my first sms api"]);









?>
