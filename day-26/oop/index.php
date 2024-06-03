<?php

require_once 'AudioTrack.php';


$audio_track = new AudioTrack('THIS IS TRACK TITLE');
$audio_track->author = 'John Doe';
$audio_track->setSpecialInformation('new values');

var_dump($audio_track);

?>