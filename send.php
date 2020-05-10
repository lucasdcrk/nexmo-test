<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/vendor/autoload.php';

use Nexmo\Client;
use Nexmo\Client\Credentials\Basic;

$basic  = new Basic($_GET['api_key'], $_GET['api_secret']);
$client = new Client($basic);

$message = $client->message()->send([
    'to' => $_GET['to'],
    'from' => $_GET['from'],
    'text' => $_GET['message']
]);

var_dump($message);

?>

<hr>
<h3>Message sent!</h3>
<a href="index.php">Go back</a>
