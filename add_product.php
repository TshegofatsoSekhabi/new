<?php
// Get the product data
$categoryName = $_POST['categoryName'];
$code = $_POST['code'];
$name = $_POST['name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];

// Validate inputs
if (empty($code) || empty($name) || empty($price) ) {
    $error = "Invalid product data. Check all fields and try again.";
    
} else {
    // If valid, add the product to the database
    require_once('cellphone.php');
    $query = "INSERT INTO tblProducts
                 (price, categoryDescription, productName, productCode,qty)
              VALUES
                 ('$price', '$categoryName', '$name', '$code','$quantity')";
    $db->exec($query);

    // Display the Product List page
    include('List.php');
}
?>