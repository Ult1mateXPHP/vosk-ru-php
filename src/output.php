<?php
require_once('../vendor/autoload.php');

use WebSocket\Client;

$result = [];

$client = new Client("ws://localhost:2700/", array('timeout' => 2000));
$myfile = fopen("../input/audio.wav", "r");
while(!feof($myfile)) {
    $data = fread($myfile, 8000);
    $client->send($data, 'binary');
    $result[] = $client->receive() . "\n";
}
$client->send("{\"eof\" : 1}");
$result[] = $client->receive() . "\n";
fclose($myfile);
