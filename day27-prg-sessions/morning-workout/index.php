<?php

require_once 'Computer.php';

// 3.
$my_computer = new Computer;

// 4.
$my_computer->model = 'Lenovo ThinkBook';
$my_computer->operating_system = 'Windows 11';
$my_computer->is_portable = true;
$my_computer->status = 'on';

$my_computer->switchOff();

$my_computer->toggleSwitch();
$my_computer->toggleSwitch();
$my_computer->toggleSwitch();
$my_computer->toggleSwitch();
$my_computer->toggleSwitch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morning workout</title>
</head>
<body>

    <!-- 5. -->
    <h1>My computer</h1>
    <table>
        <tr><th>Model:</th><td><?= $my_computer->model ?></td></tr>
        <tr><th>OS:</th><td><?= $my_computer->operating_system ?></td></tr>
        <tr>
            <th>Portable:</th>
            <td>
                <?= $my_computer->is_portable ? 'yes' : 'no' ?>
            </td>
        </tr>
        <tr><th>Status:</th><td>switched <?= $my_computer->status ?></td></tr>
    </table>

</body>
</html>