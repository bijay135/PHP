<?php
if(isset($_POST["confirm"]))
{
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $chick = $_POST["chickensupplier"]*11.55;
    $bmt = $_POST["bmtsupplier"]*13.25;
    $donut = $_POST["donutsupplier"]*9.90;
    $total = $chick+$bmt+$donut;
    $total = $total+(0.06*$total);
    
    echo "<h2>Order Details</h2>";
    echo "<pre>";
    
    echo "<strong>Customer Name              : </strong>".$name."<br>";
    echo "<strong>Phone Number               : </strong>".$phone."<br>";
    echo "<strong>Delivery Address           : </strong>".$address."<br>";
    echo "<strong>Chicken Tandoori Supplier  : </strong>".$chick."<br>";
    echo "<strong>Italian BMT Supplier       : </strong>".$bmt."<br>";
    echo "<strong>Veggie Donuts Supplier     : </strong>".$donut."<br>";
    echo "<strong>Total                      : </strong>RM ".$total." (including 6% GST)<br>";
    
    echo "</pre>";
}
?>