<?php 

require_once 'DBBlackbox.php';
require_once 'AudioTrack.php';

$track = new AudioTrack();
$track->title = 'Title';

// irl would be replaced by connection to database
$id = insert($track);

echo 'A new record has been inserted with id ' . $id;
?>