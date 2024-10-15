<?php
require_once 'Computer.php';

$my_computer = new Computer;
$my_computer->model = 'MacBook Pro ...';
$my_computer->operating_system = 'macOS';
$my_computer->is_portable = true;
$my_computer->status = 'on';

$my_computer->switchOff();

$my_computer->toggleSwitch();
$my_computer->toggleSwitch();
?>

<h1>My computer</h1>
<table>
    <tr><th>Model:</th><td><?= $my_computer->model ?></td></tr>
    <tr><th>OS:</th><td><?= $my_computer->operating_system ?></td></tr>
    <tr><th>Portable:</th><td><?= $my_computer->is_portable ? 'yes' : 'no' ?></td></tr>
    <tr><th>Status:</th><td>switched <?= $my_computer->status ?></td></tr>
</table>