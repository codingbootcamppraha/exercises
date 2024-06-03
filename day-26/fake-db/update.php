<?php

require_once 'DBBlackbox.php';
require_once 'AudioTrack.php';

$track = find(1, 'AudioTrack');

$track->title = 'NEW TITLE';
$track->author = 'NEW AUTHOR';

update(1, $track);

var_dump($track);

?>