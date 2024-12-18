<?php
require('result.php');
require('dictionary.php');

$words = explode(' ', $result["text"]);
$trigger = false;

foreach($words as $word) {
    foreach($dictionary as $dictionary_word) {
        switch ($word) {
            case $dictionary_word:
                $trigger = true;
                break;
        }
    }
}

if($trigger) {
    echo 'Обнаружено слово триггер, выполняем действие!';
    // какая нибудь логика
}