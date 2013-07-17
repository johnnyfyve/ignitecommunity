<?php
// *** Form processing code

// *** First get variables
$requestName = $_POST["name"];
$requestEmail = $_POST["email"];  
$requestMessage = $_POST["message"];

// *** Then assemble email
$emailMessage = "Dear IgniteCommunity.net Site Admin:\n\nThe following message was sent through the IgniteCommunity.net contact form:\n\nFrom:  ".$requestName."\nEmail: ".$requestEmail."\nMessage:\n\n".wordwrap($requestMessage, 70, "\r\n")."\n\nIgniteCommunity.net";

$headers = 'From: info@ignitecommunity.net' . "\r\n" .
    'Reply-To: info@ignitecommunity.net' . "\r\n" .
    'CC:johnnyfyve@gmai.com';

// *** Send email to recipients
mail('rachelle1130@yahoo.com', 'IngiteCommunity.net site contact request', $emailMessage, $headers);

// *** Create repsonse message for form page
//echo('Thank you - your request has been sent.'.$requestName.', '.$requestEmail.', '.$requestMessage);
echo('Thank you - your request has been sent.');

?>