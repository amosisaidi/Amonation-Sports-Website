<?php
include("db_connection.php");

$productName = $_POST["search"];


//retrieving rows from the table product_details
$query = "SELECT * FROM product_details WHERE product_name = $productName ";
$result = $conn->query($query);

if(!$result){
    echo "<p> There was the problem with then data retrival, Please try again later</p>";
}


//to get number of returned rows
$num_result = $result_numRow();


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
    
</body>
</html>