<?php
// Required if your environment does not handle autoloading
require __DIR__ . '/vendor/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = '';
$token = '';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '',
        // the body of the text message you'd like to send
        'body' => 'Welcome to the scheduling assistant. How can I help you(create, delete or change an appointment)?'
    )
);
