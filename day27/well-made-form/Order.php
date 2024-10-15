<?php 
class Order 
{
    // user details (ideally in future should be defined by another class)
    public ?int $id = null;
    public ?string $name = null;
    public ?string $phone_number = null;
    public ?string $address = null;
    public ?string $email = null;
    // order details
    public ?string $description = null;
    public ?int $quantity = null;
    public ?float $price = null;
    public ?float $total_price = null;
    public ?string $order_notes = null;

    public function __construct()
    {

    }
}

?>