<?php

require_once 'DBBlackbox.php';
require_once 'AudioTrack.php';

$track_id = 1;

delete($track_id);

echo 'Track with id ' . $track_id . ' was deleted!';
?>