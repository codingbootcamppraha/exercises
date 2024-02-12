<?php

require_once 'AudioTrack.php';

$song = new AudioTrack(5123);

$song->name = 'Imagine';

$song->save();


// endpoint that should return audio track information:

header('Content-Type: application/json');

echo $song->toJSON();

function foo()
{

}


$song->setAuthor(763732);

$beatles = new Band(763732);
$song->setAuthor($beatles);


$song->setAuthor('Beatles');
