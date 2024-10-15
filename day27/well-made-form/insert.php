<?php
require_once 'bootstrap.php';
// require_once 'User.php';
require_once 'Order.php';

$session = Session::instance();

$order = new Order;
$order->name = $_POST['name'] ?? null;
$order->phone_number = $_POST['phone_number'] ?? null;
$order->address = $_POST['address'] ?? null;
$order->email = $_POST['email'] ?? null;

$order->description = $_POST['description'] ?? null;
$order->quantity = $_POST['quantity'] ?? null;
$order->order_notes = $_POST['order_notes'] ?? null;

$id = insert($order);

// flash message with session:
$_SESSION['message'] = 'New order created with id: ' . $id;

// redirection:
header('Location: /day-26/well-made-form/edit.php?id='.$id);
die();

echo 'New order created with id: ' . $id;
?>