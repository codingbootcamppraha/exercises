<?php

require_once 'DBBlackbox.php';
require_once 'AudioTrack.php';

$tracks = select(null, null, 'AudioTrack');
// $tracks = select(5, 8, 'AudioTrack');

var_dump($tracks);
?>

<?php foreach ($tracks as $track) : ?>
    <p><?= $track->title ?? 'No title' ?></p>
<?php endforeach ?>