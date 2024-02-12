<?php

require_once 'DBBlackbox.php';
require_once 'AudioTrack.php';



$action = $_POST['action'] ?? null;

switch ($action)
{
    case 'insert':
        // insert()
        break;

    case 'update':
        // update();
        break;

    case 'delete':
        // delete();
        break;
}