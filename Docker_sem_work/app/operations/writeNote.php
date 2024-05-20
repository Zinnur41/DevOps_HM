<?php

$filePath = __DIR__ . '/../notes.txt';
$stream = fopen($filePath, 'a+');

$note = $_POST['note'];

date_default_timezone_set('Europe/Moscow');
$date = new DateTime('now');

if (isset($note) && $note !== '') {
    fwrite($stream, $date->format('H:i:s Y-m-d') . '<br>');
    fwrite($stream, $note . '<hr>');
}
header('Location: /');

