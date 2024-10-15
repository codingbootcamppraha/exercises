<?php
    // #1
    // require_once 'Session.php';
    // $session = Session::instance();
    // var_dump($session);

    // #2
    // require_once 'helper.php';
    // $session = session();
    // var_dump($session);

    // #3
    require_once 'bootstrap.php';
    $session = session();
    var_dump($session);

    unset($_SESSION['test']);
    $_SESSION['start'] = date('H:i:s');
    var_dump($_SESSION);
?>

<form action="insert.php" method="post">
    <h2>CUSTOMER INFORMATION</h2>
    Name: <br>
    <input type="text" name="name">
    <br>Phone: <br>
    <input type="text" name="phone_number">
    <br>Address: <br>
    <input type="text" name="address">
    <br>Email: <br>
    <input type="text" name="email">

    <h2>ORDER INFORMATION</h2>
    <br>Description: <br>
    <input type="text" name="description">
    <br>Quantity: <br>
    <input type="number" name="quantity">
    <br>Order notes:<br>
    <input type="text" name="order_notes">

    <br><button type="submit">Submit order</button>
</form>