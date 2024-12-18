<?php
require('output.php');

$result = json_decode($result[count($result)-1], true);

// DEBUG
//file_put_contents('output.txt', $result["text"]);
//echo $result["text"];