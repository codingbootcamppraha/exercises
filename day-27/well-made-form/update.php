<?php
require_once 'bootstrap.php';
require_once 'Order.php';

$session = session();

$session->flashRequest();

$order = find($_GET['id'], 'Order');

$validation_errors = [];

// all validations:
if (empty($_POST['name'])) {
    // flash message with session:
    // $_SESSION['validation_errors'] = 'Please enter your name';
    $validation_errors[] = 'Please enter your name';

    // // redirection:
    // header('Location: /day-26/well-made-form/edit.php?id='.$order->id);
    // die();
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $validation_errors[] = 'Please enter valid email address';
}

// redirect if there are any errors:
if (!empty($validation_errors)) {
    $_SESSION['validation_errors'] = $validation_errors;
    header('Location: /day-26/well-made-form/edit.php?id='.$order->id);
    die();
}

$order->name = $_POST['name'] ?? $order->name;
$order->phone_number = $_POST['phone_number'] ?? $order->phone_number;
$order->address = $_POST['address'] ?? $order->address;
$order->email = $_POST['email'] ?? $order->email;

$order->description = $_POST['description'] ?? null;
$order->quantity = $_POST['quantity'] ?? null;
$order->order_notes = $_POST['order_notes'] ?? null;

update($_GET['id'], $order);

// flash message with session:
// $_SESSION['message'] = 'Order with id #' . $order->id . ' has been updated';
session()->flash('message', 'Order with id #' . $order->id . ' has been updated');
// redirection:
header('Location: /day-26/well-made-form/edit.php?id='.$order->id);
die();

?>