<?php
include_once '../includes/config.php';


if(isset($_POST['modify'])) {
    
    $reference = $_POST['reference'];

    
    $modifiedLabel = $_POST['label'];
    $modifiedPrice = $_POST['selling_price'];
    $modifiedStockQuantity = $_POST['quantity_stock'];
    

    
    $sql = "UPDATE products 
            SET label = '$modifiedLabel', selling_price = '$modifiedPrice', quantity_stock = '$modifiedStockQuantity'
            WHERE reference = '$reference'";

    if (mysqli_query($conn, $sql)) {
        
        echo "Product information updated successfully.";
        
    } else {
        
        echo "Error: " . mysqli_error($conn);
    }
}
?>
