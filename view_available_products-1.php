<?php
include("db_connection.php");

//Data retrival form the table product_details
$query = "SELECT * FROM product_details";
$result = $conn->query($query);





?>

<!DOCTYPE html>
<html lang="en">
<head>
<form action = "view_available_products.php" method = "post">
    <label for = "search" >Search here <input type = "text" placeholder = "Enter the name of the product you are looking " name = "search">
</form>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <h1>Get anything from here</h1>
</body>

