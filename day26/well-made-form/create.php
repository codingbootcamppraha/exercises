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