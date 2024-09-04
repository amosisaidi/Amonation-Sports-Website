  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Product Details</title>
</head>
<body>
    <h1>MUMUMPEPE'S CART</h1>
        <h2>Product Details</h2>

        <form action = "uploading_product_to_database.php" method = "post">
<table>
    <tr>
        <td>Product Name</td>
        <td><input type = "text" name = "productName" placeholder = "washing machine"></td>
    </tr>
    <tr>
        <td>Product Picture</td>
        <td><input type = "text" name = "productPicture" placeholder = "link of your product's picture"></td>
    </tr>
    <tr>
        <td>Unity Price</td>
        <td><input type = "number" name = "unityPrice" placeholder = "$0.0"></td>
    </tr>
    <tr>
        <td>Description</td>
        <td><textarea  name = "description" placeholder = "describe more about the product"></textarea></td>
    </tr>
    <tr>
        <td>Save your Product</td>
        <td><input type="submit" value = "Save"></td>
    </tr>

        </form>



</table>
</body>
</html>