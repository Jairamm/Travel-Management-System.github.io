<?php
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;
// Your Account SID and Auth Token from console.twilio.com
$sid = "AC86e2084b86d7ec432b75d7e5a2dfc6f7";
$token = "4eb0db443f3761b6da41a66f5d8040c6";
$client = new Client($sid, $token);
$message = $client->messages->create(
    // The number you'd like to send the message to
    '+917275359879',
    [
        'from' => '+19199482513',
        'body' => "Hey HariOm! Good luck on the bar exam!"
    ]
);
if ($message) {
    echo "Message Sent now";
} else {
    echo "Something went wrong";
}
?>