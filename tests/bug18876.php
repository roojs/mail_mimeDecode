<?php



$mime_message  =
"Subject: =?KOI8-R?B?8NLJ18XUIQ==?=
From: =?KOI8-R?B?4czFy9PBzsTSIPfPzMvP1w==?= <email@gmail.com>

Hello
";

require_once 'Mail/mimeDecode.php';


$decoder = new Mail_mimeDecode($mime_message);
$params = array(
    'include_bodies' => TRUE,
    'decode_bodies'  => TRUE,
    'decode_headers' => 'UTF8//IGNORE'
);
$decoded = $decoder->decode($params);

print_r($decoded);

?>
