<?php

require_once 'DBBlackbox.php';
require_once 'AudioTrack.php';


$track = new AudioTrack;

// insert the object into the database
// as a new record
$id = insert($track);

echo 'New audio track inserted with ID ' . $id;