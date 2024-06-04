<?php 
require_once 'bootstrap.php';
require_once 'Order.php';

$session = Session::instance();

var_dump($session);

// redirect if id is not supplied
$order = find($_GET['id'], 'Order');

// $message = $_SESSION['message'] ?? null;
$message = session()->get('message');
unset($_SESSION['message']);

$errors = $_SESSION['validation_errors'] ?? [];
unset($_SESSION['validation_errors']);



?>

<?php if ($message) : ?>
    <p><?= $message ?></p>
<?php endif ?>

<?php if (!empty($errors)) : ?>
    <?php foreach ($errors as $error) : ?>
        <p><?= $error ?></p>
    <?php endforeach ?>
<?php endif ?>

<form action="update.php?id=<?= $order->id ?>" method="post">
    <h2>CUSTOMER INFORMATION</h2>
    Name: <br>
    <input type="text" name="name" value="<?= $order->name ?>">
    <br>Phone: <br>
    <input type="text" name="phone_number" value="<?= $order->phone_number ?>">
    <br>Address: <br>
    <input type="text" name="address" value="<?= $order->address ?>">
    <br>Email: <br>
    <input type="text" name="email" value="<?= $order->email ?>">

    <h2>ORDER INFORMATION</h2>
    <br>Description: <br>
    <input type="text" name="description" value="<?= $order->description ?>">
    <br>Quantity: <br>
    <input type="number" name="quantity" value="<?= $order->quantity ?>">
    <br>Order notes:<br>
    <input type="text" name="order_notes" value="<?= $order->order_notes ?>">

    <br><button type="submit">Submit order</button>
</form>